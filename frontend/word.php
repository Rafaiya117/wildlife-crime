<?php
function word_downloader($html){
  header("Content-type: application/vnd.ms-word");
  header("Content-Disposition: attachment; Filename=yourcoolwordfile.doc");
  echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">
  </head>
  <body>
  ';
  echo $html;
  echo '</body></html>'; 
}


$html = '<h1 style="color:blue;">Hello World!</h1><p>A word generated by DomPDF library.</p>';

word_downloader($html);
