=== Javascript Syntax Highlighter ===
Contributors: peterryan, rarian 
Tags: code, syntax, highlighter, javascript, formatting
Requires at least:2.0.0
Tested up to: 3.0
Stable tag: trunk

This plugin eases the use of SyntaxHighlighter by Alex Gorbatchev to highlight code snippets within WordPress. 

== Description ==

This plugin eases the use of [Alex Gorbatchev's SyntaxHighlighter](http://alexgorbatchev.com/wiki/SyntaxHighlighter), a lightweight javascript based code snippet highlighter within WordPress.


Supports a wide range of languages currently including:= Feature summary =

* 100% client side, no server dependency
* Multiple languages support
* Wide browser support
* Very lightweight

= Languages Supported =

* AS3
* Bash
* C#
* ColdFusion
* C++
* CSS
* Delphi
* Diff
* Erlang
* Groovy
* JScript
* Java
* JavaFX
* Perl
* Php
* Plain
* PowerShell
* Python
* Ruby
* Scala
* SQL
* VB
* XML

== Installation ==

1. Extract plugin into /wp-content/plugins directory.
1. Activate the plugin.
1. Specify the code snippets in your blog post following the [Usage Directions](http://alexgorbatchev.com/wiki/SyntaxHighlighter:Usage#.3Cpre_.2F.3E_method).

Here is an example to produce PHP syntax highlighting once the plugin is activated: 

<pre class="brush: php"> 
/***********************************
 ** Multiline block comments
 **********************************/
 
$stringWithUrl = &quot;http://alexgorbatchev.com&quot;;
$stringWithUrl = 'hello world';
	
ob_start(&quot;parseOutputBuffer&quot;);		// Start Code Buffering
session_start();
	
function parseOutputBuffer($buf) {
	global $portal_small_code, $portal_gzcompress;
	global $PHP_SELF, $HTTP_ACCEPT_ENCODING;
 
	// cleaning out the code.
	if($portal_small_code &amp;&amp;&nbsp;!$portal_gzcompress) {
		$buf = str_replace(&quot;	&quot;, &quot;&quot;, $buf);
		$buf = str_replace(&quot;\n&quot;, &quot;&quot;, $buf);
		$buf = str_replace(chr(13), &quot;&quot;, $buf);
	}
}
</pre> 

== Screenshots ==

1. Simple PHP Example
