package nc.ldu.helpdesk_api.service;

import java.util.ArrayList;
import java.util.List; 
import java.util.Optional;
import org.springframework.stereotype.Service;
import nc.ldu.helpdesk_api.model.Ticket;

@Service
public class TicketService{
    private final List<Ticket> tickets = new ArrayList<>();
    private long prochainId = 1;
    public TicketService() {
        ajouter(new Ticket(null, "Wi-Fi indisponible", "Aucune connexion en salle B12", "HAUTE", false));
        ajouter(new Ticket(null, "Écran sans image", "Le vidéoprojecteur ne détecte plus le PC", "NORMALE", false)); 
    }
    public List<Ticket> tous(){
        return tickets;
    }
    public Optional<Ticket> chercherParId(Long id) {
        return tickets.stream()
        .filter(ticket -> ticket.getId().equals(id))
        .findFirst();
    }
    public Ticket ajouter(Ticket ticket) {
        ticket.setId(prochainId++);
        tickets.add(ticket);
        return ticket;
    }
    public boolean supprimer(Long id) {
        return tickets.removeIf(ticket -> ticket.getId().equals(id));
    }
    public List<Ticket> filtrerParPriorite(String priorite){
        return tickets.stream()
        .filter(ticket -> ticket.getPriorite() .equalsIgnoreCase(priorite))
        .toList();
    }

    }