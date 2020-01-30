<html>

<head>
    <title> Ingresar Libro</title>
</head>
<header>
    Ingresa los datos del Libro
</header>
<form action='administrar_proveedor.php' method='post'>
    <table>
        <tr>
            <td>Id Proveedor:</td>
            <td> <input type='text' name='idprov'></td>
        </tr>
        <tr>
            <td>Nombre del Proveedor:</td>
            <td><input type='text' name='nomprov'></td>
        </tr>
        <tr>
            <td>Id ciudad del proveedor:</td>
            <td><input type='text' name='idciu1'></td>
        </tr>
        <tr>
            <td>Direccion del proveedor:</td>
            <td><input type='text' name='dirprov'></td>
        </tr>
        <tr>
            <td>Telefono del proveedor:</td>
            <td><input type='text' name='telprov'></td>
        </tr>
        <tr>
            <td>Email del proveedor:</td>
            <td><input type='text' name='emaprov'></td>
        </tr>
        <input type='hidden' name='insertar' value='insertar'>
    </table>
    <input type='submit' value='Guardar'>
    <a href="index.php">Volver</a>
</form>

</html>