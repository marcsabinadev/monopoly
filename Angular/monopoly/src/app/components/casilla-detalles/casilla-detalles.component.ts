/*
@authors Julia Prieto, Marc Sabina, Alejandra Paz, Angel Rivera
  Este componente se encarga de mostrar los detalles de una casilla.
  Utiliza el servicio CasillasService para obtener los detalles de la casilla a través de su ID,
  que se obtiene de la ruta activada.
  
  En el método ngOnInit(), se obtiene el ID de la casilla de la ruta activada y luego se llama
  al método getCasillasDetalles() del servicio para obtener los detalles de esa casilla en particular.
  Una vez que se recibe la respuesta del servicio, los detalles se asignan a la variable casillas,
  que luego se utiliza en el HTML para mostrar la información correspondiente.
*/
import { Component, OnInit } from '@angular/core';
import { CasillasService } from 'src/app/services/casillas.service';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-casilla-detalles',
  templateUrl: './casilla-detalles.component.html',
  styleUrls: ['./casilla-detalles.component.css']
})
export class CasillaDetallesComponent implements OnInit {
  casillas: any[] = [];

  constructor(private service: CasillasService, private route: ActivatedRoute) { }

  ngOnInit(): void {
    const id = Number(this.route.snapshot.paramMap.get('id'));

    this.service.getCasillasDetalles(id).subscribe(data => {
      this.casillas = [data];
      console.log(data);
    });
  }

}
