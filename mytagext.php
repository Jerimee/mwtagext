<?php
$wgAutoloadClasses['mytagext'] = $IP . '/extensions/mytagext/mytagext_dostuff.php';
$wgHooks['ParserFirstCallInit'][] = 'mytagext::onParserInit';
