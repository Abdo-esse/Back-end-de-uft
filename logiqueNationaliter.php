<?php  
 
 
 include_once("conectdb.php");
 $ret='abdo';

 if(isset($_POST['submit'])){
    $name=$_POST['inputname'];
    $flage=$_POST['inputphoto'];
    
    
    $query="insert into Nationality (name,flage) values('$name','$flage')";
    $run= mysqli_query($conn,$query);
    if(isset( $run)){
        header("location: ./Nationality.php");
        exit;
    }
     
  } 
 
 ?>