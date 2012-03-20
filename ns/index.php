<?php
if (stripos($_SERVER['HTTP_ACCEPT'], 'text/turtle') !== FALSE) {
  $schema = file_get_contents('ogp.me.ttl');
  header("Content-Type: text/turtle");
  die($schema);

} else if (stripos($_SERVER['HTTP_ACCEPT'], 'application/rdf+xml') !== FALSE) {
  $schema = file_get_contents('ogp.me.rdf');
  header("Content-Type: application/rdf+xml");
  die($schema);

} else if ($_SERVER['HTTP_REFERER'] == 'http://ogp.me/') {
  $schema = file_get_contents('ogp.me.ttl');
  header("Content-Type: text/turtle");
  die($schema);

}

header('Location: http://ogp.me/');
