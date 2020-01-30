<?PHP
$q=0;
for ($i=0; $i < $_POST["cantidad"] ; $i++) { 
    echo"El cliente #" . $i . " gasto " . $_POST["n".$i]." pesos <br>";
    $q = $q + $_POST["n".$i];
}

echo"<br>";
echo"El total pagado en el dia es de " . $q;


    
    
?>