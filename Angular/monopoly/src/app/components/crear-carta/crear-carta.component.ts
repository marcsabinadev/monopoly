/*
  @Autores: Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera
  
  Este componente se encarga de crear nuevas cartas.
  Utiliza el servicio CartasService para realizar operaciones relacionadas con las cartas.

  En el constructor, se inicializa el formulario crearCarta utilizando el FormBuilder, definiendo los campos necesarios y las validaciones requeridas.
  También se inicializan las casillas disponibles y los tipos de cartas posibles.

  En el método submit(), se envía la solicitud para crear una nueva carta utilizando el método createCarta() del servicio CartasService.
  Una vez que se recibe la respuesta del servicio, se muestra un mensaje y se reinicia el formulario.
 
*/

import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators, FormControl } from '@angular/forms';
import { CartasService } from 'src/app/services/cartas.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-crear-carta',
  templateUrl: './crear-carta.component.html',
  styleUrls: ['./crear-carta.component.css']
})
export class CrearCartaComponent implements OnInit {

  casillas: number[] = [];
  crearCarta: FormGroup;
  mostrarMensaje: boolean = false;
  tipos: string[];

  constructor(private service: CartasService, private fb: FormBuilder, private router: Router) {
    this.crearCarta = this.fb.group({
      tipoCarta: ['', Validators.required],
      definicion: ['', [Validators.required, Validators.minLength(10)]], 
      casilla_id: ['', Validators.required],
    });

    for (let i = 1; i <= 25; i++) {
      this.casillas.push(i);
    }

    this.tipos = ["Suerte", "Caja de Comunidad"];
  }

  ngOnInit(): void {

  }

  submit(): void {
    console.log(this.crearCarta.value);
    this.service.createCarta(this.crearCarta.value).subscribe(
      response => {
        console.log(response);
        this.mostrarMensaje = true;
        this.crearCarta.reset();
      },
      error => {
        console.error('Error al crear la carta:', error);
      }
    );
  }

  isAdmin(): boolean {
    const userRol = localStorage.getItem('user_rol');
    return userRol === 'admin';
  }

  goToLogin(): void {
    this.router.navigate(['/']);
  }
}
