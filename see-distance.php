<?php require_once('includes/header.php');

$id=$_SESSION['id'];
$point1_lat=$_SESSION['latitud'];
$point1_long=$_SESSION['longitud'];
$point2_lat=$_GET['latitud'];
$point2_long=$_GET['longitud'];
$nombre=$_GET['nombre'];



function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit = 'km', $decimals = 2) {
	// Cálculo de la distancia en grados
	$degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));

	// Conversión de la distancia en grados a la unidad escogida (kilómetros, millas o millas naúticas)
	switch($unit) {
		case 'km':
			$distance = $degrees * 111.13384; // 1 grado = 111.13384 km, basándose en el diametro promedio de la Tierra (12.735 km)
			break;
		case 'mi':
			$distance = $degrees * 69.05482; // 1 grado = 69.05482 millas, basándose en el diametro promedio de la Tierra (7.913,1 millas)
			break;
		case 'nmi':
			$distance =  $degrees * 59.97662; // 1 grado = 59.97662 millas naúticas, basándose en el diametro promedio de la Tierra (6,876.3 millas naúticas)
	}
	return round($distance, $decimals);
}




?>
<html>
<section id="datos">
    <div class="container datos">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Latitud</th>
                    <th scope="col">Longitud</th>
                    <th scope="col">distancia desde tu punto</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <th scope="row"></th>
                        <td>
                           <?php echo $nombre ?>
                        </td>
                        <td>
                        <?php echo $point2_lat ?>
                        </td>
                        <td>
                          <?php echo $point2_long?>  
                        </td>
                        <td>
                 
                        <?php echo distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit = 'km', $decimals = 2)." KM"; ?>
                        </td>
                    </tr>

                <?php  ?>
            </tbody>
        </table>
    </div>




</section>


<?php require('includes/footer.php') ?>

</body>

</html>