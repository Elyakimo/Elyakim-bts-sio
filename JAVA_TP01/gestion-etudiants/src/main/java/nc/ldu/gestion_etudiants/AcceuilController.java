package nc.ldu.gestion_etudiants;

import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.bind.annotation.GetMapping;

import java.lang.ProcessHandle.Info;
import java.time.LocalDateTime;
import java.util.List;
import java.util.stream.Collectors;

import org.springframework.web.bind.annotation.PathVariable; 
@RestController 

public class AcceuilController {
    @GetMapping("/") public String acceuil() { 
        return "Bonjour BTS SIO";
    }
    @GetMapping("/bonjour") public String bonjour(){
        return "Bienvenue dans notre première application Spring Boot les SLAM !";
    }
    @GetMapping("/presentation") public String presentation(){
        return "Je m'appelle Pablito et je découvre Spring Boot.";
    }
    @GetMapping("/formation") public String formation(){
        return "BTS SIO - Spécialité SLAM";
    }
    @GetMapping("/etudiant") public String aficherEtudiant() {
        Etudiant etudiant = new Etudiant("Lebégé", "Nico", 19, "SIO 1");
        return etudiant.sePresenter();
    }
    @GetMapping("/api/etudiant") public List<Etudiant> obtenirEtudiants(){
        Etudiant etudiant1 = new Etudiant("Lebégé", "Nico", 19, "SIO1");
        Etudiant etudiant2 = new Etudiant("El fonzy", "Daniel", 18, "SIO1");
        Etudiant etudiant3 = new Etudiant("Darques", "Vador", 21,"SIO2");
        return List.of(etudiant1, etudiant2, etudiant3);
    }
    @GetMapping("/api/professeur") public List<Professeur> obtenirProfesseurs(){
        Professeur professeur1 = new Professeur("Rabier", "Benjamin", "Bloc 2 : Développement SLAM", "Le Goat");
        Professeur professeur2 = new Professeur("Besson", "Loanne", "Bloc 3 : Cybersécurité", "La Goat");
        Professeur professeur3 = new Professeur("Leroux", "Valentin", "Bloc 2 : Réseaux SISR", "Le jeune Goat");
        return List.of(professeur1, professeur2, professeur3);
    }
    @GetMapping("/heure") public String obtenirHeure(){
        return LocalDateTime.now().toString();
    }
    @GetMapping("/bonjour/{prenom}") public String bonjourPersonnalise(@PathVariable String prenom){
        return "Bonjour " + prenom + " !";
    }
    @GetMapping("/api/etudiant/SIO1") public List<Etudiant> etudiantsSIO1() {
        return obtenirEtudiants().stream()
        .filter(e -> e.getClasse().equals("SIO1"))
        .collect(Collectors.toList());
    }
    public record  InfoApplication(String nom, String version, String technologie) {}
    @GetMapping("/api/informations") public InfoApplication informationApplication(){
        return new InfoApplication("Gestion des étudiants", "1.0", "Spring Boot");
    }


}
