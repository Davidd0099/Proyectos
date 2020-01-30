<?php 
$q=0;
for ($i=0; $i < $_POST["cantidad"] ; $i++) { 
    if ($_POST["n".$i] <= 40) {
        $q = $q + ($_POST["n".$i]*20);
    }else {
        if ($_POST["n".$i] > 40) {
            $q = $q + ( ( 40 * 20 ) + ( ( $_POST["n".$i] - 40 )* 25 ) );
        }
    }
}
echo"el total a pagar de los obreros es " . $q;
?>