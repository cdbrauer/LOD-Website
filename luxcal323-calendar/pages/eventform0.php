<?php
//sanity check
if (!defined('LCC')) { exit('not permitted ('.substr(basename(__FILE__),0,-4).')'); } //via script only
echo "<form id='event' name='event' method='post' action='index.php?lc&amp;xP=10'>
	<input type='hidden' name='mode' value='{$mode}'>
	<input type='hidden' name='eid' value='{$eid}'>
	<input type='hidden' name='evD' value='{$evD}'>
	<input type='hidden' name='oUid' value='{$oUid}'>
	<input type='hidden' name='chd' value='{$chd}'>
	<input type='hidden' name='mdt' value='{$mdt}'>
	<input type='hidden' name='edr' value=\"{$edr}\">
	<input type='hidden' name='own' value=\"{$own}\">\n";
$catColor = ($col ? "color:{$col};" : '').($bco ? "background-color:{$bco};" : '');
echo "<table class='evtForm'>\n<tr><td class='floatC'>
	<span".($catColor ? " style='{$catColor}'" : '').">{$tit}</span>
	</td></tr>
	<tr><td class='floatC'>".($r_t > 0 ? $xx['evt_is_repeating'] : $xx['evt_is_multiday'])."</td></tr>
	<tr><td class='floatC'><br>{$xx['evt_edit_series_or_occurrence']} (".IDtoDD($evD).")?</td></tr>
	</table>\n";
echo "<div class='floatC'>
	<input type='submit' name='edit_nx' value=\"{$xx['evt_edit_series']}\">&nbsp;&nbsp;&nbsp;
	<input type='submit' name='edit_1x' value=\"{$xx['evt_edit_occurrence']}\">&nbsp;&nbsp;&nbsp;
	<button type='button' onclick='javascript:self.close();'>{$xx['evt_close']}</button>
	</div>\n";
echo "</form>\n";
?>
