import{ouverForm,updateDataBtn,fermeForme}from "./ouverERFermeform.js"
import{ displayCard,reserve} from "./displayCard.js" 
import{data,localStorageData,sendDataBtn,selectInput,photoInputs,flagInputs,clubInputs,logoInputs,ratingInputs,paceInputs,shootingInputs,passingInputs,dribblingInputs,defendingInputs,physicalInputs,
    fullNameInputs,regexImage,regex} from "./validationDuForm.js"
   
    
    let modifucationDataBtn=document.querySelector('.saveData')

    

 //div des inputs du joueurs
let joueur=document.querySelector('.joueurs')


//les labelle des  des inputs du GK
const labelGolkepr=document.querySelectorAll('.goolkepr')


//les labelle des  des inputs du GK
const labelJoueur=document.querySelectorAll('.labelJoueur')

//  index de joueur
  let indexJoure=null

 function formeUpdateData(index) {
   
    indexJoure=index
    ouverForm()
    updateDataBtn.style.display="block"
    sendDataBtn.style.display="none"
    
    
    photoInputs.value=data[index].photo
    flagInputs.value=data[index].flag
    clubInputs.value=data[index].club
    logoInputs.value=data[index].logo
    ratingInputs.value=data[index].rating
    paceInputs.value=data[index].pace
    shootingInputs.value=data[index].shooting
    passingInputs.value=data[index].passing
    dribblingInputs.value=data[index].dribbling
    defendingInputs.value=data[index].defending
    physicalInputs.value=data[index].physical
    fullNameInputs.value=data[index].fullName
    selectInput.value=data[index].position
    
    
    if (selectInput.value=="GK"){
        labelGolkepr.forEach(label=>label.style.display="block")
        labelJoueur.forEach(label=>label.style.display="none")
        joueur.style.display="block"
     }
    else{
        labelGolkepr.forEach(label=>label.style.display="none")
        labelJoueur.forEach(label=>label.style.display="block")
        joueur.style.display="block"
      }
   
    
    
 }


 function updateData() {
  
    
    if (regex.test(fullNameInputs.value)&& regex.test(clubInputs.value) && regexImage.test( photoInputs.value)&& regexImage.test( flagInputs.value)&&regexImage.test(logoInputs.value)&&selectInput.value!==""&&(paceInputs.value > 0 &&paceInputs.value < 100)&&(ratingInputs.value > 0 &&ratingInputs.value < 100)&&(shootingInputs.value > 0 &&shootingInputs.value < 100)&&(passingInputs.value > 0 &&passingInputs.value < 100)&&(dribblingInputs.value > 0 &&dribblingInputs.value < 100)&&(physicalInputs.value > 0 &&physicalInputs.value < 100)&&(defendingInputs.value > 0 &&defendingInputs.value < 100)) {
        // console.log(fullName,photo,position,flag,club,logo,rating,pace,shooting,passing,dribbling,defending,physical);
        
        
        data[indexJoure]={
        fullName:fullNameInputs.value,
        photo:photoInputs.value,
        position:selectInput.value, 
        flag:flagInputs.value,
        club: paceInputs.value,
        logo:logoInputs.value,
        rating: ratingInputs.value,
        pace:paceInputs.value,
        shooting:shootingInputs.value,
        passing:passingInputs.value,
        dribbling:dribblingInputs.value,
        defending:defendingInputs.value,
        physical:physicalInputs.value
       }
    
    
        displayCard(reserve,data)
    
        localStorageData()
       
        fermeForme()
        sendDataBtn.style.display="block"
       }
 }

 

//  console.log(updateDataBtn);
 
 modifucationDataBtn.addEventListener('click', updateData)

// updateDataBtn.addEventListener('click',()=>{
//     console.log('4khdama');
//     })

 export{formeUpdateData}