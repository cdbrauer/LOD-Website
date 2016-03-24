/* Color Picker */

var inId, outId = "";
var torb, orgColor = "";

//shortcut function
function $I(el) { return document.getElementById(el); }

function cPicker(id1,id2,tb){

	var inField = $I(id1);
	orgColor = inField.value;
	inId = id1;
	outId = id2;
	torb = tb; //t: text color, b: background color

	//compute the cpicker coordinates (beneath the inField)
	var x = inField.offsetLeft;
	var y = inField.offsetTop + inField.offsetHeight + 2;
	while (inField = inField.offsetParent) { //add offset of parent elements
		x += inField.offsetLeft - inField.scrollLeft;
		y += inField.offsetTop - inField.scrollTop;
	}

	//If not already created, create cPickerDiv
	if (!$I("cPickerDiv")) {
		var newNode = document.createElement("div");
		newNode.setAttribute("id", "cPickerDiv");
		newNode.setAttribute("style", "visibility: hidden;");
		document.body.appendChild(newNode);
	}
 
	//move the cPickerDiv to x,y and toggle the visibility
	var cpDiv = $I("cPickerDiv");
	cpDiv.className = "cpDiv"; 
	cpDiv.style.position = "absolute";
	cpDiv.style.left = x + "px";
	cpDiv.style.top = y + "px";
	cpDiv.innerHTML = getColorChart();
	cpDiv.style.visibility = (cpDiv.style.visibility == "visible" ? "hidden" : "visible");
	cpDiv.style.zIndex = 1000;
}

function showColor(color){
	Obj1 = $I(inId);
	Obj1.value = color;
	Obj2 = $I(outId);
	if (torb == "t") {
		Obj2.style.color=color;
	} else {
		Obj2.style.backgroundColor=color;
	}
}

function setColor(color){
	cColor = (!color ? orgColor : color);
	showColor(cColor);
	var cpDiv = $I("cPickerDiv");
	cpDiv.style.visibility = "hidden";
}

function getColorChart() {
	var colors = Array(
	'000000','333333','666666','888888','999999','AAAAAA','BBBBBB','CCCCCC','DDDDDD','EEEEEE','FFFFFF',
	'000066','000099','0000CC','0000FF','3333FF','5555FF','7777FF','9999FF','BBBBFF','CCCCFF','DDDDFF',
	'006600','009900','00CC00','00FF00','33FF33','55FF55','77FF77','99FF99','BBFFBB','CCFFCC','DDFFDD',
	'660000','990000','CC0000','FF0000','FF3333','FF5555','FF7777','FF9999','FFBBBB','FFCCCC','FFDDDD',
	'666600','999900','CCCC00','FFFF00','FFFF33','FFFF55','FFFF77','FFFF99','FFFFBB','FFFFCC','FFFFDD',
	'006666','009999','00CCCC','00FFFF','33FFFF','55FFFF','77FFFF','99FFFF','BBFFFF','CCFFFF','DDFFFF',
	'660606','990099','CC00CC','FF00FF','FF33FF','FF55FF','FF77FF','FF99FF','FFBBFF','FFCCFF','FFDDFF',
	'FF9000','FEA838','FFBA60','FFC375','FFCC89','FFD9A8','FEE0B7','FEE4C1','FFE6C6','FFE8CC','FFEBD1',
	'205040','306050','407060','508070','609080','70A090','80B0A0','90C0B0','A0D0C0','B0D0C0','C0E0D0'
	);
	var cChart = '<table>';
	for (i = 0; i < colors.length; i++) {
		if (i % 11 == 0) { cChart += '<tr>'; }
		cChart += '<td bgcolor="#'+colors[i]+'" class="cpCell" onmouseover="showColor('+"'#"+colors[i]+"'"+')" onclick="setColor('+"'#"+colors[i]+"'"+')"></td>';
		if (i % 11 == 10) { cChart += '</tr>'; }
	}
	cChart += '</table>';
	return cChart;
}
