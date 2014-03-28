<div class="container">        
    <div class="col_1_3">
        <div class="features">
            <div class="title clearfix">
                <img src="images/code-icon.png" alt="" class="alignleft" />
                <h3>Contacto</h3>
            </div>
            
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") { // estamos recibiendo datos por POST // Aqui dentro validaremos todo y grabaremos en la base de datos.
                // Primero depuramos los campos, luego los validaremos.
                // Enviamos el correo.
                enviar_correo($_POST['nombre'], ADMINMAIL, $_POST['asunto'], $_POST['email'] . ' --- ' . $_POST['mensaje']);

                // Mostramos mensaje
                echo "Hemos recibido correctamente su solicitud de registro en nuestra web.<br/><br/>Por favor compruebe su buzón de correo y realice la validación del mismo a través<br/> del enlace que le hemos enviado.<br/><br/>Muchas gracias.";
            }
            else {
                ?>

                <div id="">
                    <fieldset class="contactar">
                        <legend>Formulario de contacto</legend>
                        <form class="formulario" action="" method="post" autocomplete="off">
                            <h2>Nombre:</h2>
                            <input name="nombre" type="text" />
                            <h2> Asunto:</h2>
                            <input name="asunto" type="text" />
                            <h2>Email:</h2>
                            <input name="email" type="text" />
                            <h2> Mensaje:</h2>
                            <textarea name="mensaje" rows="6" cols="50"></textarea>
                            <br/>
                            <input type="reset" class="controles" value="Reset" />
                            <input type="submit" class="controles" value="Send"/>
                        </form>
                    </fieldset>
                </div>


    <?php
}
?>










        </div>
    </div>
</div>