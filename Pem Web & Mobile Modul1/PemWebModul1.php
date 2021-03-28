<?php
            $names= ["evan", "van", "nav", "vaen","avee"];
            function vokal($kalimat) {
            $a = substr_count($kalimat, 'a');
            $i = substr_count($kalimat, 'i');
            $u = substr_count($kalimat, 'u');
            $e = substr_count($kalimat, 'e');
            $o = substr_count($kalimat, 'o');

            $count = ($a+$i+$u+$e+$o);

            return $count;
          }

          function konsonan($kalimat) {
            $jumlah = strlen($kalimat);
            $a = substr_count($kalimat, 'a');
            $i = substr_count($kalimat, 'i');
            $u = substr_count($kalimat, 'u');
            $e = substr_count($kalimat, 'e');
            $o = substr_count($kalimat, 'o');

            $count = $jumlah - ($a+$i+$u+$e+$o);

            return $count;
        }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<p>PemWeb Modul 1 <p>
<p>Evan Alphario Imanuel<P>
<p>193030503059<P>

           <?php foreach ($names as $name) :  ?>

                    <?php
                         echo "<br>";
                         echo " Nama           :". $name."<br>"; 
                         echo " Jumlah Huruf   :". strlen($name)."<br>"; 
                         echo " Jumlah Kata    :". str_word_count($name)."<br>"; 
                         echo " Kebalikan Nama :". strrev($name)."<br>"; 
                         echo " Huruf Vokal    :". vokal(  $name)."<br>";  
                         echo " Huruf Konsonan :". konsonan( $name)."<br>"; 
                         echo "<br>"; 
                    ?>
                      <?php endforeach; ?>


</body>
</html>