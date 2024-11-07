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
  echo "Connected successfully";

  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $cedula = $_POST["cedula"];
  $correo = $_POST["correo"];
  $edad = $_POST["edad"];
  $genero = $_POST["genero"];
  

  $sql = "INSERT INTO encuesta (nombre, apellido, cedula, correo, edad, genero)
    VALUES ('$nombre', '$apellido', '$cedula' , ' $correo', '$edad', '$genero')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
$conn->close();
?>