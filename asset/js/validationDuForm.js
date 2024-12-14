//import
import{fermeForme}from "./ouverERFermeform.js"
import{ displayCard,reserve} from "./displayCard.js" 

// les variables
// les input du condition phisiquale

let conditionPhisiqueIunput = document.querySelectorAll( ".conditionPhisiqueIunput");

//les inpits du text

let inputsText = document.querySelectorAll(".inputsText");

//Button de send data
const sendDataBtn = document.querySelector(".sendData");

//les inputse d'image
let inputsLien = document.querySelectorAll(".inputsLien");

// select
let selectInput=document.querySelector('.selectInput')


// l'inpet de fullNam
let fullNameInputs =document.querySelector('.fullName')



// l'inpet de photo
let photoInputs =document.querySelector('.photoInputs')

// l'inpet de  position
let  positionInputs =document.querySelector('.positionInputs')

// l'inpet de flag
let flagInputs =document.querySelector('.flagInputs')

// l'inpet de club
let clubInputs =document.querySelector('.clubInputs')



// l'inpet de logo
let logoInputs =document.querySelector('.logoInputs')

// l'inpet de rating
let  ratingInputs =document.querySelector('.ratingInputs')

// l'inpet de pace
let paceInputs =document.querySelector('.paceInputs')

// l'inpet de shooting
let shootingInputs =document.querySelector('.shootingInputs')
// l'inpet de passing
let passingInputs =document.querySelector('.passingInputs')

// l'inpet de dribbling
let dribblingInputs =document.querySelector('.dribblingInputs')

// l'inpet de defending
let defendingInputs =document.querySelector('.defendingInputs')

// l'inpet de physical
let physicalInputs =document.querySelector('.physicalInputs')
 

//data
let data=[]



// fullNam
let fullName,photo,position,flag,club,logo,rating,pace,shooting,passing,dribbling,defending,physical;

  //la formul de regix de valides un text
  const regex = /^[a-zA-ZÀ-ÿ\s'-]+$/;


  //la formul de regix de valides un text
 const regexImage = /^(https?:\/\/.*\.(?:png|jpg|jpeg|gif|webp|bmp|svg))$/i

//les fonction

// les fonction de validation des inputs
 //validation condition Phisique
 function validationconditionPhisique() {
    for (let i = 0; i < conditionPhisiqueIunput.length; i++) {
      
      if (conditionPhisiqueIunput[i].value > 10 &&conditionPhisiqueIunput[i].value < 100) {
        conditionPhisiqueIunput[i].style.border = "2.5px solid green";
        rating=conditionPhisiqueIunput[0].value
                  pace=conditionPhisiqueIunput[1].value
                  shooting=conditionPhisiqueIunput[2].value
                  passing=conditionPhisiqueIunput[3].value
                  dribbling=conditionPhisiqueIunput[4].value
                  defending=conditionPhisiqueIunput[5].value
                  physical=conditionPhisiqueIunput[6].value
        
      } else {
        conditionPhisiqueIunput[i].style.border = "2.5px solid red";
        

      }
    }
  }

//valides des inputs text
function validationText() {
    for (let i = 0; i < inputsText.length; i++) {
      if (regex.test(inputsText[i].value)) {
        inputsText[i].style.border = "2.5px solid green";
        fullName=inputsText[0].value
                club=inputsText[1].value
        
        
      } 
      else {
        inputsText[i].style.border = "2.5px solid red";
      }
    }
  }
// valodation de select
  function select() {
    if (selectInput.value=="") {
        selectInput.style.border = "2.5px solid red";
    }else{
        selectInput.style.border ="none"
        position=selectInput.value
    }
  }

  //validation des inputs image
function validationImage() {

  
    for (let i = 0; i < inputsLien.length; i++) {
      if (regexImage.test(inputsLien[i].value)) {
        inputsLien[i].style.border = "2.5px solid green";
        photo=inputsLien[0].value
        flag=inputsLien[1].value
        logo=inputsLien[2].value
      } else {
        inputsLien[i].style.border = "2.5px solid red";
      }
    }
  }
  


function enregitrerData() {
  
 if (regex.test(fullNameInputs.value)&& regex.test(clubInputs.value) && regexImage.test( photoInputs.value)&& regexImage.test( flagInputs.value)&&regexImage.test(logoInputs.value)&&selectInput.value!==""&&(paceInputs.value > 0 &&paceInputs.value < 100)&&(ratingInputs.value > 0 &&ratingInputs.value < 100)&&(shootingInputs.value > 0 &&shootingInputs.value < 100)&&(passingInputs.value > 0 &&passingInputs.value < 100)&&(dribblingInputs.value > 0 &&dribblingInputs.value < 100)&&(physicalInputs.value > 0 &&physicalInputs.value < 100)&&(defendingInputs.value > 0 &&defendingInputs.value < 100)) {
    // console.log(fullName,photo,position,flag,club,logo,rating,pace,shooting,passing,dribbling,defending,physical);
   
   ajouteCard()
    console.log(data);
    
    displayCard(reserve,data)

    localStorageData()
   
    fermeForme()
   }
  }
// fonction da l'ajoute
function ajouteCard() {
  let donneesJoueur={
    id:"id" + Math.random().toString(16).slice(2),
    fullName:fullName,
    photo:photo,
    position:position, 
    flag:flag,
    club:club,
    logo:logo,
    rating:rating,
    pace:pace,
    shooting:shooting,
    passing:passing,
    dribbling:dribbling,
    defending:defending,
    physical:physical
   }
   
    
    data.push(donneesJoueur)
  
}

  //local storage
  function localStorageData() {
    localStorage.setItem("data", JSON.stringify(data));
}

// initialisation des données locales
function initData() {
  const storedData = localStorage.getItem("data");
  if (storedData) {
      data = JSON.parse(storedData);
      displayCard(reserve,data);
      
  }
}
// l'appel des fonctions

//validation
//validation de nombre
for (let i = 0; i < conditionPhisiqueIunput.length; i++) {
  conditionPhisiqueIunput[i].addEventListener(
    "input",
    validationconditionPhisique
  );
}
//validation de text
for (let i = 0; i < inputsText.length; i++) {
  inputsText[i].addEventListener("input", validationText);
}
//validation de lien
for (let i = 0; i < inputsLien.length; i++) {
  inputsLien[i].addEventListener("input", validationImage);
}
//validation select
selectInput.addEventListener('change',select)

// la fonction de enregitrer data
sendDataBtn.addEventListener("click",enregitrerData);

// Fonction exécutée au chargement de la page
document.addEventListener("DOMContentLoaded", () => {
  initData(); 
 
});


// importe

export{conditionPhisiqueIunput,inputsText,inputsLien, selectInput,data,enregitrerData,sendDataBtn,localStorageData,
photoInputs,flagInputs,clubInputs,logoInputs,ratingInputs,paceInputs,shootingInputs,passingInputs,dribblingInputs,defendingInputs,physicalInputs,
fullNameInputs,regexImage,regex
}