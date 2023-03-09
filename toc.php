<?php
$dir = "C:/xampp/htdocs/WebAppEnetC";
$files = scandir($dir);
$toc = "<h2>Table of Contents</h2>\n<ul>\n";

foreach ($files as $file) {
  if ($file != "." && $file != ".." && strpos($file, ".html") !== false | strpos($file, ".php") !== false) {
    // Add the file name to the Table of Contents
    $toc .= "<li><a href=\"$file\" target=\"_blank\">$file</a></li>\n";
  }
}

$toc .= "</ul>\n";
echo $toc;
?>
