<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
require_once (dirname(__FILE__).DS.'helper.php');
if ($load){
$html = getPage($load,'JOOMLAmod','5','');
$html = str_replace('100%','',$html);
$piece = explode('<div class="profile_top_wash">',$html);
$piece = explode('<div class="UIRecentActivity_Header">RECENT ACTIVITY</div>',$piece[1]);
$main = str_replace('<li class="ufiNub uiListItem uiListVerticalItemBorder"><i></i><input type="hidden" autocomplete="off" name="xhp_ufi" value="1" /></li>','',$piece[0]);
$main = str_replace('<li class="hidden_elem uiUfiLike uiListItem uiListVerticalItemBorder"></li>','',$main);
$main = str_replace('<ul class="uiList uiUfi focus_target fbUfi" data-ft="&#123;&quot;type&quot;:&quot;ufi&quot;&#125;"><li class="uiUfiComments uiListItem uiListVerticalItemBorder hidden_elem"><ul class="commentList"></ul></li></ul></form>','',$main);
$main = str_replace('href="#"','href="'.$load.'"',$main);
$main = str_replace('<br />',' ',$main);
echo $main."<br /><small><a href='$load'>DISCLAIMER, DS1: $load</a></small>";
}
if ($load2){
$html = getPage($load2,'JOOMLAmod','5','');
$html = str_replace('100%','',$html);
$piece = explode('<div class="profile_top_wash">',$html);
$piece = explode('<div class="UIRecentActivity_Header">RECENT ACTIVITY</div>',$piece[1]);
$main = str_replace('<li class="ufiNub uiListItem uiListVerticalItemBorder"><i></i><input type="hidden" autocomplete="off" name="xhp_ufi" value="1" /></li>','',$piece[0]);
$main = str_replace('<li class="hidden_elem uiUfiLike uiListItem uiListVerticalItemBorder"></li>','',$main);
$main = str_replace('<ul class="uiList uiUfi focus_target fbUfi" data-ft="&#123;&quot;type&quot;:&quot;ufi&quot;&#125;"><li class="uiUfiComments uiListItem uiListVerticalItemBorder hidden_elem"><ul class="commentList"></ul></li></ul></form>','',$main);
$main = str_replace('href="#"','href="'.$load2.'"',$main);
$main = str_replace('<br />',' ',$main);
echo $main."<br /><small><a href='$load2'>DISCLAIMER, DS2: $load2</a></small>";
}
if ($load3){
$html = getPage($load3,'JOOMLAmod','5','');
$html = str_replace('100%','',$html);
$piece = explode('<div class="profile_top_wash">',$html);
$piece = explode('<div class="UIRecentActivity_Header">RECENT ACTIVITY</div>',$piece[1]);
$main = str_replace('<li class="ufiNub uiListItem uiListVerticalItemBorder"><i></i><input type="hidden" autocomplete="off" name="xhp_ufi" value="1" /></li>','',$piece[0]);
$main = str_replace('<li class="hidden_elem uiUfiLike uiListItem uiListVerticalItemBorder"></li>','',$main);
$main = str_replace('<ul class="uiList uiUfi focus_target fbUfi" data-ft="&#123;&quot;type&quot;:&quot;ufi&quot;&#125;"><li class="uiUfiComments uiListItem uiListVerticalItemBorder hidden_elem"><ul class="commentList"></ul></li></ul></form>','',$main);
$main = str_replace('href="#"','href="'.$load3.'"',$main);
$main = str_replace('<br />',' ',$main);
echo $main."<br /><small><a href='$load3'>DISCLAIMER, DS3: $load3</a></small>";
}
require(JModuleHelper::getLayoutPath('mod_data'));