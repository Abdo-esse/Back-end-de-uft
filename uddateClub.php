<!DOCTYPE html>
<html lang="en">




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
 <h1 class=" text-white text-center text-xl ">Ajoute Club</h1>
<form  action="./club.php" method="POST" class="card max-w-sm mx-auto p-2">
            <div class="mb-2">
              <label
                for="name"
                class="block mb-2 text-sm font-medium text-white"
                >Name</label
              >
              <input
                type="name"
                id="name"
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
                class=" bg-gray-50 border border-gray-300 outline-none text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                placeholder="Entrer country du club"
                required
                name="inputcountry"
              />
            </div>
            
                 <button
              type="submit"
              class=" text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
              name="submit"
            >
              submit
            </button>
            
          </form>
    </body>
</html>