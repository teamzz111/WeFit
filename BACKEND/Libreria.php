<?php
  require 'phpqrcode/qrlib.php';
  $dir = 'temp/'
  if (!file_exists($dir)) 
  $filename=$dir.'test.png';

  $tamanio = 10;
  $level= 'M';
  $frameSize=3;
  $contenido='Hola mundo';

  QRcode::png($contenido, $filename, $level, $tamanio $frameSize);

  echo '<img src="'.$filename.'" />';

 ?>
