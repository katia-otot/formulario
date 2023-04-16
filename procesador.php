<?php
if (isset($_POST["nombre"], $_POST["apellido"], $_POST["edad"], $_POST['intereses'], $_POST["pais"], $_POST["genero"], $_POST['intereses'])) {
    if(empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["edad"]) || empty($_POST["pais"]) || empty($_POST["genero"]) || empty($_POST["intereses"])){
        echo "<p>Todos los campos son obligatorios.</p>";
    } else {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $pais = $_POST["pais"];
        $genero = $_POST["genero"];
        $intereses = $_POST['intereses'];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellido: $apellido</p>";
        echo "<p>Edad: $edad</p>";
        echo "<p>Pais: $pais </p>";
        echo "<p>Genero: $genero </p>";

        $num_intereses = count($intereses);
        if($num_intereses == 1) {
            echo "El interés seleccionado es: " . $intereses[0];
        } else {
            echo "Los intereses seleccionados son: " . implode(", ", $intereses);
        }
    }
}

