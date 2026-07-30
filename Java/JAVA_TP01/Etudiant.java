public class Etudiant {
    String nom;
    String prenom;
    int age;
    String classe;
    String email;

    public void direBonjour() {
        System.out.println("Bonjour, je m'appelle " + prenom + ".");
    }
    public void sePresenter() {
        System.out.println("Bonjour, je m'appelle " + prenom + " "  + nom + ". Je suis en BTS " + classe + " j'ai " + age + "ans. Voici mon adresse mail" + email + ".");
    }
    public void changerClasse(String nouvelleClasse) {
        classe = nouvelleClasse;
    }
    public void souhaiterBonneJournee(String nomProf) {
        System.out.println("Bonne journée " + nomProf + " le GOAT !");
    }
    public int calculerAnneedeNaissance(){
        return 2026 - age;
    }
    public void estMajeur(){
        if (age > 18){
            System.out.println(prenom + " est majeur.");
        }
        else {
            System.out.println(prenom + " est mineur.");
        }
    }
    public void afficheCarteEtudiant() {
        System.out.println("Etudiant: "+ prenom + 
        " nom: " + nom +
        " age: " + age +
        " classe: " + classe + " email : " + email + ".");
    }
    public Etudiant(String nom, String prenom, int age, String classe, String email) {
        this.nom = nom;
        this.prenom = prenom;
        this.age = age;
        this.classe = classe;
        this.email = email;
    }
    public void anniversaire() {
        age++;
    }
}
