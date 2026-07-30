package nc.ldu.gestion_etudiants;

import java.time.LocalDateTime;
public class Heure {
    public String getHeure(){
        return LocalDateTime.now().toString();
    }
}
