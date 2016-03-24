<?php
//sanity check
if (!defined('LCC')) { exit('not permitted ('.substr(basename(__FILE__),0,-4).')'); } //launch via script only

if ($app and $apd) { //manager or admin
	echo "<div class='apdBar'>{$xx['evt_apd_locked']}</div>\n";
}

$evtArr = array ('ven' => $ven, 'cnm' => $cnm, 'des' => $desHtml, 'xf1' => $xf1Html, 'xf2' => $xf2Html); //Html: with hyperlinks

$eColor = ($col or $bco) ? " style='color:{$col}; background:{$bco};'" : '';
echo "<table class='evtForm'>
	<tr><td>{$xx['evt_title']}:</td><td><span{$eColor}>{$tit}</span></td></tr>";
if ($pri) { echo "<tr><td colspan='2'>{$xx['evt_private']}</td></tr>\n"; }
echo makeE($evtArr,$set['evtTemplGen'],'td',"\n",'12345');
echo "<tr><td colspan='2'><hr></td></tr>
	<tr><td>{$xx['evt_date_time']}:</td><td>{$sda}";
if ($ald) {
	echo ($eda ? " - {$eda}" : '')." {$xx['at_time']} {$xx['evt_all_day']}";
} else {
	echo " {$xx['at_time']} {$sti}";
	if ($eda) { echo " - {$eda}"; }
	if ($eti) { echo ($eda ? " {$xx['at_time']} " : ' - ').$eti; }
}
echo "</td></tr>\n";
if ($r_t) {
	echo "<tr><td colspan='2'>{$repTxt}<br></td></tr>\n";
}
if ($not != "" and ($privs > 2 or ($privs == 2 and $uid == $_SESSION['uid']))) { //has rights to see email list
	echo "<tr><td colspan='2'><hr></td></tr>\n
		<tr><td>{$xx['evt_notify']}:</td>\n<td>{$not} {$xx['evt_days_before_event']}</td></tr>
		<tr><td colspan='2'>{$nml}</td></tr>\n";
}
echo "<tr><td colspan='2'><hr></td></tr>
	<tr><td>{$xx['evt_added']}:</td><td>".IDTtoDDT($adt)." {$xx['by']} {$own}";
if ($mdt and $edr) {
	echo "</td></tr>\n<tr><td>{$xx['evt_edited']}:</td><td>".IDTtoDDT($mdt)." {$xx['by']} {$edr}";
}
echo "</td></tr>\n";
echo "</table>\n";
echo "<div class='floatC noPrint'><button onClick='javascript:self.close();'>{$xx["evt_close"]}</button></div>\n";
?>
