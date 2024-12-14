import{selectInput} from "./validationDuForm.js"

//div des inputs du joueurs
let joueur=document.querySelector('.joueurs')


//les labelle des  des inputs du GK
const labelGolkepr=document.querySelectorAll('.goolkepr')


//les labelle des  des inputs du GK
const labelJoueur=document.querySelectorAll('.labelJoueur')





function formedynamiq() {
    if (selectInput.value=="GK"){
        labelGolkepr.forEach(label=>label.style.display="block")
        labelJoueur.forEach(label=>label.style.display="none")
        joueur.style.display="block"

     }else if (selectInput.value=="") {
        labelGolkepr.forEach(label=>label.style.display="none")
        labelJoueur.forEach(label=>label.style.display="none")
        joueur.style.display="none"
     }else{
        labelGolkepr.forEach(label=>label.style.display="none")
        labelJoueur.forEach(label=>label.style.display="block")
        joueur.style.display="block"
     }
      
}



selectInput.addEventListener('change',formedynamiq)

export{
    labelJoueur,labelGolkepr,joueur
}