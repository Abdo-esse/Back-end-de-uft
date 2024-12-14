import{data,localStorageData} from "./validationDuForm.js"
import{formeUpdateData} from "./modification.js"
import{deleteJoueur} from "./delete.js"



//div de reserve
const reserve=document.querySelector('.cardsJouers')










function displayCard(div,array) {
    
   div.innerHTML="";

   array.forEach((elment,index)=>
     
      
    div.innerHTML +=`
    <div class="cardeJouer" id="${elment.id}">
                <div class="ratingAndPosition">
                  <h1>${elment.rating}</h1>
                  <p class="position">${elment.position}</p>
                </div>
                <div class="photo">
                 <img src="${elment.photo}" alt="" srcset="">
                </div>
                <div class="updateAndDelet">
                  <div  class="updat" data-index="${index}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"/></svg></div>
                   <div class="delet" data-index="${index}" ><svg   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path  d="M576 128c0-35.3-28.7-64-64-64L205.3 64c-17 0-33.3 6.7-45.3 18.7L9.4 233.4c-6 6-9.4 14.1-9.4 22.6s3.4 16.6 9.4 22.6L160 429.3c12 12 28.3 18.7 45.3 18.7L512 448c35.3 0 64-28.7 64-64l0-256zM271 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg></div>

                </div>
                <div class="name"><h5>${elment.fullName}</h5></div>
                <div class="conditionPhisique">
                   <div class="pace"><p>${elment.position === "GK" ? "DIV" : "pace"}</p> <h6>${elment.pace}</h6></div>
                   <div class="shooting"><p>${elment.position === "GK" ? "HAN" : "SHO"}</p> <h6>${elment.shooting}</h6></div>
                   <div class="passing"><p>${elment.position === "GK" ? "KIC" : "PAS"}</p> <h6>${elment.passing}</h6></div>
                   <div class="dribbling"><p>${elment.position === "GK" ? "REF" : "DRI"}</p> <h6>${elment.dribbling}</h6></div>
                   <div class="defending"><p>${elment.position === "GK" ? "SPD" : "DFE"}</p> <h6>${elment.defending}</h6></div>
                   <div class="physical"><p>${elment.position === "GK" ? "POS" : "PHY"}</p> <h6>${elment.physical}</h6></div>
                </div>
                <div class="club">
                 <div class="nationalite"> <img src="${elment.logo}" alt=""></div>
                 <div class="ekipe"><img src="${elment.flag}" alt=""></div>
                 
                </div>
             </div>
    `
   ) 
   // Ajout des événements dynamiquement
   document.querySelectorAll('.updat').forEach((button) => {
      
      button.addEventListener('click', (elment) => {
         // Récupérer l'index depuis data-index
         const index = elment.target.closest('.updat').dataset.index;
 
         // Appeler updateData avec l'index
         formeUpdateData(index);
     });
     document.querySelectorAll('.delet').forEach(button=>{
      button.addEventListener('click',(element)=>{
         const indexDelet = element.target.closest('.delet').dataset.index;
         deleteJoueur(indexDelet)
      })
     })
   });

localStorageData();
}




export{
    displayCard,reserve
}



