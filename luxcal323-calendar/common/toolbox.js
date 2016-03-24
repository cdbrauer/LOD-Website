//Create HTML5 elements for IE < 9 (see also css.php)

document.createElement("header");
document.createElement("footer");
document.createElement("aside");
document.createElement("mark");

//global variables

var hlpWinH = 500, hlpWinW = 800, hlpWinT = 100; //help window height, width, top
var evtWinH = 200, evtWinW = 490, evtWinT = 100; //event window height, width, top

//shortcut functions

function $I(el) { return document.getElementById(el); }
function $N(el) { return document.getElementsByName(el); }
function $T(el) { return document.getElementsByTagName(el); }

// functions used in headers

function help(){ //show user guide
	var hlpWinL = (screen.width-hlpWinW)/2;
	var hlpWin = window.open('index.php?xP=22','hlpWin','menubar=no,location=no,toolbar=no,height=' + hlpWinH +',width=' + hlpWinW + ',top=' + hlpWinT + ',left=' + hlpWinL + ', scrollbars');
	hlpWin.focus();
}

function login(){ //user login
	location.href='index.php?lc&xP=20';
	return false;
}

function logout(){ //user logout
	location.href='index.php?lc&cP=0&logout';
}

// functions used on view pages

function goMonth(dt){ //go to month view
	location.href='index.php?lc&cP=2&cD='+dt;
	return false;
}

function goWeek(dt){ //go to week view
	location.href='index.php?lc&cP='+((mode.substr(0,1) == 'w') ? 5 : 4)+'&cD='+dt;
	return false;
}

function goDay(dt){ //go to day view
	location.href='index.php?lc&cP=6&cD='+dt;
	return false;
}

function newE(dt,st,et){ //new event - date / times optional
	var date = (arguments[0]) ? '&evD='+arguments[0] : '';
	var time = (arguments[1]) ? '&evTs='+arguments[1]+'&evTe='+arguments[2] : '';
	var evtWinL = (screen.width-evtWinW)/2;
	var evtWin = window.open('index.php?lc&xP=10&mode=add'+date+time,'evtWin','menubar=no,location=no,toolbar=no,height=' + evtWinH +',width=' + evtWinW + ',top=' + evtWinT + ',left=' + evtWinL + ', scrollbars=0');
	evtWin.focus();
	return false;
}

function editE(id,date){ //edit event
	var evtWinL = (screen.width-evtWinW)/2;
	var evtWin = window.open('index.php?lc&xP=10&mode=edit&eid='+id+'&evD='+date,'evtWin','menubar=no,location=no,toolbar=no,height=' + evtWinH + ',width=' + evtWinW + ',top=' + evtWinT + ',left=' + evtWinL + ', scrollbars=0');
	evtWin.focus();
	return false;
}

function checkE(id,date,path){ //check event
	path = path || '';
	var evtWinL = (screen.width-evtWinW)/2;
	var evtWin = window.open(path+'index.php?lc&xP=11&eid='+id+'&evD='+date,'evtWin','menubar=no,location=no,toolbar=no,height=' + evtWinH +',width=' + evtWinW + ',top=' + evtWinT + ',left=' + evtWinL + ', scrollbars=0');
	evtWin.focus();
	return false;
}

function winFit() { //fit window height to its content size
  neededIH = document.body.offsetHeight + 6;
  currentIH = window.innerHeight || document.documentElement.clientHeight;
	if (window.resizeBy) {
		window.resizeBy(0,neededIH-currentIH);
	} else {
		currentOW = window.outerWidth;
		currentOH = window.outerHeight;
		window.resizeTo(currentOW,neededIH+currentOH-currentIH);
	}
}

//general functions

function done(action) { //close window and refresh calendar (action: c = close; r = reload opener)
	if (action.indexOf('r') > -1) { window.opener.location.reload(); }
	if (action.indexOf('c') > -1) { window.close(); }
}

function jumpMenu(myList) {
	var gotoUrl = myList.options[myList.selectedIndex].value;
	if (gotoUrl != '#') { window.location.href = gotoUrl; }
	return false;
}

function check1(boxName,checked) { //check 1 of N check boxes
	var chBoxes = $N(boxName);
	for (var i=(chBoxes.length-1);i >= 0;i--) {
		chBoxes[i].checked = false;
	}
	checked.checked = true;
}

function checkZ(boxName,checked) { //check box 0 of N check boxes
	var chBoxes = $N(boxName+'[]');
	for (var i=(chBoxes.length-1);i >= 0;i--) {
		chBoxes[i].checked = false;
	}
	$I(boxName+'0').checked = true;
}

function checkN(boxName,checked) { //check any of N check boxes
	var chBoxes = $N(boxName+'[]');
	var check = false;
	for (var i=(chBoxes.length-1);i >= 0;i--) {
		if (chBoxes[i].checked) { check = true; }
	}
	$I(boxName+'0').checked = (check == true) ? false : true;
}

function checkA(boxName) { //check all check boxes
	var chBoxes = $N(boxName+'[]');
	for (var i=(chBoxes.length-1);i >= 0;i--) {
		chBoxes[i].checked = true;
	}
}

function toggleLabel(button,text1,text2) {
	button.innerHTML = (button.innerHTML == text1) ? text2 : text1;
}

function show(elm,formName) { //display/hide element; if form & hide: submit
	var overlay = $I(elm);
	overlay.style.display = (overlay.style.display == "block") ? "none" : "block";
	if (formName && overlay.style.display == "none") { document.forms[formName].submit(); }
	return false;
}

