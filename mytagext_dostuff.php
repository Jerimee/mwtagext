<?php
 
$wgHooks['ParserFirstCallInit'][] = 'wfSampleParserInit';
 
// Hook our callback function into the parser
function wfSampleParserInit( Parser $parser ) {
	// When the parser sees the <sample> tag, it executes 
	// the wfSampleRender function (see below)
	$parser->setHook( 'sample', 'wfSampleRender' );
        // Always return true from this function. The return value does not denote
        // success or otherwise have meaning - it just must always be true.
	return true;
}
 
// Execute 
function wfSampleRender( $input, array $args, Parser $parser, PPFrame $frame ) {
	// Nothing exciting here, just escape the user-provided
	// input and throw it back out again
	return htmlspecialchars( $input );
}
