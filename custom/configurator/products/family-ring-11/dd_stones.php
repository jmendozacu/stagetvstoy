<?php
/// ==========================
// ======================================
if ( basename($_SERVER['PHP_SELF']) == basename( __FILE__ ) ) {
   $home = 'http://' . $_SERVER['SERVER_NAME'] . '/';
   header ("Location: $home");
   die();
}
// ==============================================

// To generate dynamic value for Wordings XML

$xml_data = <<<EOT
<?xml version="1.0" encoding="UTF-8"?>
<stones>
        <stones title="2 birthstones" value="2 birthstones" base="F2" price="0" optvarid="2" rules="1|2" textrules="6|7" textindex="1" ></stones>
		<stones title="3 birthstones" value="3 birthstones" base="F3" price="0" optvarid="3" rules="1|2|3" textrules="6|7|8" textindex="2" ></stones>
		<stones title="4 birthstones" value="4 birthstones" base="F4" price="0" optvarid="4" rules="1|2|3|4" textrules="6|7|8|9" textindex="3" ></stones>
		<stones title="5 birthstones" value="5 birthstones" base="F5" price="0" optvarid="5" rules="1|2|3|4|5" textrules="6|7|8|9|10" selected="1" textindex="0" ></stones>
</stones>
EOT;

/// ==========================
?>