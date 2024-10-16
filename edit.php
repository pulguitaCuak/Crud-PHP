<?php
include("db.php");
if(isset($_GET["id"])){
 $id = $_GET["id"];
 $query = "SELECT * FROM boletines WHERE id = $id";
 $resultado = mysqli_query($conn, $query);  
if(mysqli_num_rows($resultado) == 1){
   $row=mysqli_fetch_array($resultado);
   $alumno = $row['alumno'];
   $usuario = $row['usuario'];
   $materias = $row['materias'];
   $notas = $row['notas'];

}
if(isset($_POST['guardar'])){
    $id = $_GET['id'];
    $alumno = $_POST['alumno'];
    $usuario = $_POST['usuario'];
    $materias = $_POST['materias'];
    $notas = $_POST['notas'];
    echo $alumno;
    $query = "UPDATE boletines SET alumno = '$alumno', usuario ='$usuario', materias = '$materias', notas = '$notas' WHERE id = $id";
    $resultado = mysqli_query($conn, $query);
    header("location:index.php");
}
 }

?>

<?php
include("includes/header.php");
?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto" >
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id'] ?>" method="POST">
                    <div class="form-group">
                        <input type="text " name="alumno" value="<?php echo $alumno; ?>" class="form-control" placeholder="Nombre">
                        <input type="text " name="usuario" value="<?php echo $usuario; ?>" class="form-control" placeholder="Usuario">
                        <input type="text " name="materias" value="<?php echo $materias; ?>" class="form-control" placeholder="Materias">
                        <input type="text " name="notas" value="<?php echo $notas; ?>" class="form-control" placeholder="Notas">
                        <input type="submit" class="btn btn-success btn-block" name="guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
?>