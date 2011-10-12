<?php
require_once('../lib/markdown.php');

if ($_SERVER['HTTP_HOST'] != 'ogp.me') {
	//header("Location: http://ogp.me/", false, "301");
	//exit;
}

$markdown = @file_get_contents("../content/index.markdown");

if (!$markdown) {
	header("HTTP/1.1 500 Internal Server Error");
	exit;
}

$html = Markdown($markdown);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
	<head>
                <script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>The Open Graph Protocol</title>
		<link rel="stylesheet" href="base.css" type="text/css"/>
	 	<meta property="og:title" content="Open Graph Protocol" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://ogp.me/" />
		<meta property="og:image" content="http://ogp.me/logo.png" />
		<meta property="og:description" content="The Open Graph protocol enables any web page to become a rich object in a social graph. " />
		<meta property="fb:app_id" content="115190258555800" />
                <link rel="alternate" type="application/rdf+xml" href="http://ogp.me/ns/ogp.me.rdf" />
                <link rel="alternate" type="text/turtle" href="http://ogp.me/ns/ogp.me.ttl" />
	</head>
	<body>
		<div id="body">
		<div id="header">
			<h1>The Open Graph Protocol</h1>
			<img src="http://ogp.me/logo.png" />
		</div>
		<div id="content">
			<?= $html ?>
		</div>
		<div id="footer">
			<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fogp.me%2F&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:450px; height:80px;"></iframe>
			<p>The Open Graph protocol was originally created at Facebook and is inspired by <a href="http://en.wikipedia.org/wiki/Dublin_Core">Dublin Core</a>, <a href="http://googlewebmastercentral.blogspot.com/2009/02/specify-your-canonical.html">link-rel canonical</a>, <a href="http://microformats.org/">Microformats</a>, and <a href="http://en.wikipedia.org/wiki/RDFa">RDFa</a>. The specification described on this page is available under the <a href="http://openwebfoundation.org/legal/the-0-9-agreements---necessary-claims">Open Web Foundation Agreement, Version 0.9</a>. Last updated 
                        <?= date('F dS, Y', filemtime('../content/index.markdown')) ?>
                        </p>
		</div>
		</div>
<script type="text/javascript">
var _sf_async_config={uid:1415,domain:"ogp.me"};
(function(){
  function loadChartbeat() {
    window._sf_endpt=(new Date()).getTime();
    var e = document.createElement('script');
    e.setAttribute('language', 'javascript');
    e.setAttribute('type', 'text/javascript');
    e.setAttribute('src',
       (("https:" == document.location.protocol) ? "https://s3.amazonaws.com/" : "http://") +
       "static.chartbeat.com/js/chartbeat.js");
    document.body.appendChild(e);
  }
  var oldonload = window.onload;
  window.onload = (typeof window.onload != 'function') ?
     loadChartbeat : function() { oldonload(); loadChartbeat(); };
})();

</script>
	</body>
</html>
