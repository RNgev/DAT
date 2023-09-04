<?php

$file = fopen("info.txt", "w");
$txt = "lat " . $_GET["lat"] . "/nlong" . $_GET["long"];
fwrite($file, $txt);
fclose($file);

?>
