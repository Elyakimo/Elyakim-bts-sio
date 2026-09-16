package nc.ldu.materiel.repository;

import nc.ldu.materiel.entity.Materiel;
import org.springframework.data.jpa.repository.JpaRepository;

public interface MaterielRepository extends JpaRepository<Materiel, Long> {
}
