import{data,localStorageData} from "./validationDuForm.js"
import{ displayCard,reserve} from "./displayCard.js"
import{addjoueurs}from "./ouverERFermeform.js"
import{deleteJoueur} from "./delete.js"


// select les card du joueurs
  let cardeJouerTerain=document.querySelectorAll('.cardeJouerTerain')
// position 
let positionJoueur=null

//div da card filtrer
let cardFiltrer=document.querySelector('.cardFiltrer')

//div qui contien les cards filtrer
let cardFiltrerParent=document.querySelector('.cardFiltrerParent')

//btn de retour
const fermereDivCardfitrerBtn=document.querySelector('.retour') 

//id du card en html
let idCard=null

// id de card por delet
let iddelet=null

// new array pour filtrer
let filterData=[]

// div chaanger 
let retourAchengemnet=null

let datachandement={}






  cardeJouerTerain.forEach((button)=>{
    button.addEventListener('click',(card)=>{
      if (button.hasChildNodes()) {
        retourAchengemnet=button.childNodes[0]
        datachandement={

          id:button.childNodes[0].id,
          fullName:retourAchengemnet.childNodes[7].childNodes[0].textContent,
          photo:retourAchengemnet.childNodes[3].childNodes[1].currentSrc,
          position:retourAchengemnet.childNodes[1].childNodes[3].textContent,
          flag:retourAchengemnet.childNodes[11].childNodes[1].childNodes[1].currentSrc,
          logo:retourAchengemnet.childNodes[11].childNodes[3].childNodes[0].currentSrc, 
          rating:retourAchengemnet.childNodes[1].childNodes[1].textContent,
          pace:retourAchengemnet.childNodes[9].childNodes[1].childNodes[2].textContent,
          shooting:retourAchengemnet.childNodes[9].childNodes[3].childNodes[2].textContent,
          passing:retourAchengemnet.childNodes[9].childNodes[5].childNodes[2].textContent,
          dribbling:retourAchengemnet.childNodes[9].childNodes[7].childNodes[2].textContent,
          defending:retourAchengemnet.childNodes[9].childNodes[9].childNodes[2].textContent,
          physical:retourAchengemnet.childNodes[9].childNodes[11].childNodes[2].textContent
          
        }     
        
             
      }
      positionJoueur=card.target.closest('.cardeJouerTerain').dataset.position
        idCard=card.target.closest('.cardeJouerTerain').id
          ouverDivCardfitrer()
          filtrePosition()
          transporterdata()
    })
  })
  
  // la fonction da filtr data par la position en terain
  function filtrePosition() {
    filterData = data.filter(place => place.position == positionJoueur);
    displayCard(cardFiltrer,filterData)
    cardFiltrer.querySelectorAll('.updateAndDelet').forEach(card=>card.style.display=" none")
  }
 
  // la function da transporter les doner de filtra en terain
  function transporterdata() {
    let addToTerain=cardFiltrer.querySelectorAll('.cardeJouer')
    addToTerain.forEach(button=>{
   
      button.addEventListener('click',()=>{
        let newcard=button.cloneNode(true)
        iddelet=button.id
        
        cardeJouerTerain.forEach((button)=>{
    
          if (button.hasChildNodes()) {
             data.push(datachandement)
            for (let i = 0; i < data.length; i++) {
                if ( Object.keys(data[i]).length === 0) {
                  data.splice(i,1)        
              }
               for (let j = i+1; j < data.length; j++) {
                if (data[i]==data[j]) {
                   data.splice(j,1)
                   } 
               }   
            }
            
            localStorageData()  
          }})
          
         
        let cardterainId=document.getElementById(idCard)
        cardterainId.innerHTML=``
        cardterainId.appendChild(newcard)
        button.remove()
        deletCard()
        fermereDivCardfitrer()
         
         })
    })
 }
  
  // la fonction da ouvar da div de jdq
  function ouverDivCardfitrer(){
    cardFiltrerParent.style.display="block"
   addjoueurs.style.display=" none"
  }

  // fonction de supremer la filtrer choisei
  function deletCard() {
     let indexSu= data.findIndex(x=>x.id === iddelet)
     console.log(indexSu);
     
   deleteJoueur(indexSu)

  }
  
  function fermereDivCardfitrer() {
       cardFiltrerParent.style.display="none"
   addjoueurs.style.display=" block"
  }


  


  fermereDivCardfitrerBtn.addEventListener('click',fermereDivCardfitrer)














  