/*
  @authors Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera

  Este servicio proporciona funcionalidades relacionadas con las cartas del juego.

  El método indexCartas() se utiliza para obtener todas las cartas del juego.

  Los métodos indexSuerte() e indexCofre() se utilizan para obtener todas las cartas de suerte y todas las cartas de cofre, respectivamente.

  El método createCarta() se utiliza para crear una nueva carta enviando una solicitud POST al servidor con los datos de la carta.

  El método createCartaCofre() se utiliza específicamente para crear una nueva carta de cofre enviando una solicitud POST al servidor.

  El método modificarCarta() se utiliza para modificar una carta existente enviando una solicitud PUT al servidor con los datos actualizados de la carta y el ID de la carta a modificar.

  El método eliminarCarta() se utiliza para eliminar una carta existente enviando una solicitud DELETE al servidor con el ID de la carta a eliminar.

  La función errorHandler() se utiliza para manejar errores de las solicitudes HTTP y devuelve un mensaje de error adecuado.

 
*/

import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse, HttpHeaders } from '@angular/common/http';
import { Observable, catchError, throwError } from 'rxjs';
import { Carta } from '../model/Carta';

@Injectable({
  providedIn: 'root'
})
export class CartasService {

  constructor(private http: HttpClient) { }

  url: string = 'http://localhost:8000/api';

  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  }


  indexCartas(): Observable<any> {
    return this.http.get<any>(this.url + "/carta");
  }

  indexSuerte(): Observable<any> {
    return this.http.get<any>(this.url + "/cartaSuerte");
  }

  indexCofre(): Observable<any> {
    return this.http.get<any>(this.url + "/cartaCofre");
  }

  createCarta(carta: any): Observable<any> {
    return this.http.post<any>(this.url + '/crearCarta', carta);
  }



  createCartaCofre(nuevaCarta: any): Observable<any> {
    return this.http.post<any>(`${this.url}/crearCarta`, nuevaCarta);
  }


  modificarCarta(carta: any, id: number): Observable<Carta> {
    return this.http.put<Carta>(this.url + '/actualizarCarta/'+ id, JSON.stringify(carta), this.httpOptions)
      .pipe(
        catchError(this.errorHandler)
      )
  }

  // Método para eliminar una carta
  eliminarCarta(id: number): Observable<any> {
    return this.http.delete<any>(`${this.url}/eliminarCarta/${id}`);
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
