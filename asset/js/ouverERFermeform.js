//import
import{conditionPhisiqueIunput,inputsText,inputsLien, selectInput}from "./validationDuForm.js"
import{joueur} from "./fourmedynamique.js"
 
//  const labelGolkepr=document.querySelectorAll('.goolkepr')
//  labelGolkepr.forEach(label=>label.style.display=" none")
 
 
 const addjoueurs=document.querySelector('.addJouersImag')

 const fermeFormeRetourBtn=document.querySelector('.fermform')

 const forme=document.querySelector('#forme')

let updateDataBtn=document.querySelector('.saveData')
// console.log(updateDataBtn);



const deletCardeBtn=document.querySelector('.deletData')




function ouverForm(){
    
    
    addjoueurs.style.display=" none"
    forme.style.display="block"
    updateDataBtn.style.display=" none"
    deletCardeBtn.style.display=" none"
    joueur.style.display=" none"

}


function fermeForme() {
    
    for (let i = 0; i < conditionPhisiqueIunput.length; i++) {
        conditionPhisiqueIunput[i].value=""
        conditionPhisiqueIunput[i].style.border = "none";
    }
    for (let i = 0; i < inputsText.length; i++) {
        inputsText[i].value=""
        inputsText[i].style.border = "none";
    }
    for (let i = 0; i < inputsLien.length; i++) {
        inputsLien[i].value=""
        inputsLien[i].style.border = "none";
    }
    selectInput.value=""
    selectInput.style.border = "none";




    addjoueurs.style.display=" block"
    forme.style.display="none"
    

    
}




addjoueurs.addEventListener('click',ouverForm)
fermeFormeRetourBtn.addEventListener('click',fermeForme)
//expotre
export{fermeForme,ouverForm,deletCardeBtn,updateDataBtn,addjoueurs}