<?php require('includes/header.php');


$id = $_GET['id'];
$nombre=$_GET['nombre'];
$direccion=$_GET['direccion'];
$latitud=$_GET['latitud'];
$longitud=$_GET['longitud'];

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $latitud = $_POST['latitud'];
    $longitud = $_POST['longitud'];

    $farmacianueva = "UPDATE `farmacia` SET  `nombre` = '$nombre', `direccion` = '$direccion', `latitud` = '$latitud', `longitud` = '$longitud' WHERE `farmacia`.`id` = $id;";
    
    $query2 = $db->prepare($farmacianueva);
    $query2->execute();
    $data2 = $query2->fetchAll(PDO::FETCH_OBJ);
    header('location:../../verifarma/index.php');
} else {
    echo "";
}




?>


<html>

<section>
<div class="titulo">
            <h1>Editar Farmacia <?php echo $id ?></h1>
        </div>
    <div class="container formulario">

        
        <form class="row g-3 " method="POST">
            
            <div class="col-md-6">
                <label  class="form-label">Nombre de la farmacia</label>
                <input type="text" name="nombre" value="<?php echo $nombre ?>" class="form-control" id="validationCustom01" required>
            </div>

            <div class="col-md-6">
                <label  class="form-label">Direccion</label>
                <div class="input-group has-validation">

                    <input type="text" name="direccion" value="<?php echo $direccion ?>" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>

                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Latitud</label>
                <input type="text" name="latitud" value="<?php echo $latitud ?>" class="form-control" id="validationCustom03" required>

            </div>

            <div class="col-md-6">
                <label class="form-label">Longitud</label>
                <input type="text" value="<?php echo $longitud ?>" name="longitud" class="form-control" id="validationCustom05" required>

            </div>

            <div class="col-12">
                <input type="submit" value="enviar" name="submit">
            </div>
        </form>
    </div>
</section>

<?php require('includes/footer.php') ?>

</html>