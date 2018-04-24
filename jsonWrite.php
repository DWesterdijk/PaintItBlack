<?php
    $debug = true;
    $control = "";
    $filePaht = "drawing.json";
    if (!empty($_GET['put'])) {
      $control = $_GET['put'];
    }
    if ($debug) {
      echo "php response 1 => " . $control . "<hr>";
    }
    if ($debug) {
      echo "php response 2 => " . json_encode($control);
    }
    $file = fopen($filePaht, "w") or die("Can't locate file");
    fwrite($file, $control);
    fclose($file);
?>
