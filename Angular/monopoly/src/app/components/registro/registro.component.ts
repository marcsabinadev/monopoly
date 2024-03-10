/*
  @authors Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera

  Este componente se encarga del proceso de registro de nuevos usuarios.
  Utiliza el servicio AuthService para realizar la operación de registro.

  En el método onSubmit(), se llama al método register() del servicio AuthService para registrar un nuevo usuario.
  Si el registro es exitoso, se almacena el token de acceso en el almacenamiento local.
  Se debería implementar la redirección del usuario a la página principal o a la página protegida según el diseño de la aplicación.
  En caso de error durante el registro, se debería manejar el error adecuadamente.
*/

import { Component } from '@angular/core';
import { AuthService } from '../../services/auth.service';
import { Router } from '@angular/router';
import { FormBuilder, FormGroup, Validators, AbstractControl, ValidatorFn  } from '@angular/forms';
@Component({
  selector: 'app-register',
  templateUrl: './registro.component.html'
})
export class RegistroComponent {
  name: string = '';
  age: number = 0;
  email: string = '';
  password: string = '';
  passwordConfirmation: string = '';
  RegistroForm: FormGroup;

  errorMessage: string = '';

  constructor(private authService: AuthService, private router: Router, private formBuilder: FormBuilder) {
      this.RegistroForm = this.formBuilder.group({
        name: ['', [Validators.required, Validators.maxLength(50)]],
        age: ['', [Validators.required, Validators.min(6)]],
        email: ['', [Validators.required, Validators.maxLength(150), Validators.pattern(/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/)]],
        password: ['', [Validators.required, Validators.minLength(6)]],
        passwordConfirmation: ['', Validators.required]
      });

    }


  onSubmit() {

    if(this.RegistroForm.valid){
      const {name, age, email, password, passwordConfirmation} = this.RegistroForm.value;
      this.authService.register(name, age, email, password, passwordConfirmation).subscribe(
        (response) => {
                // Almacenar el token de acceso en el almacenamiento local
                localStorage.setItem('access_token', response.access_token);
                // Redirigir al usuario a la página principal
                setTimeout(() => {
                  window.location.reload();
                  
                }, 1); // Cambia el valor de tiempo según sea necesario
                this.router.navigate(['/pagina_inicio']);
              },
              (error) => {
                // Manejar el error de registro
                if (error.status ===422) {
                  this.errorMessage = 'Se produjo un error al registrar. Por favor, inténtalo de nuevo más tarde.';
                } else {
                  this.errorMessage = 'Se produjo un error al registrar. Por favor, inténtalo de nuevo más tarde.';
                }

              }
            );
    }
  
  }




}
