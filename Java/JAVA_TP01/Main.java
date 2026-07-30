public class Main { 

    public static void main(String[] args) { 
 
        System.out.println("Je découvre JAVA"); 
        Etudiant e1 = new Etudiant("Lebégé", "Nico", 19, "SIO1", "ta@gm.lp");
        Etudiant e2 = new Etudiant("Leguique", "Gaël", 19, "SIO1", "pipi@caca.popo");
        Etudiant e3 = new Etudiant("Netanyahu", "Benjamin", 17, "Mossad", "Cia@fbi.dgse");
        Salle s1 = new Salle(25, 32,"Batiment B");
        Salle s2 = new Salle(8, 25,"Batiment F");
        Salle s3 = new Salle(6, 15, "Batiment A");
        Prof prof1 = new Prof();
        prof1.nom = "Rabier";
        prof1.prenom = "Anakin";
        prof1.matiere = "Vaapad";
        e3.sePresenter();
        e3.anniversaire();
        e3.sePresenter();
        System.out.println(e1.nom);
        System.out.println(e1.prenom);
        System.out.println(e1.age);
        System.out.println(e1.classe);
        System.out.println(e2.nom);
        System.out.println(e2.prenom);
        System.out.println(e2.age);
        System.out.println(e2.classe);
        System.out.println(e3.nom);
        System.out.println(e3.prenom);
        System.out.println(e3.age);
        System.out.println(e3.classe); 
        System.out.println(prof1.nom);
        System.out.println(prof1.prenom);
        System.out.println(prof1.matiere);
        e1.changerClasse("SIO 2");
        System.out.println(e1.classe);
        e1.souhaiterBonneJournee("Mr Rabier");
        System.out.println(
            e1.calculerAnneedeNaissance()
        );
        e1.estMajeur();
        e2.estMajeur();
        e3.estMajeur();
        e1.afficheCarteEtudiant();
        s1.afficheSalle();
        s2.afficheSalle();
        s3.afficheSalle();
    } 
 
}