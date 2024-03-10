/*
  @Autores: Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera

  Este componente se encarga de mostrar la clasificación de participantes.
  Utiliza el servicio ClasificacionService para obtener los datos de clasificación.

  En el método ngOnInit(), se llama al método getClasificaciones() del servicio para obtener los datos de clasificación.
  Una vez que se recibe la respuesta del servicio, los datos se asignan a la variable participantes.
*/

import { Component, OnInit } from '@angular/core';
import { ClasificacionService } from 'src/app/services/clasificacion.service';

@Component({
  selector: 'app-clasificacion',
  templateUrl: './clasificacion.component.html',
  styleUrls: ['./clasificacion.component.css']
})
export class ClasificacionComponent implements OnInit {

  participantes!: any[];
  p: number = 1;

  constructor(private service: ClasificacionService) {

  }

  ngOnInit(): void {
    this.obtenerDatos();
  }

  obtenerDatos() {
    this.service.getClasificaciones().subscribe(data => {
      this.participantes = data;
      console.log(data);
    })
  }
}
