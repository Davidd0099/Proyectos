<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="l2.php" method="post">
        <input type="text" name="name" id="" placeholder="Nombre" placeholder="Edad"> <br>
        <input type="number" name="age" id="" placeholder="Edad"><br>
        Sexo: 1 si es hombre, 2 si es mujer<select name="sex" id=""><br>
        <option value="1">1</option>
        <option value="2">2</option>
        </select><br>
        Estado civil
        Solter@<input type="radio" name="ec" id="" value="s"><br>
        Casad@<input type="radio" name="ec" id="" value="c"><br>
        Divorsiad@<input type="radio" name="ec" id="" value="d"><br>
        Viud@<input type="radio" name="ec" id="" value="v">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>