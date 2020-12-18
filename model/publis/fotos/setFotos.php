<?php
    include('../../db.php');
    session_start();
    $idUsu = $_SESSION['usrId'];
    $dir_subida = "../../../img/$idUsu/cache/";
    mkdir($dir_subida, 0777, true);
    $nomArchivo = basename($_FILES['fotos']['name']);
    $fichero_subido = $dir_subida . $nomArchivo;
    echo '<pre>';
    if (move_uploaded_file($_FILES['fotos']['tmp_name'], $fichero_subido)) {
        echo "El fichero es válido y se subió con éxito.\n";
    } else {
        echo "¡Posible ataque de subida de ficheros!\n";
    }
    echo 'Más información de depuración:';
    print_r($_FILES);
    print "</pre>";
?>