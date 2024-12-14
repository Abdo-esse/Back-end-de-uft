import{data,localStorageData} from "./validationDuForm.js"
import{ displayCard,reserve} from "./displayCard.js"


// 
function deleteJoueur(indexDelet) {
    
    data.splice(indexDelet,1)
    displayCard(reserve,data)
    localStorageData()
}



//termine front-end

export{ deleteJoueur}