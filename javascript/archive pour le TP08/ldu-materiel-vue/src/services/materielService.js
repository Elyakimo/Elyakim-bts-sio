const API_URL = 'http://localhost:8080/api/materiels'
const messageErreur = "nous n'avons pas récupéré les données"

export async function obtenirMateriels(){
    return fetch('/api/materiels')
        .then(reponse => reponse.json())
        .then(data => {
            console.log(data)   
            return data         
        })
        .catch(erreur => {
            console.error(messageErreur, erreur)
            return []
        })
}
export async function emprunter(id){
    return fetch(`/api/materiels/${id}/emprunter`, {method: 'POST'})
        .then(reponse => reponse.json())
        .then(data => {
            console.log(data)
            return data
        })
        .catch(erreur => {
            console.error("Erreur lors de l'emprunt", erreur)
            return null
        })
}
export async function restituer(id){
    return fetch(`/api/materiels/${id}/restituer`, {method: 'POST'})
        .then(reponse => reponse.json())
        .then(data => {
            console.log(data)
            return data
        })
        .catch(erreur => {
            console.error("Erreur lors de la restitution", erreur)
            return null
        })
}
export async function ajouterMateriel(){
    return fetch(`/api/materiels`)
}