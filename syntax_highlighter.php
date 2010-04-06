<?php
/*
Plugin Name: Javascript Syntax Highlighter
Plugin URI: http://wordpress.org/extend/plugins/javascript-syntaxhighlight/
Description: This plugin eases the use of Alex Gorbatchev's SyntaxHighlighter (http://alexgorbatchev.com/wiki/SyntaxHighlighter), a lightweight javascript based code snippet highlighter within WordPress. Supports a wide range of languages currently including: AS3, Bash, C#, ColdFusion, C++, CSS, Delphi, Diff, Erlang, Groovy, JScript, Java, JavaFX, Perl, Php, Plain, PowerShell, Python, Ruby, Scala, SQL, VB, XML. As well as being easily extended to include more languages it it highly customizable, as described in the usage directions (http://alexgorbatchev.com/wiki/SyntaxHighlighter:Usage)
Version: 2.1.364
Author: Alexander Wagner
Author URI: http://chaoticmusings.com
*/

/* --------- There is no need to change anything past this point ---------- */

function insert_header() {
	$current_path = get_option('siteurl') .'/wp-content/plugins/' . basename(dirname(__FILE__)) .'/';
	$theme = "shThemeDefault.css";
	$theme_path = (strpos($theme, "/") === FALSE) ? $current_path . "styles/" . $theme : $theme;

	echo "\t<link rel='stylesheet' type='text/css' href='$current_path/styles/shCore.css' />\n";
	echo "\t<link rel='stylesheet' type='text/css' href='$theme_path' />\n";
	
}

function insert_footer() {
	$current_path = get_option('siteurl') .'/wp-content/plugins/' . basename(dirname(__FILE__)) .'/scripts/';
	$brushes = array("shBrushAS3.js", "shBrushBash.js", "shBrushCSharp.js", "shBrushColdFusion.js", "shBrushCpp.js", "shBrushCss.js", "shBrushDelphi.js", "shBrushDiff.js", "shBrushErlang.js", "shBrushGroovy.js", "shBrushJScript.js", "shBrushJava.js", "shBrushJavaFX.js", "shBrushPerl.js", "shBrushPhp.js", "shBrushPlain.js", "shBrushPowerShell.js", "shBrushPython.js", "shBrushRuby.js", "shBrushScala.js", "shBrushSql.js", "shBrushVb.js", "shBrushXml.js");

	echo "\t<script type='text/javascript' src='{$current_path}shCore.js'></script>\n";

	foreach ($brushes as $brush) {
		echo "\t<script type='text/javascript' src='$current_path$brush'></script>\n";
	}
	echo "\t<script type='text/javascript'>
		SyntaxHighlighter.config.clipboardSwf = '{$current_path}clipboard.swf';
		SyntaxHighlighter.all();
	</script>\n";
}

add_action('wp_head','insert_header');
add_action('wp_footer','insert_footer');
?>
