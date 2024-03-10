/*
  @authors Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera

  Este servicio proporciona funcionalidades relacionadas con la clasificación del juego.

  El método getClasificaciones() se utiliza para obtener la clasificación de los participantes enviando una solicitud GET al servidor.
*/
import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ClasificacionService {

  //Inyectamos el servicio HttpClient
  constructor(private http: HttpClient) {

  }

  //Ruta para conectar con el servicio
  url: string = 'http://localhost:8000/api';


  /**
   *
   */
  getClasificaciones(): Observable<any> {
    return this.http.get<any>(this.url + "/clasificacion");
  }
}
