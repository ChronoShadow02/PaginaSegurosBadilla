<?php if (isset($_POST['EnviarInformacion'])) {
    $Telefono = $_POST['Telefono'];
    $Telefono = trim($Telefono);
    $Telefono =  stripslashes($Telefono);
    $Telefono = htmlspecialchars($Telefono);
    //Se hace un contador de errores para que cuando no haya ninguno de ellos, se pueda enviar la infomacion al correo
    $Errores = 0;
    try {
        //valida si el numero telefonico esta vacío
        if (empty($Telefono)) {
            echo "<p class='error'>*El campo de número telefónico esta vacío <p/>";
            $Errores += 1;
        }
    } catch (Exception $e) {
        $e->getMessage();
    }
}
?>
