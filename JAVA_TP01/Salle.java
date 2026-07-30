public class Salle {
    int numero;
    int capacite;
    String batiment;
    public Salle(int numero, int capacite, String batiment){
        this.numero = numero;
        this.capacite = capacite;
        this.batiment = batiment;

    }
    public void afficheSalle(){
        System.out.println("numéro de salle: "+ numero + " capacité de la salle: "+ capacite + " " + batiment + ".");
    }
}
