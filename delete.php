<?php
include("db.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM boletines WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }
    $_SESSION['message'] = 'Materia eliminada';
    header('Location: index.php');
}?>