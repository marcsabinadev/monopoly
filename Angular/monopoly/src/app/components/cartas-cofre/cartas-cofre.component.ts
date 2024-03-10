/**  @authors Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera
 Componente Cofre,
 Ejecuta la acciones CRUD en angular que las envia al servicio correspondiente.*/

import { Component, OnInit } from '@angular/core';
import { CartasService } from 'src/app/services/cartas.service';
import { AuthService } from 'src/app/services/auth.service';

@Component({
  selector: 'app-cartas-cofre',
  templateUrl: './cartas-cofre.component.html',
  styleUrls: ['./cartas-cofre.component.css']
})
export class CartasCofreComponent implements OnInit {
  cartasCofre: any[] = [];
  nuevaCarta: any = {};
  cartaModificada: any = {};

  constructor(private service: CartasService, private authService: AuthService) { }

  ngOnInit(): void {
    this.actualizarListaCartasCofre();
  }

  // Obtener todas las cartas del cofre
  actualizarListaCartasCofre(): void {
    this.service.indexCofre().subscribe(data => {
      this.cartasCofre = data;
    });
  }

  // Crear una nueva carta en el cofre
  crearCartaCofre(): void {
    this.service.createCartaCofre(this.nuevaCarta).subscribe(() => {
      this.actualizarListaCartasCofre();
    });
  }

  // Método para eliminar una carta
  eliminarCarta(id: number): void {
    if (confirm('¿Estás seguro de que quieres eliminar esta carta?')) {
      this.service.eliminarCarta(id).subscribe(() => {
        this.actualizarListaCartasCofre();
      });
    }
  }

  // Verifica si el usuario es administrador
  isAdmin(): boolean {
    return this.authService.isAdmin();
  }

}
