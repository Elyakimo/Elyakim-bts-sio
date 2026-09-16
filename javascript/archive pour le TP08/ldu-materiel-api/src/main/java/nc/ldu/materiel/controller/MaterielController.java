package nc.ldu.materiel.controller;

import java.util.List;

import nc.ldu.materiel.entity.Materiel;
import nc.ldu.materiel.repository.MaterielRepository;
import org.springframework.http.HttpStatus;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.server.ResponseStatusException;

@RestController
@RequestMapping("/api/materiels")
@CrossOrigin(origins = {"http://localhost:5173", "http://localhost:5174"})
public class MaterielController {

    private final MaterielRepository repository;

    public MaterielController(MaterielRepository repository) {
        this.repository = repository;
    }

    @GetMapping
    public List<Materiel> obtenirTous() {
        return repository.findAll();
    }

    @PostMapping
    @ResponseStatus(HttpStatus.CREATED)
    public Materiel creer(@RequestBody Materiel materiel) {
        materiel.setDisponible(true);
        return repository.save(materiel);
    }

    @PostMapping("/{id}/emprunter")
    public Materiel emprunter(@PathVariable Long id) {
        Materiel materiel = trouver(id);

        if (!materiel.isDisponible()) {
            throw new ResponseStatusException(
                HttpStatus.CONFLICT,
                "Ce matériel est déjà emprunté"
            );
        }

        materiel.setDisponible(false);
        return repository.save(materiel);
    }

    @PostMapping("/{id}/restituer")
    public Materiel restituer(@PathVariable Long id) {
        Materiel materiel = trouver(id);
        materiel.setDisponible(true);
        return repository.save(materiel);
    }

   @DeleteMapping("/{id}")
    @ResponseStatus(HttpStatus.NO_CONTENT)
    public void supprimer(@PathVariable long id) {
        if (!repository.existsById(id)) {
            throw new ResponseStatusException(
                HttpStatus.NOT_FOUND,
                "Matériel introuvable"
            );
        }

        repository.deleteById(id);
    }

    private Materiel trouver(long id) {
        return repository.findById(id)
            .orElseThrow(() ->
                new ResponseStatusException(
                    HttpStatus.NOT_FOUND,
                    "Matériel introuvable"
                )
            );
    }
}
