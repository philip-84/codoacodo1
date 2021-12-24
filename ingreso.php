<?php 
    if(isset($_POST)){
    
    //obtiene los valores enviados desde login.html
    echo "<br>";
    
    echo "<h1>Ingreso al sistema</h1>";
    
    $temp = $_POST['nombre'];
    echo 'Nombre: '.$temp.'<br>';

    $temp = $_POST['apellido'];
    echo 'Apellido: '.$temp.'<br>';

    $temp = $_POST['edad'];
    echo 'Edad: '.$temp.'<br>';

    $temp = $_POST['hobbie'];
    echo 'Hobbie: '.$temp.'<br>';

    $temp = $_POST['editor'];
    echo 'Editor: '.$temp.'<br>';

    $temp = $_POST['sistema'];
    echo 'Sistema: '.$temp.'<br>';
    }

?>
