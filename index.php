

<?php require('includes/header.php'); 



$sql = "SELECT * FROM farmacia";

$query = $db->prepare($sql);
$query->execute();
$data = $query->fetchAll(PDO::FETCH_OBJ);


?>



<section id="datos">
    <div class="container datos">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Latitud</th>
                    <th scope="col">Longitud</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $d) : ?>
                    <tr>
                        <th scope="row"><?php echo $d->id; ?></th>
                        <td>
                            <?php echo $d->nombre; ?>
                        </td>
                        <td>
                            <?php echo $d->direccion; ?>
                        </td>
                        <td>
                            <?php echo $d->latitud; ?>
                        </td>
                        <td>
                            <?php echo $d->longitud;?>
                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo $d->id; ?>" class="btn btn-danger">Eliminar</a>
                            <a href="edit-pharmacy.php?id=<?php echo $d->id?>&nombre=<?php echo $d->nombre ?>&direccion=<?php echo $d->direccion ?>&latitud=<?php echo $d->latitud;?>&longitud=<?php echo $d->longitud;?>" class="btn btn-primary">Editar</a>
                            <a href="see-distance.php?nombre=<?php echo $d->nombre?>&latitud=<?php echo $d->latitud ?>&longitud=<?php echo $d->longitud; ?>" class="btn btn-success">Ver Distancia</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>




</section>


<?php require('includes/footer.php') ?>

</body>

</html>