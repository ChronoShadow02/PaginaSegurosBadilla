<?php 

if (isset($_POST['EnviarInformacion'])) {
    $Email = $_POST['Email'];
    //Se hace un contador de errores para que cuando no haya ninguno de ellos, se pueda enviar la infomacion al correo
    $Errores = 0;
    try {
        //Se quitan espacios del campo de texto con el email
        $Email = trim($Email);
        $Email =  stripslashes($Email);
        $Email = htmlspecialchars($Email);
        $expresionRegular = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
        ///Valida que el campo de email no se encuentre vacío
        if (empty($Email)) {
            echo "<p class='error'>* Introduce una dirección de correo válida<p/>";
            $Errores += 1;
            ///valida si el correo ingresado no es valido, haciendo uso de expresiones regulares
        } elseif (!preg_match($expresionRegular, $Email)) {
            echo "<p class='error'>* Introduce una dirección de correo válida<p/>";
            $Errores += 1;
        }
    } catch (Exception $e) {
        $e->getMessage();
    }
}
?>
