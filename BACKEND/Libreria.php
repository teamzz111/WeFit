<?php
  require 'phpqrcode/qrlib.php';
  $dir = 'temp/';
  if (!file_exists($dir))
    mkdir($dir);

  $filename=$dir.'test.png';

  $tamanio = 5;
  $level= 'M';
  $frameSize=60;
  $contenido='X';

  QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);

  echo '<img src="'.$filename.'" />';

 ?>
