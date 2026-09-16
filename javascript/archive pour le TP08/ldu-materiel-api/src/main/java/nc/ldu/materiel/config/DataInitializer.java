package nc.ldu.materiel.config;

import nc.ldu.materiel.entity.Materiel;
import nc.ldu.materiel.repository.MaterielRepository;
import org.springframework.boot.CommandLineRunner;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;

@Configuration
public class DataInitializer {

    @Bean
    CommandLineRunner chargerDonnees(MaterielRepository repository) {
        return args -> {
            repository.save(new Materiel(
                "Ordinateur portable",
                "Informatique",
                "Bon",
                true
            ));

            repository.save(new Materiel(
                "Vidéoprojecteur",
                "Audiovisuel",
                "Moyen",
                false
            ));

            repository.save(new Materiel(
                "Gode",
                "Sex-toy",
                "Bon",
                true
            ));
            repository.save(new Materiel(
                "Sabre",
                "Jouet",
                "à réparer",
                false
            ));
            repository.save(new Materiel(
                "Baguette",
                "Nouriture",
                "Bon",
                true
            ));
            repository.save(new Materiel(
                "Polo",
                "Vêtement",
                "Bon",
                true
            ));
            repository.save(new Materiel(
                "Slip",
                "Sous-vêtement",
                "à réparer",
                false
            ));
            
        };
    }
}
