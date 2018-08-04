<?php
  require 'phpqrcode/qrlib.php';
  $dir = 'temp/'
  if (!file_exists($dir)) {
  $filename=$dir.'test.png'

  $tamaño = 10;
  $level= 'M';
  $frameSize=3;
  $contenido='H';

  QRcode::png($contenido, $filename, $level, $tamaño $frameSize);

  echo '<img src="'.$filename.'" />';  
  }
 ?>
