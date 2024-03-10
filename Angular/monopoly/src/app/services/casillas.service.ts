/*
  @authors Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera

  Este servicio proporciona funcionalidades relacionadas con las casillas del juego.

  El método getCasillasByColor() se utiliza para obtener todas las casillas de un color específico enviando una solicitud GET al servidor con el color como parámetro.

  El método getCasillasDetalles() se utiliza para obtener los detalles de una casilla específica enviando una solicitud GET al servidor con el ID de la casilla como parámetro.
*/
import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class CasillasService {

  //Ruta para conectar con el servicio

  constructor(private http: HttpClient) { }

  getCasillasByColor(color: string): Observable<any[]> {
    return this.http.get<any[]>(`http://localhost:8000/api/casillas/${color}`);
  }

  getCasillasDetalles(id: number): Observable<any[]> {
    return this.http.get<any[]>(`http://localhost:8000/api/casillaDetalles/${id}`);
  }
}
