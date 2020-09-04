<?php 

if (isset($_POST['EnviarInformacion'])) {
    $NombreCompleto = $_POST['NombreYApellido'];
    //Se hace un contador de errores para que cuando no haya ninguno de ellos, se pueda enviar la infomacion al correo
    $Errores = 0;
    try {
        if (empty($NombreCompleto)) {
            echo "<p class='error'>* Verifica tu nombre y apellido<p/>";
            $NombreCompleto = trim($NombreCompleto);
            $NombreCompleto =  stripslashes($NombreCompleto);
            $NombreCompleto = htmlspecialchars($NombreCompleto);
            $Errores += 1;
        } elseif (strlen($NombreCompleto) > 30) {
            echo "<p class='error'>* El nombre completo no puede exceder mas de 30 caracteres<p/>";
            $Errores += 1;
        } elseif (!preg_match("/^[a-zA-Z ]*$/", $NombreCompleto)) {
            echo "<p class='error'>* El campo de nombre y apellido solo admite letras y espacios<p/>";
            $Errores += 1;
        }
    } catch (Exception $e) {
        $e->getMessage();
    }
}
