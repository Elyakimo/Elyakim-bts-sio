package nc.ldu.gestion_etudiants;

public class Professeur {
    String nom;
    String prenom;
    String matiere;
    String surnom;
    public Professeur(String nom, String prenom, String matiere, String surnom){
        this.nom = nom;
        this.prenom = prenom;
        this.matiere = matiere;
        this.surnom = surnom;
    }
    public String getNom() {
        return nom;
    }
    public String getPrenom(){
        return prenom;
    }
    public String getMatiere(){
        return matiere;
    }
    public String getSurnom(){
        return surnom;
    }
}
