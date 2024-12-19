<?php
   
    include_once("conectdb.php");
    if(isset($_GET['idadlet'])){
         $id=$_GET['idadlet'];
         
         $query=mysqli_query($conn,"delete from Nationality where id='$id'");
         if($query){
              
            header("location: ./Nationality.php");
            exit;
         }


       }

?>