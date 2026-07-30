package nc.ldu.gestion_etudiants;


public class Etudiant {
    private String nom;
    private String prenom;
    private int age;
    private String classe;
    public Etudiant(String nom, String prenom, int age, String classe){
        this.nom = nom;
        this.prenom = prenom;
        this.age = age;
        this.classe = classe;
    }
    public String sePresenter() {
        return "Je m'appelle " + prenom +" "+ nom + ", j'ai" + age + " ans et je suis en " + classe + ".";
    }
    public String getNom() {
        return nom;
    }
    public String getPrenom(){
        return prenom;
    }
    public int getAge(){
        return age;
    }
    public String getClasse(){
        return classe;
    }
}
