/*
  @authors Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera

  Este servicio proporciona funcionalidades relacionadas con la autenticación de usuarios.

  El método register() se utiliza para registrar un nuevo usuario enviando una solicitud POST al servidor con los datos proporcionados.

  El método login() se utiliza para iniciar sesión enviando una solicitud POST al servidor con las credenciales proporcionadas.

  El método isLoggedIn() verifica si el usuario está actualmente autenticado comprobando si existe un token de acceso en el almacenamiento local.

  El método getAccessToken() devuelve el token de acceso almacenado en el almacenamiento local.

  El método isAuthenticated() devuelve un observable que emite true si el usuario está autenticado actualmente, basado en la presencia del token de acceso en el almacenamiento local.

  El método getUser() obtiene la información del usuario actual enviando una solicitud GET al servidor y proporcionando el token de acceso en los encabezados de la solicitud.

  El método logout() se utiliza para cerrar sesión del usuario enviando una solicitud POST al servidor para eliminar el token de acceso almacenado en el servidor y limpiar el almacenamiento local.
*/

import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, of } from 'rxjs';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class AuthService {
  private baseUrl = 'http://localhost:8000/api';

  constructor(private http: HttpClient) { }

  register(name: string, age: number, email: string, password: string, passwordConfirmation: string): Observable<any> {
    const data = { name, age, email, password, password_confirmation: passwordConfirmation };
    return this.http.post(`${this.baseUrl}/register`, data);
  }

  login(email: string, password: string): Observable<any> {
    const data = { email, password };
    return this.http.post(`${this.baseUrl}/login`, data);
  }

  isLoggedIn(): boolean {
    // Verificar si el token de acceso existe en el almacenamiento local
    return !!localStorage.getItem('access_token');
  }

  getAccessToken(): string | null {
    // Obtener el token de acceso del almacenamiento local
    return localStorage.getItem('access_token');
  }

  isAuthenticated(): Observable<boolean> {
    const token = localStorage.getItem('access_token');
    return of(token !== null);
  }

  getUser(): Observable<any> {
    const headers = new HttpHeaders({
      'Authorization': `Bearer ${localStorage.getItem('access_token')}`
    });
    return this.http.get(`${this.baseUrl}/user`, { headers }).pipe(
      map((response: any) => response.data)
    );
  }

  logout(): Observable<any> {
    const headers = new HttpHeaders({
      'Authorization': `Bearer ${localStorage.getItem('access_token')}`
    });

    return this.http.post(`${this.baseUrl}/logout`, {}, { headers }).pipe(
      map(() => {
        localStorage.removeItem('access_token');
        localStorage.removeItem('user_name');
        localStorage.removeItem('user_rol');
      })
    );
  }

  isAdmin(): boolean {
    // Verificar si el usuario tiene un rol de administrador
    const userRol = localStorage.getItem('user_rol');
    return userRol === 'admin';
  }

}
