package nc.ldu.helpdesk_api.controller;

import java.util.List;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping; 
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping; 
import org.springframework.web.bind.annotation.RestController; 
import nc.ldu.helpdesk_api.model.Ticket; 
import nc.ldu.helpdesk_api.service.TicketService; 
import org.springframework.http.HttpStatus;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestParam;

@RestController
@RequestMapping("/api/tickets")
public class TicketController {
    private final TicketService ticketService;
    public TicketController(TicketService ticketService){
        this.ticketService = ticketService;
    }
    @GetMapping
    public List<Ticket> tous(@RequestParam(required = false) String priorite){
        if (priorite == null){
            return ticketService.tous();
        }
        return ticketService.filtrerParPriorite(priorite);
    }
    @GetMapping("/{id}")
    public ResponseEntity<Ticket> unTicket(@PathVariable Long id) {
        return ticketService.chercherParId(id)
        .map(ResponseEntity::ok)
        .orElseGet(() -> ResponseEntity.notFound() .build());
    }
    @PostMapping
    public ResponseEntity<Ticket> creer(@RequestBody Ticket ticket){
        Ticket ticketCree = ticketService.ajouter(ticket);
        return ResponseEntity
        .status(HttpStatus.CREATED)
        .body(ticketCree);
    }
    @PutMapping("/{id}/resoudre") 
    public ResponseEntity<Ticket> resoudre(@PathVariable Long id) {     
        return ticketService.chercherParId(id) 
        .map(ticket -> {             ticket.resoudre(); 
            return ResponseEntity.ok(ticket); 
        }) 
        .orElseGet(() -> ResponseEntity.notFound().build()); 
    } 
    @DeleteMapping("/{id}") 
    public ResponseEntity<Void> supprimer(@PathVariable Long id) {
        if (ticketService.supprimer(id)) { 
        return ResponseEntity.noContent().build(); 
        } 
    return ResponseEntity.notFound().build(); 
    } 


}
