/**  @authors Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera
 Componente cartas suerte,
  
 Este componente se encarga de manejar las cartas de suerte.
  Utiliza el servicio CartasService para realizar operaciones relacionadas con las cartas de suerte.

  En el método ngOnInit(), se llama al método actualizarCartasSuerte() para obtener y actualizar la lista de cartas de suerte.

  El método actualizarCartasSuerte() hace una solicitud al servicio para obtener todas las cartas de suerte y las asigna a la variable cartasSuerte.

  El método eliminarCartaSuerte() se utiliza para eliminar una carta de suerte. Muestra un mensaje de confirmación y, si el usuario confirma,
  llama al servicio para eliminar la carta y luego actualiza la lista de cartas de suerte.

  La función isAdmin() comprueba si el rol del usuario almacenado en el almacenamiento local es 'admin' y devuelve true si lo es, de lo contrario, devuelve false.
 */
import { Component, OnInit } from '@angular/core';
import { CartasService } from 'src/app/services/cartas.service';
import { AuthService } from 'src/app/services/auth.service';
@Component({
  selector: 'app-cartas-suerte',
  templateUrl: './cartas-suerte.component.html',
  styleUrls: ['./cartas-suerte.component.css']
})
export class CartasSuerteComponent implements OnInit {
  cartasSuerte!: any[];

  constructor(private service: CartasService, private authService: AuthService) { }

  ngOnInit(): void {
    this.actualizarCartasSuerte();
  }

  // Obtener todas las cartas de suerte
  actualizarCartasSuerte(): void {
    this.service.indexSuerte().subscribe(data => {
      this.cartasSuerte = data;
    });
  }

  // Método para eliminar una carta de suerte
  eliminarCartaSuerte(id: number): void {
    if (confirm('¿Estás seguro de que quieres eliminar esta carta de suerte?')) {
      this.service.eliminarCarta(id).subscribe(() => {
        this.actualizarCartasSuerte();
      });
    }
  }

   // Verifica si el usuario es administrador
   isAdmin(): boolean {
    return this.authService.isAdmin();
  }

}
