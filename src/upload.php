<?php

if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileEXT = explode('.', $fileName);
    $fileActualEXT = strtolower(end($fileEXT));

    $allowed = array('xlsx', 'odf');

    if(in_array($fileActualEXT, $allowed)){
        if($fileError === 0){
            $fileNameNew = uniqid('', true).".".$fileActualEXT;
            $fileDestination = 'excelFiles/'.$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            header("Location:/autobonplan/pages/accueil.php");
        }else{
            echo 'erreur lors de l\importation';
        }
    }else{
        echo 'Vous ne pouvez pas importer des fichiers de ce type';
    }

}

?>