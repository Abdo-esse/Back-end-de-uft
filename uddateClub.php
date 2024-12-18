<!DOCTYPE html>
<html lang="en">


<?php
      include_once("conectdb.php");
     if(isset($_POST['update'])){
        $id=$_GET['updateid'];
        $name=$_POST['inputname'];
        $logo=$_POST['inputphoto'];
        $city=$_POST['inputcity'];
        $country=$_POST['inputcountry'];
        $test=" update club
                  set name='$name',logo='$logo',city='$city',country='$country'
                  where id='$id'";
        $run= mysqli_query($conn,$test);
        if(isset( $run)){
          header("location: ./club.php");
          exit;
      }
         
      }


?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>update club</title>
    <link rel="stylesheet" href="./asset/style/style.css" />
    <!-- tailwind -->
    <!-- carousel -->
    <link
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              clifford: "#da373d",
            },
          },
        },
      };
    </script>
    <style type="text/tailwindcss"> 
      @layer utilities {
        .content-auto {
          content-visibility: auto;
        }
      }
    </style>
  </head>
<body>
 <h1 class=" text-white text-center text-xl ">update Club</h1>
<form   method="POST" class="card max-w-sm mx-auto p-2">
    <?php 
          include_once("conectdb.php");
          $id=$_GET['updateid'];
          $qurey=mysqli_query($conn,"select * from club where id='$id'");
           while($row=mysqli_fetch_array($qurey)){
            
            ?>
            <div class="mb-2">
              <label
                for="name"
                class="block mb-2 text-sm font-medium text-white"
                >Name</label
              >
              <input
                type="name"
                id="name"
                value=" <?php echo $row['name']  ?>"
                class=" bg-gray-50 border border-gray-300 outline-none text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                placeholder="Full-Name"
                required
                name="inputname"
              />
            </div>
            <div class="mb-2">
              <label
                for="photoJeuor"
                class="block mb-2 text-sm font-medium text-white dark:text-white"
                >Upload logo
                </label>
              <input
                type="text"
                id="photoJeuor"
                value="<?php echo $row ['logo']?>"
                class=" bg-gray-50 border border-gray-300 outline-none text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                placeholder="Entrer lien de limage"
                required
                name="inputphoto"
              />
            </div>
            
            <div class="mb-2">
            <label
                for="photoFlag"
                class="block mb-2 text-sm font-medium text-white dark:text-white"
                >city</label
              >
              <input
                type="name"
                id="photoFlag"
                value="<?php echo $row ['city']?>"
                class=" bg-gray-50 border border-gray-300 outline-none text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                placeholder="Entrer city du club"
                required
                name="inputcity"
              />
            </div>
            <div class="mb-2">
              <label
                for="NameClub"
                class="block mb-2 text-sm font-medium text-white dark:text-white"
                >country</label
              >
              <input
                type="name"
                id="NameClub"
                value="<?php echo $row ['country']?>"
                class=" bg-gray-50 border border-gray-300 outline-none text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                placeholder="Entrer country du club"
                required
                name="inputcountry"
              />
            </div>

            <?php }
                ?>
            
                 <button
              type="submit"
              class=" text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
              name="update"
            >
             update
            </button>
            
          </form>
    </body>
</html>