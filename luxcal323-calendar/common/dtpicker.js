/* -- Date / Time Picker -- */

//Common functions

function $I(elmId) { return document.getElementById(elmId); }

function createDiv(divId,x,y) {;
	//If not present, create picker div
	if (!$I(divId)) {
		var newNode = document.createElement("div");
		newNode.setAttribute("id", divId);
		newNode.setAttribute("style", "visibility: hidden;");
		document.body.appendChild(newNode);
	}
 	//move div to x,y and toggle visibility
	var xpDiv = $I(divId);
	xpDiv.className = divId; 
	xpDiv.style.position = "absolute";
	xpDiv.style.left = x + "px";
	xpDiv.style.top = y + "px";
	xpDiv.style.visibility = (xpDiv.style.visibility == "visible" ? "hidden" : "visible");
	xpDiv.style.display = (xpDiv.style.display == "block" ? "none" : "block");
	xpDiv.style.zIndex = 1000;
	return(xpDiv);
}


//Date Picker

var formName, dateFieldId, clearButton;
 
//vars dFormat, tFormat, wStart, dwStartH, dwEndH, dpMonths, dpWkdays, dpClear and dpToday must be defined outside dtpicker.js !

function dPicker(cB,form,dateFieldId1,dateFieldId2) {

	var dateField1 = $I(dateFieldId1);
	var dateField2 = (dateFieldId2) ? $I(dateFieldId2) : "";
	dateFieldId = dateFieldId1;
	formName = form;
	clearButton = cB;

	//compute dpicker coordinates
	var x = dateField1.offsetLeft;
	var y = dateField1.offsetTop + dateField1.offsetHeight;
	var parent = dateField1;
	while (parent = parent.offsetParent) { //add offset of parent elements
		x += parent.offsetLeft - parent.scrollLeft;
		y += parent.offsetTop - parent.scrollTop;
	}

	//If not present, create dpDiv, move it to x,y and toggle visibility
	var dpDiv = createDiv("dpDiv", x, y);

	//get working date from dateField 1 or 2
	var dateString;
	var dt;
 
	if (dateField1.value) {
		dateString = dateField1.value;
	} else if (dateField2) {
		dateString = dateField2.value;
	}
	if (dateString) {
		var dtArray = dateString.split(/[^\d]/);
		posY = dFormat.search("y") / 2;
		posM = dFormat.search("m") / 2;
		posD = dFormat.search("d") / 2;
		dt = new Date(parseInt(dtArray[posY],10), parseInt(dtArray[posM],10) - 1, parseInt(dtArray[posD],10));
	} else {
		dt = new Date();
	}
	refreshDP(dt.getFullYear(), dt.getMonth(), dt.getDate());
}

function refreshDP(year,month,day) { //display/refresh date picker
	var curDate = new Date();
	var today = curDate.getFullYear()+("0"+(curDate.getMonth()+1)).slice(-2)+("0"+curDate.getDate()).slice(-2);
	var TD = "<td class='dpTD' onMouseOut='this.className=\"dpTD\";' onMouseOver='this.className=\"dpTDHover\";' "; //leave open
	var html = "<table class='dpTable' cols=7>\n<tr>";
	html += "<td>" + getButtonCode(year, month, -1, "&lt;") + "</td>\n";
	html += "<td class='dpTitle' colspan=5>" + dpMonths[month] + " " + year + "</td>\n";
	html += "<td>" + getButtonCode(year, month, 1, "&gt;") + "</td>\n</tr>\n";
 	html += "<tr>";
  for(i = wStart; i < wStart+7; i++) { html += "<th>" + dpWkdays[i] + "</th>\n"; }
	html += "</tr>\n<tr>";
 	curDate = new Date(year, month, 1);
  for (i = (curDate.getDay() + 6 + (1-wStart)) % 7; i > 0; i--) { html += "<td></td>\n"; }
 	do {
		dayNum = curDate.getDate();
		dateString = year + ("0"+(month+1)).slice(-2) + ("0"+dayNum).slice(-2); //yyyymmdd
		TD_onclick = " onclick=\"updateDateField('" + dateString + "');\">";
		html += TD + TD_onclick + (dayNum == day ? "<div class='dpHilight'>" + dayNum + "</div>" : dayNum) + "</td>\n";
    if ((curDate.getDay() + 6 + (1-wStart)) % 7 == 6) html += "</tr>\n<tr>"; //if EndOfWeek, start new row
		curDate.setDate(dayNum + 1); //increment the day
	} while (curDate.getDate() > 1)
  for (i = (curDate.getDay() + 6 + (1-wStart)) % 7; i < 7; i++) { html += "<td class=out></td>\n"; }
	html += "</tr>\n<tr><td colspan=7>";
  html += "<button class='dpButton' onclick=\"updateDateField('"+today+"');\"> "+dpToday+" </button> ";
	if (clearButton != 0) {
		html += "<button class='dpButton' onclick='updateDateField();'> "+dpClear+" </button>";
	}
  html += "</td>\n</tr>\n</table>\n";
 	$I("dpDiv").innerHTML = html;
}

