<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulariodane";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="fondo">
    <h1>Resultado de la Encuesta</h1>
    <table class="tablaPrincipal" border="1">
        <tr class="primaraFila">
            <td>Id</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Cedula</td>
            <td>Correo</td>
            <td>Edad</td>
            <td>Genero</td>
        </tr>

        <?php
        $sql = "SELECT * FROM encuesta";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>  
        <tr class="demasFila">
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["nombre"] ?></td>
            <td><?php echo $row["apellido"] ?></td>
            <td><?php echo $row["cedula"] ?></td>
            <td><?php echo $row["correo"] ?></td>
            <td><?php echo $row["edad"] ?></td>
            <td><?php echo $row["genero"] ?></td>
        </tr>

        <?php
        }}
        ?>
    </table>
</body>
</html>