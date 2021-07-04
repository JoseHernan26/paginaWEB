<?php
if(isset($_POST['enviarReclamo'])){
    $motivo = $_POST['motivo'];
    $adjunto = $_POST['adjunto'];
    $texto = $_POST['texto'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $para = 'rosasfran.97@gmail.com';
    //echo "<script>window.alert('Correo: ".$email." Teléfono: ".$telefono." Motivo: ".$motivo." Mensaje: ".$texto."');</script>";
    $contenido= "Correo: ".$email." Teléfono: ".$telefono." Motivo: ".$motivo." Mensaje: ".$texto;
    mail($para,"RECLAMO",$contenido);
    echo "<script>window.alert('Se envio su reclamo correctamente! Pronto nos contactaremos con usted');</script>";
}
if(isset($_POST['enviarReclamoMulta'])){
    $boleta = $_POST['boleta'];
    $medio = $_POST['medio'];
    $fecha = $_POST['fecha'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $para = 'rosasfran.97@gmail.com';
    //echo "<script>window.alert('Boleta: ".$boleta." Medio: ".$medio." Fecha: ".$fecha." Email: ".$email." Telefono: ".$telefono."');</script>";
    $contenido= "Boleta: ".$boleta." Medio: ".$medio." Fecha: ".$fecha." Email: ".$email." Telefono: ".$telefono;
    mail($para,"RECLAMO",$contenido);
    echo "<script>window.alert('Se envio su reclamo correctamente! Pronto nos contactaremos con usted');</script>";
}
?>