function hide_times(t) { //toggle visibility of event times
	if (t.checked) {
		$I("dTimeS").style.visibility = "hidden";
		$I("dTimeE").style.visibility = "hidden";
	} else {
		$I("dTimeS").style.visibility = "visible";
		$I("dTimeE").style.visibility = "visible";
		t.form.sti.value = t.form.eti.value = "";
	}
}

//drag functions

var dragObj = new Object(); //global object to hold drag data

function dragMe(obj,e) {
	var iso = e ? true : false;
	if (!e) var e = window.event;

  dragObj.elm = parent.$I(obj); //object to drag
	dragObj.cursorStartX = e.screenX;
	dragObj.cursorStartY = e.screenY;

	//save starting position of element
	dragObj.elStartLeft  = dragObj.elm.offsetLeft
	dragObj.elStartTop   = dragObj.elm.offsetTop;

	//capture mousemove and mouseup
	if (iso) { //all good browsers
		document.addEventListener("mousemove", dragStart, true);
		document.addEventListener("mouseup", dragStop, true);
		e.preventDefault();
	} else { //<=IE8
		document.attachEvent("onmousemove", dragStart);
		document.attachEvent("onmouseup", dragStop);
		e.cancelBubble = true;
		e.returnValue = false;
	}
}

function dragStart(e) {
	var iso = e ? true : false;
	if (!e) var e = window.event;

	dragObj.elm.style.left = (dragObj.elStartLeft + e.screenX - dragObj.cursorStartX) + "px";
	dragObj.elm.style.top  = (dragObj.elStartTop  + e.screenY - dragObj.cursorStartY) + "px";
	if (iso) {
		e.preventDefault();
	} else { //<=IE8
		e.cancelBubble = true;
		e.returnValue = false;
	}
}

function dragStop(e) {
	if (document.removeEventListener) { //all but <=IE8
		document.removeEventListener("mousemove", dragStart, true);
		document.removeEventListener("mouseup", dragStop, true);
	} else { //<=IE8
		document.detachEvent("onmousemove", dragStart);
		document.detachEvent("onmouseup", dragStop);
	}
}
//end drag functions

function printNice() {
	var oriHTML = document.body.innerHTML;
	var bgColor = document.body.style.backgroundColor;
	var els = $T("*");
	var regexNP = /noPrint/;
	var regexSB = /scrollBox/;

	document.body.style.backgroundColor = "white";
	for (var i=(els.length-1);i >= 0;i--) {
		if (regexNP.test(els[i].className)) {
			els[i].style.display = "none";
		}
		if (regexSB.test(els[i].className)) {
			els[i].style.position = "static";
			els[i].style.overflow = "visible";
		}
	}
	window.print();
  document.body.innerHTML = oriHTML;
	document.body.style.backgroundColor = bgColor;
	return false;
}

//==== text box popup function ====

function pop(parent,popContent,popClass,popMaxChar){
	var offsetX = -60, offsetY = 16; //x, y offset of box
	var maxLineLen = 80; //default max line length in box
	var popobj;

	var maxBoxWidth = "auto";
	if (typeof popMaxChar == 'number') maxLineLen = popMaxChar;
	var lines = popContent.split("<br>") //split on <br>
	for (var i=0,len=lines.length; i<len; i++) {
		if (lines[i].replace(/(<([^>]+)>)/ig,"").length > maxLineLen) maxBoxWidth = (5 * maxLineLen) + "px";
	}
	if (!$I("htmlPop")) { //pop object not yet existing
		var details = document.createElement("div");
		details.id = "htmlPop";
		document.body.appendChild(details);
	}
	popobj = $I("htmlPop");
	popobj.style.width = maxBoxWidth;
	popobj.className = popClass;
	popobj.innerHTML = popContent;
	popobj.style.visibility = "visible";
	parent.onmousemove = function(e) {
		if (!e) var e = window.event; //if ie
		var rightedge = (!window.innerWidth) ? document.documentElement.clientWidth : window.innerWidth-20; //window edge
		var bottomedge = (!window.innerHeight) ? document.documentElement.clientHeight : window.innerHeight-10;

		if (rightedge-cursorX(e)-offsetX < popobj.offsetWidth) { //if pop hits the right edge
			popobj.style.left = rightedge-popobj.offsetWidth-5+"px"; //don't move it
		} else {
			popobj.style.left = (cursorX(e) < (-offsetX)) ? "5px" : cursorX(e)+offsetX+"px"; //move it with mouse
		}
		if (bottomedge-cursorY(e)-offsetY < popobj.offsetHeight) { //if pop hits the bottom edge
			popobj.style.top = cursorY(e)-popobj.offsetHeight-(offsetY/2)+"px"; //flip it up
		} else {
			popobj.style.top = cursorY(e)+offsetY+"px"; //move it with mouse
		}
	};
	parent.onmouseout = function() {
		parent.onmousemove = null;
		popobj.style.visibility = "hidden";
	};
	return;
}

//==== compatibility functions ====

function cursorX(e) { // Get cursor X-position with respect to the page
	return e.pageX ? e.pageX : e.clientX + document.documentElement.scrollLeft + document.body.scrollLeft;
}
function cursorY(e) { // Get cursor Y-position with respect to the page
	return e.pageY ? e.pageY : e.clientY + document.documentElement.scrollTop + document.body.scrollTop;
}