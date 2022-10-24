<?php 
                $myemail = 'reservas@alexis-evt.tur.ar';
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $dni = $_POST['dni'];
                $nacion = $_POST['nacionality'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];

                $to = $myemail;
                $email_subject = "Nuevo mensaje: $subject";
                $email_body = "Haz recibido una nueva reserva. \n Nombre: $name \n Apellido: $surname 
                \n Dni: $dni \n Nacionalidad: $nacion \n Numero de telefono: $phone \n Email: $email";
                $headers = "From: $email";

                mail($to, $email_subject, $email_body, $headers);
                echo "El mensaje se ha enviado correctamente";
?>