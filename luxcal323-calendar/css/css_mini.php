<?php
/*
= LuxCal mini event calendar style sheet =

Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

header('content-type:text/css');
header("Expires: ".gmdate("D, d M Y H:i:s", (time()+900)) . " GMT");

/* ---- LOAD USER-INTERFACE THEME DEFINITIONS ---- */
require './lctheme_mini.php';

echo
// ---- make HTML 5 elements block-level for consistent styling (see also toolbox.js) ----
"
header, footer, aside {display:block;}
"
.// ---- general: site -----
"
* {padding:0; margin:0;}
body, select, td, th {font:".FONT0.";}
input[type='text'], input[type='password'], textarea, select {padding:1px 0 0 4px; font:".FONT2.";}
input[type='submit'], input[type='button'], input[type='file'], button {font:".FONT3."; cursor:pointer; line-height:14px;}
body {background:".BGND2."; color:".TEXT1."; overflow:hidden;}
th {background:".BGND3.";}
td {vertical-align:top;}
a {color:".TEXT1."; text-decoration:none; cursor:pointer;}
a.urlembed {font-weight:bold; text-decoration:underline;}
hr {margin:10px 0px; height:2px; border-width:0; color:".BGND3."; background:".BGND3.";}
p {text-align:justify;}
img {border-style:none;}
select option {padding: 0 0 0 4px;}

h6 {font-size:".HEAD6.";}
.fontS {font-size:".FONTS .";}

.floatR {float:right;}
.floatL {float:left;}
.floatC {text-align:center;}

.point {cursor:pointer;}
.arrow {cursor:default;}
.hyper:hover {cursor:pointer; background:".BGND2.";}
.link {cursor:pointer; text-decoration:underline;}
.confirm {margin:auto; width:70%; text-align:center; background:".BGND7.";}
.warning {margin:auto; width:70%; text-align:center; background:".BGND8.";}
.error {margin:auto; width:70%; text-align:center; background:".BGND9.";}
"
.// ---- canvas ----
"
div.titleBar {margin:auto; width:95%; line-height:30px;}
div.contentE {clear:both; padding:3px 10px; font:".FONT4.";}
.endBarTxt {font-size:".FONTS."; color:".TEXT3.";}
.endBar {padding:0 8px;}
.footLB {font:italic 1.1em arial,sans-serif; color:#0055FF;}
.footLR {font:italic 1.1em arial,sans-serif; color:#AA0066;}
"
.// ---- all pages -----
"
.scroll {overflow:auto;}

table.grid {width:100%; border-collapse:collapse;}
table.grid .dCol {border:".BORD1.";}
table.grid tr {height:12px;}
table.grid tr.miniWeek {height:28px;}
table.grid th {color:".TEXT2."; overflow:hidden;}
table.grid td {border:".BORD1."; overflow:hidden;}
table.grid td.wnr {border:none; vertical-align:middle; background:".BGNDA."; text-align:center;}
table.grid td.we0 {background:".BGNDD.";}
table.grid td.we1 {background:".BGNDE.";}
table.grid td.wd0 {background:".BGNDB.";}
table.grid td.wd1 {background:".BGNDC.";}
table.grid td.out {background:".BGNDF.";}
table.grid td.today {".CELTD."}
table.grid td.slday {".CELSD."}

table.evtForm {width:100%; padding:5px; margin:0 0 10px 0; border-spacing:4px; background:".BGNDB.";}

"
.// -- view --
"
.chkBox {color:".TEXT4."; background:#FFFFFF; padding-right:2px;}
.chkBox:hover {background:".BGND2.";}
.miniSquare {float:left; width:5px; height:5px; border:".BORD1.";}
.event {margin-top:2px;}
.dom {text-align:right; padding-right:2px;}
"
.// -- add/edit event --
"
div.repBox {position:absolute; left:40px; bottom:120px; width:360px; padding:10px; border:".BORD1."; background:".BGND5."; z-index:20; display:none;}
"
.// ---- Onmouseover popup Styles (toolbox.js poptext) ----
"
#htmlPop {position:absolute; width:150px; font:".FONT5."; padding:4px; ".($boxRd ? 'border-radius:5px; ' : '').($boxSw ? 'box-shadow:5px 5px 5px #888; ' : '')."visibility:hidden; z-index:10;}
.normal {".POPDT."}
.private {".POPPT."}
.repeat {".POPRT."}
"
.// ---- Date Picker Styles -----
"
.dpTable {width:150px; font:12px arial,sans-serif; text-align:center; color:#505050; background:".BGND1."; border:2px outset white;}
.dpTable th {	background:".BGND3."; color:".TEXT1.";}
.dpTD {border:1px solid ".BGND1.";}
.dpTDHover {border:1px solid #888888; cursor:pointer; color:red;}
.dpHilight {border:1px solid #888888; color:red; font-weight:bold;}
.dpTitle {font:bold 12px arial,sans-serif; color:".TEXT1.";}
.dpButton {font:bold 10px arial,sans-serif; color:".TEXT1."; background:".BGND2."; cursor:pointer;}
"
.// ---- Time Picker Styles -----
"
.tpFrame {width:155px; overflow:hidden; font:11px/12px arial,sans-serif; text-align:center; color:#505050; background:#F2F2F2; border:1px solid #AAAAAA;}
.tpAM {background:#EEFFFF;}
.tpPM {background:#FFCCEE;}
.tpEM {background:#DDFFDD;}
.tpPick:hover {background:#A0A0A0; color:red;}
"
?>
