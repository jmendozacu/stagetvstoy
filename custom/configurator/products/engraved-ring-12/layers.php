<?php
	$xml_data = <<<EOT
<?xml version="1.0" encoding="UTF-8"?>
<steps>
	<step name="Step 1: Front Side" default_view="true" to_js="true" replace_preview="0">
		  <layer type="image" color="Black" value="/rings/engraved/F.png" resize="1" img_type="jpg" jpg_quality="90" left="0" top="0" width="330" height="330" border="1"></layer>
	  <layer type="text" font="Apple Chancery" text_style="arcnew1" ucolor="#c7c7c7" talpha="1" txoffset="1" tyoffset="1" tdepth="2" uscolor="#000000" salpha="1" sxoffset="-1" syoffset="-1" sdepth="1" usecolor="true" width="430" height="32" top="94" left="-28" align="center" size="32" rotation="0" direction="CW" arc_args="88-359" perspective="1.5" xscale="0.85" yscale="1" mask="masks/F_top.png"></layer>
    <layer type="text" font="Apple Chancery" text_style="arcnew1" ucolor="#c7c7c7" talpha="1" txoffset="1" tyoffset="1" tdepth="1" uscolor="#000000" salpha="1" sxoffset="-1" syoffset="-1" sdepth="1" usecolor="true" width="400" height="23" top="130" left="-43" align="center" size="23" rotation="0" direction="CCW" arc_args="100-180" perspective="1.5" xscale="1" yscale="1.4" mask="masks/F_bottom.png"></layer>
	</step>
</steps>
EOT;
?>
