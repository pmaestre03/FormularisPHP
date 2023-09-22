<?php
$quant = $_POST["quant"];

for ($i=1;$i<=$quant;$i++) {
    echo "<p><a href='ex22pg3.php?quant=$i'>Comanda $i</a></p>\n";
}
?>