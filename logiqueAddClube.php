<?php  

 include_once("conectdb.php");


    
 if(isset($_POST['submit'])){
  $name=$_POST['inputname'];
  $logo=$_POST['inputphoto'];
  $city=$_POST['inputcity'];
  $country=$_POST['inputcountry'];
  $query="insert into club (name,logo,city,country) values('$name','$logo','$city','$country')";
  $run= mysqli_query($conn,$query);
  if(isset( $run)){
    header("location: ./club.php");
    exit;
}
   
}
// if(isset($_POST['update'])){
//   $id=$_GET['updateid'];
//   $name=$_POST['inputname'];
//   $logo=$_POST['inputphoto'];
//   $city=$_POST['inputcity'];
//   $country=$_POST['inputcountry'];
//   $test=" update club
//             set name='$name',logo='$logo',city='$city',country='$country'
//             where id='$id'";
//   $run= mysqli_query($conn,$test);
   
// }


//  $query="select * from club";
//  $result=mysqli_query($conn,$query);
 




 ?>