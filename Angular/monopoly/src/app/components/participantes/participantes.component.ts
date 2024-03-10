/*
  @Autores: Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera

  Este componente se encarga de mostrar la lista de participantes.
  Utiliza el servicio ParticipantesService para obtener la información de los participantes.

  En el método ngOnInit(), se llama al método getParticipantes() para obtener la lista de participantes al inicializar el componente.

  El método getParticipantes() hace una solicitud al servicio para obtener la lista de participantes y los asigna a la variable participantes.

  El método eliminarParticipante() se utiliza para eliminar un participante. Llama al método eliminarParticipante() del servicio y luego actualiza la lista de participantes.

  La función isAdmin() comprueba si el rol del usuario almacenado en el almacenamiento local es 'admin' y devuelve true si lo es, de lo contrario, devuelve false.
*/

import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ParticipantesService } from 'src/app/services/participantes.service';
import { AuthService } from 'src/app/services/auth.service';
@Component({
  selector: 'app-participantes',
  templateUrl: './participantes.component.html',
  styleUrls: ['./participantes.component.css']
})
export class ParticipantesComponent implements OnInit {
  participantes!: any[];


  constructor(private service: ParticipantesService, private router: Router, private authService: AuthService) { }

  ngOnInit(): void {
    this.getParticipantes();
  }

  getParticipantes(): void {
    this.service.getParticipantes().subscribe(data => {
      this.participantes = data;
    });
  }

  eliminarParticipante(id: number): void {

    if (confirm('¿Estás seguro de que quieres eliminar al participante?')) {
      this.service.eliminarParticipante(id).subscribe(() => {
        this.getParticipantes();
        console.log('Participante eliminado exitosamente');
      }, error => {
        console.error('Error al eliminar el participante', error);
      });
    }

  }

    // Verifica si el usuario es administrador
    isAdmin(): boolean {
      return this.authService.isAdmin();
    }
  
}
