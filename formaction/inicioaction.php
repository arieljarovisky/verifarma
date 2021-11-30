
<?php
session_start();


require_once('../conexiondb.php');
if (!empty($_POST['name'] && $_POST['pass'])) {



    $sql = "SELECT * FROM usuario WHERE nombre = '" . $_POST['name'] . "' and pass = '" . $_POST['pass'] . "' ";

    $query = $db->prepare($sql);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_OBJ);



    if (is_object($usuario)) {
        $_SESSION['auth'] = true;
        $_SESSION['id'] = $usuario->idUsuario;
        $_SESSION['latitud']=$_POST['latitud'];
        $_SESSION['longitud']=$_POST['longitud'];
        echo "Logeado con éxito<br>";
        echo $usuario->nombre;
        header('location:../index.php');
    } else {
        echo '<script>alert("Usuario o contraseña incorrectos")
        window.location="../iniciosesion.php";
        
        </script>';

        
    }
} else {
    echo '<script>alert("Ingrese usuario y contraseña")
    window.location="../iniciosesion.php";
    
    </script>';
}
 
