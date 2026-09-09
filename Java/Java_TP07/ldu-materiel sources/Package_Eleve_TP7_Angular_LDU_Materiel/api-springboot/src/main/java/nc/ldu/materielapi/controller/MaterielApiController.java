package nc.ldu.materielapi.controller;

import nc.ldu.materielapi.model.Materiel;
import nc.ldu.materielapi.service.MaterielService;
import org.springframework.http.*;
import org.springframework.web.bind.annotation.*;
import java.util.List;

@RestController
@RequestMapping("/api/materiels")
@CrossOrigin(origins = "http://localhost:4200")
public class MaterielApiController {
  private final MaterielService service;

  public MaterielApiController(MaterielService service) {
    this.service = service;
  }

  @GetMapping
  public List<Materiel> tous() {
    return service.rechercherTous();
  }

  @GetMapping("/{id}")
  public ResponseEntity<Materiel> un(@PathVariable Long id) {
    return service.rechercherParId(id).map(ResponseEntity::ok).orElse(ResponseEntity.notFound().build());
  }

  @PostMapping
  public ResponseEntity<Materiel> ajouter(@RequestBody Materiel m) {
    if (m.getDesignation() == null || m.getDesignation().isBlank() || m.getEtat() == null || m.getEtat().isBlank())
      return ResponseEntity.badRequest().build();
    return ResponseEntity.status(HttpStatus.CREATED).body(service.ajouter(m));
  }

  @PostMapping("/{id}/emprunter")
  public ResponseEntity<Materiel> emprunter(@PathVariable Long id) {
    return service.rechercherParId(id)
        .map(m -> m.emprunter() ? ResponseEntity.ok(m) : ResponseEntity.status(HttpStatus.CONFLICT).<Materiel>build())
        .orElse(ResponseEntity.notFound().build());
  }

  @PostMapping("/{id}/restituer")
  public ResponseEntity<Materiel> restituer(@PathVariable Long id) {
    return service.rechercherParId(id).map(m -> {
      m.restituer();
      return ResponseEntity.ok(m);
    }).orElse(ResponseEntity.notFound().build());
  }

  @DeleteMapping("/{id}")
  public ResponseEntity<Void> supprimer(@PathVariable Long id) {
    return service.supprimer(id) ? ResponseEntity.noContent().build() : ResponseEntity.notFound().build();
  }
}
