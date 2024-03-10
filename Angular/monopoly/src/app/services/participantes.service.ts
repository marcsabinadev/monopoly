/*
  @authors Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera

  Este servicio proporciona funcionalidades relacionadas con los participantes del juego.

  El método getParticipantes() se utiliza para obtener la lista de participantes enviando una solicitud GET al servidor.

  El método createParticipante() se utiliza para crear un nuevo participante enviando una solicitud POST al servidor con los datos del participante.

  El método find() se utiliza para obtener los detalles de un participante específico enviando una solicitud GET al servidor con el ID del participante como parámetro.

  El método update() se utiliza para actualizar los datos de un participante existente enviando una solicitud PUT al servidor con los datos actualizados del participante y el ID del participante como parámetro.

  El método eliminarParticipante() se utiliza para eliminar un participante existente enviando una solicitud DELETE al servidor con el ID del participante como parámetro.

  La función errorHandler() se utiliza para manejar errores de las solicitudes HTTP y devuelve un mensaje de error adecuado.
*/
import { HttpClient, HttpErrorResponse, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable, throwError } from 'rxjs';
import { catchError } from 'rxjs/operators';
import { Participante } from '../model/Participante';

@Injectable({
  providedIn: 'root'
})
export class ParticipantesService {
  private url: string = 'http://localhost:8000/api';

  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  }

  constructor(private http: HttpClient) { }

  getParticipantes(): Observable<any> {
    return this.http.get<any>(this.url + '/clasificacion');
  }

  createParticipante(participante: any): Observable<any> {
    return this.http.post<any>(this.url + '/crearParticipante', participante);
  }


  find(id: number): Observable<Participante> {
    return this.http.get<Participante>(this.url + id)
      .pipe(
        catchError(this.errorHandler)
      )
  }

  update(participante: any, id: number): Observable<Participante> {
    return this.http.put<Participante>(this.url + '/actualizarParticipante/'+ id, JSON.stringify(participante), this.httpOptions)
      .pipe(
        catchError(this.errorHandler)
      )
  }


  eliminarParticipante(id: number): Observable<any> {
    return this.http.delete<any>(`${this.url}/eliminarParticipante/${id}`);
  }

  errorHandler(error: HttpErrorResponse) {
    let errorMessage = '';
    if (error.error instanceof ErrorEvent) {
      errorMessage = error.error.message;
    } else {
      errorMessage = `Error Code: ${error.status}\nMessage: ${error.message}`;
    }
    return throwError(errorMessage);
  }
}




