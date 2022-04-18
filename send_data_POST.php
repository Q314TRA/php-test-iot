<?php
    $conexion = mysqli_connect("localhost", "iot", "iot", "db_invernadero");
    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }
    $captura = $_POST['captura'];
    $estacion = $_POST['estacion'];
    $variable = $_POST['variable'];
    $valor = $_POST['valor'];
    $control = $_POST['control'];
    $sql = "INSERT INTO datos (captura, estacion, variable, valor, control) VALUES ('$captura', '$estacion', '$variable', '$valor', '$control')";
    if (mysqli_query($conexion, $sql)) {
        echo $sql;
        echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);
    echo "   okk"
?>