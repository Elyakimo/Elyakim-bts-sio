package nc.ldu.portail_securise;

import java.util.Map; 
import org.springframework.security.core.Authentication; 
import org.springframework.web.bind.annotation.GetMapping; 
import org.springframework.web.bind.annotation.RestController; 


@RestController
public class PortailController {
    @GetMapping("/")
    public String accueil() {
        return "Bienvenue sur le portail LDU";
    }
    @GetMapping("/public")
    public String pagePublique() {
        return "Cette page est accessible à tout le monde.";
    }
    @GetMapping("/profil")
    public String profil(Authentication authentication) {
        return "Connecté en tant que " + authentication.getName();
    }
    @GetMapping("/api/moi")
    public Map<String, Object> moi(Authentication authentication) {
        return Map.of(
            "utilisateur", authentication.getName(),
        "roles", authentication.getAuthorities()
        );
    }
    @GetMapping("/admin/tableau")
    public String administration() {
        return "Bienvenue dans l'espace administrateur.";
    }
    @GetMapping("/gestion/tableau")
    public String gestion() {
        return "Bienvenue dans l'espace gestionnaire.";
    }
}