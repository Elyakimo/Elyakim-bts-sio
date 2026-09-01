package nc.ldu.materiel.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestParam;
import nc.ldu.materiel.model.Materiel;
import nc.ldu.materiel.service.MaterielService;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;


@Controller
@RequestMapping("/materiels")
public class MaterielController {
    private final MaterielService materielService;
    public MaterielController(MaterielService materielService) {
        this.materielService = materielService;
    }
    @GetMapping
    public String afficherListe(@RequestParam(required = false) String categorie, Model model) {
        model.addAttribute("materiels", materielService.rechercherTous());
        model.addAttribute("categorieActuelle", categorie);
        return "liste";
    }
    @GetMapping("/{id}")
    public String afficherDetail(@PathVariable long id, Model model){
        Materiel materiel = materielService.rechercherParId(id);
        if (materiel == null) {
            return "redirect:/materiels";
        }
        model.addAttribute("materiel", materiel);
        return "detail";
    }
    @GetMapping("/nouveau")
    public String afficherFormulaire(Model model) {
        model.addAttribute("materiel", new Materiel());
        return "formulaire";
    }
    @PostMapping
    public String ajouter(@ModelAttribute Materiel materiel){
        materielService.ajouter(materiel);
        return "redirect:/materiels";
    }
    @PostMapping("/{id}/emprunter")
    public String emprunter(@PathVariable Long id) {
        boolean success = materielService.emprunter(id);
        if (!success) {
            return "redirect:/materiels/" + id + "?error=non_disponible";
        }
        return "redirect:/materiels";
    }
    @PostMapping("/{id}/restituer")
    public String restituer(@PathVariable Long id) {
        materielService.restituer(id);
        return "redirect:/materiels";
    }
}
