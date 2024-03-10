/*
  @Autores: Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera

  Este componente se encarga de mostrar las casillas de un color específico.
  Utiliza el servicio CasillasService para obtener las casillas según el color especificado.

  En el método ngOnInit(), se suscribe a los parámetros de la ruta para obtener el color especificado.
  Luego, llama al método getCasillasByColor() para obtener las casillas del color correspondiente.

  El método getCasillasByColor() hace una solicitud al servicio para obtener las casillas del color especificado y las asigna a la variable casillas.

  La función getImageUrl() se utiliza para obtener la URL de la imagen de una casilla en particular, utilizando el color y el número de casilla para construir la ruta.

  La función quitarAcentos() elimina los acentos de una cadena dada.

*/
import { Component, OnInit } from '@angular/core';
import { CasillasService } from 'src/app/services/casillas.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-casillas-color',
  templateUrl: './casillas-color.component.html',
  styleUrls: ['./casillas-color.component.css']
})
export class CasillasColorComponent implements OnInit {
  casillas!: any[];
  color!: string;

  constructor(private casillasService: CasillasService, private route: ActivatedRoute) { }

  ngOnInit(): void {
    this.route.params.subscribe(params => {
      this.color = params['color'];
      this.getCasillasByColor();
    });
  }

  getCasillasByColor(): void {
    this.casillasService.getCasillasByColor(this.color)
      .subscribe(data => {
        this.casillas = data;
      });
  }

  getImageUrl(color: string, numero: number): string {
    const colorSinAcentos = this.quitarAcentos(color.toLowerCase());
    return `assets/img/casillas/${colorSinAcentos}/${colorSinAcentos}_${numero}.jpg`;
  }

  quitarAcentos(cadena: string): string {
    return cadena.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
  }

}
