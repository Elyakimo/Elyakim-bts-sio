package nc.ldu.materielapi.service;
import nc.ldu.materielapi.model.Materiel;
import org.springframework.stereotype.Service;
import java.util.*;
@Service
public class MaterielService {
  private final List<Materiel> materiels = new ArrayList<>(); private Long prochainId=3L;
  public MaterielService() {
    materiels.add(new Materiel(1L,"Ordinateur portable","Informatique","Bon"));
    materiels.add(new Materiel(2L,"Vidéoprojecteur","Audiovisuel","Moyen"));
  }
  public List<Materiel> rechercherTous(){return materiels;}
  public Optional<Materiel> rechercherParId(Long id){return materiels.stream().filter(m->m.getId().equals(id)).findFirst();}
  public Materiel ajouter(Materiel m){m.setId(prochainId++);m.setDisponible(true);materiels.add(m);return m;}
  public boolean supprimer(Long id){return materiels.removeIf(m->m.getId().equals(id));}
}
