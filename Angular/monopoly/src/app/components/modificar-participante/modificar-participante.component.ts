/*
  @authors Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera

  Este componente se encarga de modificar un participante existente.
  Utiliza el servicio ParticipantesService para realizar operaciones relacionadas con los participantes.

  En el constructor, se inicializa el formulario modificarParticipante utilizando el FormBuilder, definiendo el campo necesario y las validaciones requeridas.

  En el método ngOnInit(), se obtiene el ID del participante a modificar de los parámetros de la ruta activa.

  En el método submit(), se envía la solicitud para modificar el participante utilizando el método update() del servicio ParticipantesService.
  Una vez que se recibe la respuesta del servicio, se muestra un mensaje y se reinicia el formulario.

*/

import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute } from '@angular/router';
import { ParticipantesService } from 'src/app/services/participantes.service';


@Component({
  selector: 'app-modificar-participante',
  templateUrl: './modificar-participante.component.html',
  styleUrls: ['./modificar-participante.component.css']
})
export class ModificarParticipanteComponent implements OnInit {

  mostrarMensaje: boolean = false;
  modificarParticipante: FormGroup;
  participanteId!: number;

  constructor(private service: ParticipantesService, private fb: FormBuilder, private route: ActivatedRoute) {

    this.modificarParticipante = this.fb.group({
      nomUsuario: ['', [Validators.required, Validators.pattern('^[a-zA-Z0-9]*$'), Validators.minLength(3), Validators.maxLength(20)]]
    })

  }

  ngOnInit(): void {
    this.route.params.subscribe(params => {
      console.log(params); // Agrega esta línea para depurar
      this.participanteId = +params['id'];
    });
  }

  submit(participante: any, id: number): void {

    const participanteId = Number(id);

    console.log("id --> " + participanteId);

    if (isNaN(participanteId)) {
      console.error('ID no es un número válido:', id);
      return;
    }

    console.log(this.modificarParticipante.value);
    this.service.update(this.modificarParticipante.value, participanteId).subscribe(
      response => {
        console.log(response);
        this.mostrarMensaje = true;
        this.modificarParticipante.reset();
      },
      error => {
        console.error('Error al modificar al participante:', error);
      }
    );
  }
}
