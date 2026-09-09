import { Component, inject, OnInit } from '@angular/core';
import { Materiel } from './models/materiel';
import { MaterielService } from './service/materiel.service';
import { FormsModule } from '@angular/forms';

@Component({selector:'app-root',standalone:true, imports: [FormsModule], templateUrl:'./app.component.html'})
export class AppComponent implements OnInit { 
    titre='LDU Matériel avec Angular'; 
    sousTitre='Bienvenue sur notre application';


    materiels: Materiel[] = [];
    private service = inject(MaterielService);
    erreur: string = '';
    message: string = '';

    nouveau: Materiel = { designation: '', categorie: '', etat: '', disponible: true }; 

    ngOnInit(): void {
        this.charger();
    }

    charger(): void{
        this.service.obtenirTous().subscribe({
            next: donnees => this.materiels = donnees,
            error: () => this.erreur ='API indisponible'
        });
    }
    afficherDesignation(materiel: Materiel): void{
        this.message = `Vous avez choisi ${materiel.designation}`;
    }
    emprunter(m: Materiel): void {
        if (m.id === undefined) return;
        this.service.emprunter(m.id).subscribe(x => this.remplacer(x));
    }

    restituer(m: Materiel): void {
        if (m.id === undefined) return;
        this.service.restituer(m.id).subscribe(x => this.remplacer(x));
    }
    
    ajouter(): void {
        this.service.creer(this.nouveau).subscribe({next: (x) => this.materiels = [...this.materiels, x]});
    }

    private remplacer(modifie: Materiel): void {
        this.materiels = this.materiels.map(m => m.id === modifie.id ? modifie : m);
    }



}

