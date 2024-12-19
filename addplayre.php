<!DOCTYPE html>
<html lang="en">
    <?php 
    include_once("conectdb.php");
    if(isset($_POST['submit'])){
     
        $numberPassing=
        $numberDribbling=
        $numberDefending=
        $numberPhysical=
        $numberRating=
        $numberPace=
        $numberShooting=





    }
    
    
    
    
    
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
<form  method="POST" class="card max-w-sm mx-auto p-2">
            <div class="mb-2">
              <label
                for="name"
                class="block mb-2 text-sm font-medium text-white"
                >Full Name</label
              >
              <input
                type="name"
                id="name"
                class="inputsText fullName bg-gray-50 border border-gray-300 outline-none text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                placeholder="Full-Name"
                required
              />
            </div>
            <div class="mb-2">
              <label
                for="photoJeuor"
                class="block mb-2 text-sm font-medium text-white dark:text-white"
                >Upload photo</label
              >
              <input
                type="text"
                id="photoJeuor"
                class="inputsLien photoInputs bg-gray-50 border border-gray-300 outline-none text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                placeholder="Entrer lien de limage"
                required
              />
            </div>
            <div class="md:flex gap-2">
              <div class="mb-2">
                <label
                  for="countries"
                  class="block mb-2 text-sm font-medium text-white dark:text-white"
                  >Position</label
                >
                <select
                  id="countries"
                  class="selectInput positionInputs bg-gray-50 border border-gray-300 text-gray text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                  <option onch value="">Choose a position</option>
                  <option value="LW">LW</option>
                  <option value="ST">ST</option>
                  <option value="RW">RW</option>
                  <option value="CM">CM</option>
                  <option value="LB">LB</option>
                  <option value="CB">CB</option>
                  <option value="RB">RB</option>
                  <option value="GK">GK</option>
                </select>
              </div>
              <div class="mb-2">
                  <label
                    for="nationality"
                    class="block mb-2 text-sm font-medium text-white dark:text-white"
                    >Nationality</label
                  >
                  <select
                    name="nationality"
                    class="bg-gray-50 border border-gray-300 text-gray text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  >
                    <option value="">select nationality</option>
                     
                  </select>
                </div>
            </div>
            <div class="mb-2">
              <label
                for="NameClub"
                class="block mb-2 text-sm font-medium text-white dark:text-white"
                >Name Club</label
              >
              <select
                
                id="NameClub"
                class="inputsText clubInputs bg-gray-50 border border-gray-300 outline-none text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
              >
              <option value="">select club</option>
              </select>
            </div>
            <div class="joueurs">
              <div class="grid grid-cols-3 gap-2">
                <div class="mb-2">
                  <label
                    for="number-rating"
                    class="block mb-2 text-sm font-medium text-white dark:text-white"
                    >Rating:</label
                  >

                  <input
                    type="number"
                    id="number-rating"
                    name="numberRating"
                    aria-describedby="helper-text-explanation"
                    class="conditionPhisiqueIunput ratingInputs bg-gray-50 border border-gray-300 text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="1-99"
                    required
                  />
                </div>

                <div class="mb-2">
                  <label
                    for="number-pace"
                    class="block labelJoueur mb-2 text-sm font-medium text-white dark:text-white"
                    >Pace:</label
                  >
                  <label
                    for="number-pace"
                    class="block goolkepr mb-2 text-sm font-medium text-white dark:text-white"
                    >Diving:</label
                  >
                  <input
                    type="number"
                    id="number-pace"
                    name="numberPace"
                    aria-describedby="helper-text-explanation"
                    class="conditionPhisiqueIunput paceInputs bg-gray-50 border border-gray-300 text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="1-99"
                    required
                  />
                </div>

                <div class="mb-2">
                  <label
                    for="number-shooting"
                    class="block labelJoueur mb-2 text-sm font-medium text-white dark:text-white"
                    >Shooting:</label
                  >
                  <label
                    for="number-shooting"
                    class="block goolkepr mb-2 text-sm font-medium text-white dark:text-white"
                    >Handling:</label
                  >
                  <input
                    type="number"
                    id="number-shooting"
                    name="numberShooting"
                    aria-describedby="helper-text-explanation"
                    class="conditionPhisiqueIunput shootingInputs bg-gray-50 border border-gray-300 text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="1-99"
                    required
                  />
                </div>
              </div>
              <div class="grid grid-cols-2 gap-2">
                <div class="mb-2">
                  <label
                    for="number-passing"
                    class="block labelJoueur mb-2 text-sm font-medium text-white dark:text-white"
                    >passing:</label
                  >
                  <label
                    for="number-passing"
                    class="block goolkepr mb-2 text-sm font-medium text-white dark:text-white"
                    >Kicking:</label
                  >
                  <input
                    type="number"
                    id="number-passing"
                    name="numberPassing"
                    aria-describedby="helper-text-explanation"
                    class="conditionPhisiqueIunput passingInputs bg-gray-50 border border-gray-300 text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="1-99"
                    required
                  />
                </div>
                <div class="mb-2">
                  <label
                    for="number-dribbling"
                    class="block labelJoueur mb-2 text-sm font-medium text-white dark:text-white"
                    >dribbling:</label
                  >
                  <label
                    for="number-dribbling"
                    class="block goolkepr mb-2 text-sm font-medium text-white dark:text-white"
                    >Reflexes:</label
                  >
                  <input
                    type="number"
                    id="number-dribbling"
                    name="numberDribbling"
                    aria-describedby="helper-text-explanation"
                    class="conditionPhisiqueIunput dribblingInputs bg-gray-50 border border-gray-300 text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="1-99"
                    required
                  />
                </div>
              </div>
              <div class="grid grid-cols-2 gap-2">
                <div class="mb-2">
                  <label
                    for="number-defending"
                    class="block labelJoueur mb-2 text-sm font-medium text-white dark:text-white"
                    >defending:</label
                  >
                  <label
                    for="number-defending"
                    class="block goolkepr mb-2 text-sm font-medium text-white dark:text-white"
                    >Speed:</label
                  >
                  <input
                    type="number"
                    id="number-defending"
                    name="numberDefending"
                    aria-describedby="helper-text-explanation"
                    class="conditionPhisiqueIunput defendingInputs bg-gray-50 border border-gray-300 text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="1-99"
                    required
                  />
                </div>
                <div class="mb-2">
                  <label
                    for="number-physical"
                    class="block labelJoueur mb-2 text-sm font-medium text-white dark:text-white"
                    >physical:</label
                  >
                  <label
                    for="number-physical"
                    class="block goolkepr mb-2 text-sm font-medium text-white dark:text-white"
                    >Positioning:</label
                  >
                  <input
                    type="number"
                    id="numberPhysical"
                    name="number-physical"
                    
                    aria-describedby="helper-text-explanation"
                    class="conditionPhisiqueIunput physicalInputs bg-gray-50 border border-gray-300 text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="1-99"
                    required
                  />
                </div>
              </div>
            </div>

            <button
              type="button"
              name="submit"
              class="sendData text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            >
              submit
            </button>
          </form>



          <script  src="./asset/js/fourmedynamique.js"></script>
</body>
</html>