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
   <body >
    


<div class="page">
 <?php  
 include_once("header.php")
 ?>
  <div class=" content flex justify-between w-screen ">
     
    <!-- <div class="formulair">
      <div class="cardFiltrerParent">
             <div class="retour"><img src="/asset/image/image.png" alt=""></div>
             <div class="cardFiltrer"></div>
      </div>
      <button class="addJouers">
        <img class="addJouersImag" src="/asset/image/Addjouers.webp" alt="" />
      </button>
     
    </div>  -->
    <div class="terain  ">
      <div class="terrain-de-football">
        <div class="gardien-de-but">
          <div id="gk" class="cardeJouer cardeJouerTerain" data-position="GK"></div>
        </div>
        <div class="arriere-lateral1">
          <div id="rb" class="cardeJouer cardeJouerTerain" data-position="RB"></div>
        </div>
        <div class="arriere-lateral2">
          <div id="lb" class="cardeJouer cardeJouerTerain" data-position="LB"></div>
        </div>
        <div class="stoppeur">
          <div id="cb" class="cardeJouer cardeJouerTerain" data-position="CB"></div>
        </div>
        <div class="libero">
          <div id="cb1" class="cardeJouer cardeJouerTerain" data-position="CB"></div>
        </div>
        <div class="milieu-defensif1">
          <div id="cm" class="cardeJouer cardeJouerTerain" data-position="CM"></div>
        </div>
        <div class="milieux-defensif2">
          <div id="cm1" class="cardeJouer cardeJouerTerain" data-position="CM"></div>
        </div>
        <div class="milieux-defensif3">
          <div id="cm2" class="cardeJouer cardeJouerTerain" data-position="CM"></div>
        </div>
        <div class="attaquant1">
          <div id="rw" class="cardeJouer cardeJouerTerain" data-position="RW"></div>
        </div>
        <div class="attaquant2">
          <div id="st" class="cardeJouer cardeJouerTerain" data-position="ST"></div>
        </div>
        <div class="attaquant3">
          <div id="lw" class="cardeJouer cardeJouerTerain" data-position="LW"></div>
        </div>
      </div>
    </div>
    
  </div>
  <div class="remlacement w-2/3">
    <div class="cardsJouers">
    </div>
  </div>

</div>
  
    <!-- les fill javascript -->
    <script type="module" src="/asset/js/ouverERFermeform.js"></script>
    <script type="module" src="/asset/js/validationDuForm.js"></script>
    <script type="module" src="/asset/js/displayCard.js"></script>
    <script type="module" src="/asset/js/fourmedynamique.js"></script>
    <script type="module" src="/asset/js/fitreJoueurs.js"></script>
    <script type="module" src="/asset/js/modification.js"></script>
    <script type="module" src="/asset/js/positionsDesJoueurs.js"></script>

  </body>
</html>