function getButtonCode(year,month,offset,label) {
	var newM = (month + 12 + offset) % 12;
	var newY = (Math.abs(newM - month) > 1) ? year + offset : year;
	return "<button class='dpButton' onclick='refreshDP(" + newY + "," + newM + ");'>" + label + "</button>";
}

function updateDateField(yyyymmdd) {
	var dateField = $I(dateFieldId);
	var dpDiv = $I("dpDiv");
	if (yyyymmdd) {
		dateString = dFormat.replace ("y",yyyymmdd.substr(0,4)).replace ("m",yyyymmdd.substr(4,2)).replace ("d",yyyymmdd.substr(6,2));
		dateField.value = dateString;
		if (formName != "nill") document.forms[formName].submit();
	} else {
		dateField.value = '';
	}
	dpDiv.style.visibility = "hidden";
	dpDiv.style.display = "none";
}


//Time Picker

function tPicker(timeFieldId) {
	var timeField = $I(timeFieldId);
	var hhmm;

	//compute tpicker coordinates
	var x = timeField.offsetLeft + timeField.offsetWidth + 22;
	var y = timeField.offsetTop - 95;
	var parent = timeField;
	while (parent = parent.offsetParent) { //add offset of parent elements
		x += parent.offsetLeft - parent.scrollLeft;
		y += parent.offsetTop - parent.scrollTop;
	}

	//If not present, create tpDiv, move it to x,y and toggle visibility
	var tpDiv = createDiv("tpDiv",x,y);

 	//draw the timepicker table; the timeField object will receive the time
	var html='<div class="tpFrame">';
	var apm = /\s*a/i.exec(tFormat);
	if (apm != null) {
		var am = String(apm).replace("a","am").replace("A","AM"); 
		var pm = String(apm).replace("a","pm").replace("A","PM"); 
	}
	if (apm != null) { html += '- AM -'; }
	for (var i=dwStartH;i<dwEndH;i++){
		if (i==dwStartH) { html += '<div class="tpAM">'; }
		if (i==12 && (apm != null)) { html += '- PM -'; }
		if (i==12) { html += '<div class="tpPM">'; }
		if (i==18) { html += '<div class="tpEM">'; }
		for (var j=0;j<60;j += 15) {
			if (apm != null) {
				hh = i;
				ampm = (hh < 12) ? am : pm;
				if (hh >= 13) { hh -= 12; }
				hhmm1 = String(hh) + ":" + String("0" + j).slice(-2) + ampm;
				hhmm2 = String("0" + hh).slice(-2) + ":" + String("0" + j).slice(-2);
			} else {
				hhmm1 = hhmm2 = String("0" + i).slice(-2) + ":" + String("0" + j).slice(-2)
			}
			html += '<a class="tpPick" href="#" onclick="updateTimeField(\''+timeFieldId+'\', \''+hhmm1+'\');">'+hhmm2+'</a>';
			if (j<45) { html += '&nbsp;&nbsp;'; }
		}
		html += (i==11 || i==17 || i==23) ? '</div>' : '<br>';
	}
	html += '</div>';
	tpDiv.innerHTML = html;
}

function updateTimeField(timeFieldId,timeString) {
	var timeField = $I(timeFieldId);
	if (timeString) { timeField.value = timeString; }
	var tpDiv = $I("tpDiv");
	tpDiv.style.visibility = "hidden";
	tpDiv.style.display = "none";
	timeField.focus();
}
