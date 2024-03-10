import { NgModule } from '@angular/core'; // Módulo principal de Angular
import { BrowserModule } from '@angular/platform-browser'; // Módulo para la ejecución en el navegador
import { FormsModule, ReactiveFormsModule } from '@angular/forms'; // Módulos de formularios (template-driven y reactive)
import { NgxPaginationModule } from 'ngx-pagination'; // Módulo de paginación de terceros

import { AppRoutingModule } from './app-routing.module'; // Módulo de enrutamiento

import { AppComponent } from './app.component'; // Componente principal de la aplicación
import { LoginComponent } from './components/login/login.component'; // Componente de inicio de sesión
import { RegistroComponent } from './components/registro/registro.component'; // Componente de registro de usuarios
import { IndexComponent } from './components/index/index.component'; // Componente principal de la aplicación
import { ErrorPageComponent } from './components/error-page/error-page.component'; // Componente de página de error
import { RepeatPasswordDirective } from './directives/registro/repeat-password.directive'; // Directiva personalizada para validar contraseñas
import { IntegrantesGrupoComponent } from './components/integrantes-grupo/integrantes-grupo.component'; // Componente de integrantes de grupo
import { ComoJugarComponent } from './components/como-jugar/como-jugar.component';
import { NavegacionComponent } from './components/navegacion/navegacion.component';
import { CartasEspecialesComponent } from './components/cartas-especiales/cartas-especiales.component';
import { CrearCartaComponent } from './components/crear-carta/crear-carta.component';
import { CasillasComponent } from './components/casillas/casillas.component';
import { ClasificacionComponent } from './components/clasificacion/clasificacion.component';
import { ParticipantesComponent } from './components/participantes/participantes.component';
import { CrearParticipanteComponent } from './components/crear-participante/crear-participante.component';
import { ModificarCartaComponent } from './components/modificar-carta/modificar-carta.component';
import { ModificarParticipanteComponent } from './components/modificar-participante/modificar-participante.component'; // Componente de instrucciones sobre cómo jugar

import { HttpClientModule } from '@angular/common/http';
import { CartasSuerteComponent } from './components/cartas-suerte/cartas-suerte.component';
import { CartasCofreComponent } from './components/cartas-cofre/cartas-cofre.component';
import { CasillaDetallesComponent } from './components/casilla-detalles/casilla-detalles.component';
import { CasillasColorComponent } from './components/casillas-color/casillas-color.component';
import { NgbCollapseModule } from '@ng-bootstrap/ng-bootstrap';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    RegistroComponent,
    IndexComponent,
    ErrorPageComponent,
    RepeatPasswordDirective,
    IntegrantesGrupoComponent,
    ComoJugarComponent,
    NavegacionComponent,
    CartasEspecialesComponent,
    CrearCartaComponent,
    CasillasComponent,
    ClasificacionComponent,
    ParticipantesComponent,
    CrearParticipanteComponent,
    ModificarCartaComponent,
    ModificarParticipanteComponent,
    CartasSuerteComponent,
    CartasCofreComponent,
    CasillaDetallesComponent,
    CasillasColorComponent
  ],
  imports: [
    BrowserModule, // Módulo principal del navegador
    AppRoutingModule, // Módulo de enrutamiento
    FormsModule, // Módulo de formularios del template-driven
    ReactiveFormsModule, // Módulo de formularios del reactive
    NgxPaginationModule, // Módulo de paginación de terceros
    HttpClientModule,
    NgbCollapseModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
