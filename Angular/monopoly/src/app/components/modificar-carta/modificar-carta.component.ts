/*
  @Autores: Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera

  Este componente se encarga de modificar una carta existente.
  Utiliza el servicio CartasService para realizar operaciones relacionadas con las cartas.

  En el constructor, se inicializa el formulario modificarCarta utilizando el FormBuilder, definiendo los campos necesarios y las validaciones requeridas.
  También se inicializan los tipos de cartas posibles.

  En el método ngOnInit(), se obtiene el ID de la carta a modificar de los parámetros de la ruta activa.

  En el método submit(), se envía la solicitud para modificar la carta utilizando el método modificarCarta() del servicio CartasService.
  Una vez que se recibe la respuesta del servicio, se muestra un mensaje y se reinicia el formulario.

*/

import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute } from '@angular/router';
import { CartasService } from 'src/app/services/cartas.service';

@Component({
  selector: 'app-modificar-carta',
  templateUrl: './modificar-carta.component.html',
  styleUrls: ['./modificar-carta.component.css']
})
export class ModificarCartaComponent implements OnInit {

  mostrarMensaje: boolean = false;
  tipos: string[];

  modificarCarta: FormGroup;
  cartaId!: number;

  constructor(private cartasService: CartasService, private fb: FormBuilder, private route: ActivatedRoute) {
    this.modificarCarta = this.fb.group({
      tipoCarta: ['', Validators.required],
      definicion: ['', [Validators.required, Validators.minLength(10)]],
    })

    this.tipos = ["Suerte", "Caja de Comunidad"];
  }

  ngOnInit(): void {
    this.route.params.subscribe(params => {
      console.log(params); // Agrega esta línea para depurar
      this.cartaId = +params['id'];
    });
  }

  submit(carta: any, id: number): void {

    const cartaId = Number(id);

    console.log("id --> " + cartaId);

    if (isNaN(cartaId)) {
      console.error('ID no es un número válido:', id);
      return;
    }

    console.log(this.modificarCarta.value);
    this.cartasService.modificarCarta(this.modificarCarta.value, cartaId).subscribe(
      response => {
        console.log(response);
        this.mostrarMensaje = true;
        this.modificarCarta.reset();
      },
      error => {
        console.error('Error al modificar la carta:', error);
      }
    );
  }
}
