<?php
if (isset($_GET['x'])){
switch($_GET['x']){
    case'keluar':
        include("keluar.php");
        break;
        case'admin':
            include("admin.php");
            break;

}
 } else {
    echo"<h3>halam dalam proses pembangunan!</h3>";
} 
