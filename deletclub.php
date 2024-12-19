<?php 
     include_once("conectdb.php");
     if(isset($_GET['delateid'])){
          $id=$_GET['delateid'];
          $query=mysqli_query($conn,"delete from club where id='$id'");
          if($query){
               
               echo"<script>document.location='./club.php';</script>";
          }


        }
?>