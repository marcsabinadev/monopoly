/*
   @authors Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera

  Este componente se encarga de la navegación del usuario.
  Utiliza el servicio AuthService para verificar la autenticación del usuario y obtener información sobre el usuario.

  En el método ngOnInit(), se suscribe al estado de autenticación del usuario y, si está autenticado, obtiene información sobre el usuario.
  También se determina si el usuario autenticado es un administrador.

  El método logout() se utiliza para cerrar sesión del usuario. Llama al método logout() del servicio AuthService y redirige al usuario a la página de inicio de sesión.
*/

import { Component, OnInit } from '@angular/core';
import { AuthService } from '../../services/auth.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-navegacion',
  templateUrl: './navegacion.component.html',
  styleUrls: ['./navegacion.component.css']
})
export class NavegacionComponent implements OnInit {
  isCollapsed = true;
  isAuthenticated = false;
  isAdmin = false;
  user: any = {};
  isUserDropdownOpen = false;
  isCartasDropdownOpen = false;
  isParticipantesDropdownOpen = false;

  constructor(private authService: AuthService, private router: Router) { }

  ngOnInit() {
    this.authService.isAuthenticated().subscribe(
      (authenticated) => {
        this.isAuthenticated = authenticated;
        if (authenticated) {
          this.authService.getUser().subscribe(
            (user) => {
              this.user = user;
              this.isAdmin = user.role === 'admin';
            },
            (error) => {
              console.error('Error al obtener el usuario:', error);
            }
          );
        }
      },
      (error) => {
        console.error('Error al verificar la autenticación:', error);
      }
    );
  }

  logout() {
    this.authService.logout().subscribe(
      () => {
        // Logout exitoso
        setTimeout(() => {
          window.location.reload();
        }, 1); 
        this.router.navigate(['/login']);
      },
      (error) => {
        console.error('Error al cerrar sesión:', error);
        // Manejar el error de logout, mostrar un mensaje de error al usuario si es necesario
      }
    );
  }

}
