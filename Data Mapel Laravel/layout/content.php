<?php 

if(isset($_GET['page'])){
    $page = $_GET['page'];

    switch($page){
        case 'home':
            include ('dashboard/index-dashboard.php');
        break;

        case 'siswa':
            include ("siswa/index-siswa.php");
        break;
        
        case 'form-siswa':
            include ('siswa/form-siswa.php');
        break;
        
        case 'guru':
            include ('guru/index-guru.php');
        break;
        
        case 'form-guru':
            include ('guru/form-guru.php');
        break;
    }
}

?>