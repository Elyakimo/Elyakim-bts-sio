package nc.ldu.materiel.service;

import java.util.ArrayList;
import java.util.List;
import org.springframework.stereotype.Service;
import nc.ldu.materiel.model.Materiel;

@Service
public class MaterielService {
    private final List<Materiel> liste = new ArrayList<>();
    private Long prochainId = 3L;

    public MaterielService() {
        liste.add(new Materiel(1L, "Ordinateur portable", "Informatique", "Bon"));
        liste.add(new Materiel(2L, "Vidéoprojecteur", "Audiovisuel", "Moyen"));
    }

    public List<Materiel> rechercherTous() {
        return liste;
    }
    public List<Materiel> rechercherTous(String categorie) {
        if (categorie == null || categorie.isBlank()) {
            return liste;
        }
        List<Materiel> resultat = new ArrayList<>();
        for (Materiel m : liste) {
            if (m.getCategorie().equalsIgnoreCase(categorie)){
                resultat.add(m);
            }
        }
        return resultat;
    }

    public Materiel rechercherParId(Long id) {
        for (Materiel m : liste){
            if (m.getId().equals(id)){
                return m;
            }
        }
        return null;
    }

    public void ajouter(Materiel materiel) {
        materiel.setId(Long.valueOf(prochainId++));
        liste.add(materiel);
    }

    public boolean emprunter(Long id) {
        Materiel m = rechercherParId(id);
        if (m.isDisponible() == false) {
            return false;
        }
        return m.emprunter();
    }

    public void restituer(Long id) {
        Materiel m = rechercherParId(id);
        if (m != null) {
            m.restituer();
        }
    }
}
