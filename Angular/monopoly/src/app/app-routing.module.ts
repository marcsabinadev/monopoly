
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { IndexComponent } from './components/index/index.component';
import { LoginComponent } from './components/login/login.component';
import { RegistroComponent } from './components/registro/registro.component';
import { ErrorPageComponent } from './components/error-page/error-page.component';
import { IntegrantesGrupoComponent } from './components/integrantes-grupo/integrantes-grupo.component';
import { ComoJugarComponent } from './components/como-jugar/como-jugar.component';
import { CartasEspecialesComponent } from './components/cartas-especiales/cartas-especiales.component';
import { CrearCartaComponent } from './components/crear-carta/crear-carta.component';
import { CasillasComponent } from './components/casillas/casillas.component';
import { ClasificacionComponent } from './components/clasificacion/clasificacion.component';
import { ParticipantesComponent } from './components/participantes/participantes.component';
import { CrearParticipanteComponent } from './components/crear-participante/crear-participante.component';
import { CartasSuerteComponent } from './components/cartas-suerte/cartas-suerte.component';
import { CartasCofreComponent } from './components/cartas-cofre/cartas-cofre.component';
import { CasillaDetallesComponent } from './components/casilla-detalles/casilla-detalles.component';
import { CasillasColorComponent } from './components/casillas-color/casillas-color.component';
import { ModificarParticipanteComponent } from './components/modificar-participante/modificar-participante.component';
import { ModificarCartaComponent } from './components/modificar-carta/modificar-carta.component';
import { AuthGuard } from './guard/auth.guard';
import { AdminGuard } from './guard/admin.guard';

const routes: Routes = [
  {
    path: 'pagina_inicio', component: IndexComponent
  }, // Página Inicio
  { path: 'login', component: LoginComponent },  //Pagina Login
  { path: 'registro', component: RegistroComponent }, // Página de Registro
  { path: 'integrantes_grupo', component: IntegrantesGrupoComponent }, // Página de información de los integrantes de los grupos
  {
    path: 'como_jugar', component: ComoJugarComponent,
    canActivate: [AuthGuard]
  }, // Página que explica como se juega al juego
  {
    path: 'cartasEspeciales', component: CartasEspecialesComponent,
    canActivate: [AuthGuard]
  },//URL de la pagina cartasEspeciales
  {
    path: 'crearCarta', component: CrearCartaComponent,
    canActivate: [AuthGuard, AdminGuard]
  },//
  {
    path: 'actualizarCarta/:id', component: ModificarCartaComponent,
    canActivate: [AuthGuard, AdminGuard]
  },//
  {
    path: 'casillas', component: CasillasComponent,
    canActivate: [AuthGuard]
  },
  {
    path: 'clasificacion', component: ClasificacionComponent,
    canActivate: [AuthGuard]
  },
  {
    path: 'participantes', component: ParticipantesComponent,
    canActivate: [AuthGuard]
  },
  {
    path: 'crearParticipantes', component: CrearParticipanteComponent,
    canActivate: [AuthGuard, AdminGuard]
  },
  {
    path: 'cartaSuerte', component: CartasSuerteComponent,
    canActivate: [AuthGuard]
  },
  {
    path: 'cartaCofre', component: CartasCofreComponent,
    canActivate: [AuthGuard]
  },
  {
    path: 'casillaDetalles/:id', component: CasillaDetallesComponent,
    canActivate: [AuthGuard]
  },
  {
    path: 'casillaColor', component: CasillasColorComponent,
    canActivate: [AuthGuard]
  },
  {
    path: 'actualizarParticipante/:id', component: ModificarParticipanteComponent,
    canActivate: [AuthGuard, AdminGuard]
  },
  { path: '', redirectTo: '/pagina_inicio', pathMatch: 'full' }, // Página que se carga primero

  { path: '**', component: ErrorPageComponent }, // URL incorrecta
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
