<?php
if(isset($_POST['enviarReclamo'])){
    $motivo = $_POST['motivo'];
    $adjunto = $_POST['adjunto'];
    $texto = $_POST['texto'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $para = 'rosasfran.97@gmail.com';
    echo "<script>window.alert('Correo: ".$email." Teléfono: ".$telefono." Motivo: ".$motivo." Mensaje: ".$texto."');</script>";
    //Aca hay q enviar el mail, me dio paja configurar el php para q lo mande
}
if(isset($_POST['enviarReclamoMulta'])){
    $boleta = $_POST['boleta'];
    $medio = $_POST['medio'];
    $fecha = $_POST['fecha'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $para = 'rosasfran.97@gmail.com';
    echo "<script>window.alert('Boleta: ".$boleta." Medio: ".$medio." Fecha: ".$fecha." Email: ".$email." Telefono: ".$telefono."');</script>";
    //Aca hay q enviar el mail, me dio paja configurar el php para q lo mande
}
?>