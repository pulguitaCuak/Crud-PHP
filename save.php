<?php
include("db.php");
if(isset($_POST["guardar"]))
{
    $query="INSERT INTO boletines (alumno, materias, notas, usuario) VALUES ('$_POST[alumno]','$_POST[informes]','Prueba','Prueba')";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Materia guardada';
    header('Location: index.php');
}
?>