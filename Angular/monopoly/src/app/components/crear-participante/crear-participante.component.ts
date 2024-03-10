/*
  @Autores: Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera

  Este componente se encarga de crear nuevos participantes.
  Utiliza el servicio ParticipantesService para realizar operaciones relacionadas con los participantes.

  En el constructor, se inicializa el formulario crearParticipante utilizando el FormBuilder, definiendo el campo necesario y las validaciones requeridas.

  En el método ngOnInit(), se obtienen los participantes existentes llamando al método getParticipantes() del servicio ParticipantesService.

  En el método submit(), se envía la solicitud para crear un nuevo participante utilizando el método createParticipante() del servicio ParticipantesService.
  Una vez que se recibe la respuesta del servicio, se muestra un mensaje y se reinicia el formulario.
*/

import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { ParticipantesService } from 'src/app/services/participantes.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-crear-participante',
  templateUrl: './crear-participante.component.html',
  styleUrls: ['./crear-participante.component.css']
})
export class CrearParticipanteComponent implements OnInit {
  participantes: any[] = [];
  crearParticipante: FormGroup;
  mostrarMensaje: boolean = false;

  constructor(private service: ParticipantesService, private fb: FormBuilder, private router: Router) {
    this.crearParticipante = this.fb.group({
      nomUsuario: ['', [Validators.required, Validators.pattern('[a-zA-Z0-9]*'), Validators.minLength(3), Validators.maxLength(20)]]
    });
  }

  ngOnInit(): void {
    this.service.getParticipantes().subscribe(data => {
      this.participantes = data;
    });
  }

  submit(): void {
    this.service.createParticipante(this.crearParticipante.value).subscribe(response => {
      console.log(response);
      // Mostrar el mensaje si la solicitud se completó con éxito
      this.mostrarMensaje = true;
      // Limpiar el formulario después de agregar el participante
      this.crearParticipante.reset();
    });
  }

  isAdmin(): boolean {
    const userRol = localStorage.getItem('user_rol');
    return userRol === 'admin';
  }

  goToLogin(): void {
    this.router.navigate(['/']);
  }
}
