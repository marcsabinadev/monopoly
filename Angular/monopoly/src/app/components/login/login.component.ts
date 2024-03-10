/*
  @Autores: Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera

  Este componente se encarga del proceso de inicio de sesión.
  Utiliza el servicio AuthService para autenticar al usuario.

  En el método onSubmit(), se llama al método login() del servicio AuthService para realizar la autenticación.
  Si la autenticación es exitosa, se almacena el token de acceso y los datos del usuario en el almacenamiento local,
  luego se redirige al usuario a la página principal y se refresca la página.
  Si la autenticación falla, se maneja el error y se muestra un mensaje de error.

  La función refreshPage() se utiliza para redirigir al usuario a la página principal y refrescar la página después del inicio de sesión. 
*/

import { Component } from '@angular/core';
import { AuthService } from '../../services/auth.service';
import { Router } from '@angular/router';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html'
})
export class LoginComponent {
  loginForm: FormGroup;
  email!: string;
  password!: string;
  errorMessage: string = '';

  constructor(private authService: AuthService, private router: Router, private formBuilder: FormBuilder){
    this.loginForm = this.formBuilder.group({
      email: ['', [Validators.required, Validators.pattern(/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/)]],
      password: ['', Validators.required]
    });
  }

  onSubmit() {
    if (this.loginForm.valid) {
      const { email, password } = this.loginForm.value;
      this.authService.login(email, password).subscribe(
        response => {
          localStorage.setItem('access_token', response.access_token);
          localStorage.setItem('user_name', response.user.name);
          localStorage.setItem('user_rol', response.user.rol);
          location.reload();
          this.router.navigate(['/pagina_inicio']);
        },
        error => {
          if (error.status === 401) {
            this.errorMessage = 'Correo electrónico o contraseña incorrectos';
          } else {
            this.errorMessage = 'Se produjo un error al iniciar sesión. Por favor, inténtalo de nuevo más tarde.';
          }
        }
      );
    } else {
      console.log('Formulario inválido');
    }
  }
}