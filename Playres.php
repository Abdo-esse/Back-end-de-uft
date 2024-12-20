<!DOCTYPE html>
<html lang="en">
  <?php
        include_once("conectdb.php");
        $sql="select players.name ,players.photo,players.position,players.status,players.rating,Nationality.flage,club.logo 
 from players
 inner join Nationality on Nationality.id=players.id_nationality
 inner join club on club.id=players.id_club
 where date_delat is  null ;";
 $resulta=mysqli_query($conn,$sql);
  
  
  
  ?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
<div class="page">
<?php  
 include_once("./header.php");
 include_once("conectdb.php")
 ?>
 <div class="content">


<div class="relative overflow-x-auto p-2 shadow-md sm:rounded-lg">
  <div class="flex bg-white justify-between p-2 gap-1">
    <div class="flex items-center justify-between flex-column p-2 flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
        
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
            
        </div>
    </div>
    <div class="button-add-club p-2" >
      <button class="bg-blue-500  hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" >
        <a href="addplayre.php"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
</svg>
</a>
</button>
    </div>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    photo
                </th>
                <th scope="col" class="px-6 py-3">
                position
                </th>
                <th scope="col" class="px-6 py-3">
                status
                </th>
                <th scope="col" class="px-6 py-3">
                rating
                </th>
                <th scope="col" class="px-6 py-3">
                   Flag
                </th>
                <th scope="col" class="px-6 py-3">
                club
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
                        while($row=mysqli_fetch_assoc($resulta)){

                         ?>
             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td class="px-6 py-4">
            <?php   echo $row['name'] ?>
                </td>
                <td class="px-6 py-4">
            <img class="w-10 h-10 rounded-full" src="  <?php echo $row['photo'] ?>" alt="Jese image">
                </td>
            <td class="px-6 py-4">
            <?php   echo $row['position'] ?>
                </td>
            <td class="px-6 py-4">
            <?php   echo $row['status'] ?>
                </td>
            <td class="px-6 py-4">
            <?php   echo $row['rating'] ?>
                </td>
            <td class="px-6 py-4">
            <img class="w-10 h-10 rounded-full" src="  <?php   echo $row['flage'] ?>" alt="Jese image">
                </td>
            <td class="px-6 py-4">
            <img class="w-10 h-10 rounded-full" src=" <?php   echo $row['logo'] ?> " alt="Jese image">
                </td>
                
               
                <td class="px-6 py-4 flex gap-x-0.5">
                    <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
</svg>
 
                  </a>
                    <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 9-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
</svg>

                  </a>
                </td>
                
              
            </tr>
            <?php
                        }
            ?>
          
        </tbody>
    </table>
</div>


</div>
</body>
</html>