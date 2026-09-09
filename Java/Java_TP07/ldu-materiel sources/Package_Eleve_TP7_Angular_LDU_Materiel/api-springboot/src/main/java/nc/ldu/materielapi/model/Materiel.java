package nc.ldu.materielapi.model;
public class Materiel {
  private Long id; private String designation; private String categorie; private String etat; private boolean disponible;
  public Materiel() { disponible = true; }
  public Materiel(Long id, String designation, String categorie, String etat) {
    this.id=id; this.designation=designation; this.categorie=categorie; this.etat=etat; this.disponible=true;
  }
  public boolean emprunter() { if (!disponible) return false; disponible=false; return true; }
  public void restituer() { disponible=true; }
  public Long getId(){return id;} public void setId(Long v){id=v;}
  public String getDesignation(){return designation;} public void setDesignation(String v){designation=v;}
  public String getCategorie(){return categorie;} public void setCategorie(String v){categorie=v;}
  public String getEtat(){return etat;} public void setEtat(String v){etat=v;}
  public boolean isDisponible(){return disponible;} public void setDisponible(boolean v){disponible=v;}
}
