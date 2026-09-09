import { Injectable, inject } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs'; 
import { Materiel } from '../models/materiel';

@Injectable({providedIn: 'root'})
export class MaterielService {
    private http = inject(HttpClient);
    private apiUrl = 'http://localhost:8080/api/materiels'; // URL de l'API REST

    obtenirTous(): Observable<Materiel[]> {
        return this.http.get<Materiel[]>(this.apiUrl);
    }
    emprunter(id: number): Observable<Materiel> {
        return this.http.post<Materiel>(`${this.apiUrl}/${id}/emprunter`, {});
    }

    restituer(id: number): Observable<Materiel> {
        return this.http.post<Materiel>(`${this.apiUrl}/${id}/restituer`, {});
    }
    creer(m: Materiel): Observable<Materiel> {
        return this.http.post<Materiel>(this.apiUrl, m);
    }
}
