<!DOCTYPE html>
<html lang="en">
    <?php 
    include_once("conectdb.php");

    $sqlNatinalite="select * from Nationality";
    $resultNatinalite=mysqli_query($conn,$sqlNatinalite);

    $sqlClub="select * from club";
    $resultClub=mysqli_query($conn,$sqlClub);

    if(isset($_POST['submit'])){

        $numberPassing=$_POST['numberPassing'];
        $numberDribbling=$_POST['numberDribbling'];
        $numberDefending=$_POST['numberDefending'];
        $numberPhysical=$_POST['numberPhysical'];
        $numberRating=$_POST['numberRating'];
        $numberPace=$_POST['numberPace'];
        $numberShooting=$_POST['numberShooting'];
        $name=$_POST['name'];
        $photoJeuor=$_POST['photoJeuor'];
        $countries=$_POST['nationality'];
        $position=$_POST['position'];
        $nameClub=$_POST['nameClub'];
        $statue=$_POST['statue'];
       
      $sql="insert into  players (name,photo,position,status,rating,id_club,id_nationality) values(' $name','$photoJeuor','$position','$statue','$numberRating','$nameClub', '$countries' )";
      $run= mysqli_query($conn,$sql);
      $id_payre=mysqli_insert_id($conn);
      // Print auto-generated id
// echo "New record has id: " .$id_payre ;
       if($position==="GK"){
        $sqlgk="insert into golkeeperPlayer (id_player,diving,handling,kicking,reflexes,speed,physical) values('$id_payre','$numberPace','$numberShooting','$numberPassing','$numberDribbling','$numberDefending','$numberPhysical') ";
        $run= mysqli_query($conn,$sqlgk);
        if(isset( $run)){
          header("location: ./Playres.php");
          exit;
      }
       }else{
        $sql="insert into footballplayer (id_player,pace,shooting,passing,dribbling,defending,physical) values('$id_payre','$numberPace','$numberShooting','$numberPassing','$numberDribbling','$numberDefending','$numberPhysical') ";
        $run= mysqli_query($conn,$sql);
        if(isset( $run)){
          header("location: ./Playres.php");
          exit;
      }
       }



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
                name="name"
                class="inputsText fullName bg-gray-50 border border-gray-300 outline-none text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                placeholder="Full-Name"
                
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
                name="photoJeuor"
                class="inputsLien photoInputs bg-gray-50 border border-gray-300 outline-none text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                placeholder="Entrer lien de limage"
                
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
                  name="position"
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
                    >statue</label
                  >
                  <select
                    name="statue"
                    class="bg-gray-50 border border-gray-300 text-gray text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  >
                  <option value="">select statue</option>
                  <option value="principale">principale</option>
                  <option value="reserv">reserv</option>
                  

                  
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
                  

                  <?php while($row=mysqli_fetch_assoc($resultNatinalite)){?>
                    <option value=" <?php   echo $row['id'] ?>"> <?php   echo $row['name'] ?></option>
                    <?php } ?>
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
                name="nameClub"
                class="inputsText clubInputs bg-gray-50 border border-gray-300 outline-none text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
              >
              <option value="">select club</option>
              <?php while($row=mysqli_fetch_assoc($resultClub)){?>
                    <option value=" <?php   echo $row['id'] ?>"> <?php   echo $row['name'] ?></option>
                    <?php } ?>

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
                    name="numberPhysical"
                    
                    aria-describedby="helper-text-explanation"
                    class="conditionPhisiqueIunput physicalInputs bg-gray-50 border border-gray-300 text-gray text-sm rounded-lg focus:ring-0 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="1-99"
                   
                  />
                </div>
              </div>
            </div>

            <button
              type="submit"
              name="submit"
              class="sendData text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
            >
              submit
            </button>
          </form>



          <script  src="./asset/js/fourmedynamique.js"></script>
</body>
</html>