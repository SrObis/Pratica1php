import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { SweetAlert2Module } from '@sweetalert2/ngx-sweetalert2';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { RegistroUsuarioComponent } from './components/registro-usuario/registro-usuario.component';
import { LoginUsuarioComponent } from './components/login-usuario/login-usuario.component';
import { InterfazUsuarioComponent } from './components/interfaz-usuario/interfaz-usuario.component';
import { InterfazAdministradorComponent } from './components/interfaz-administrador/interfaz-administrador.component';

@NgModule({
  declarations: [
    AppComponent,
    RegistroUsuarioComponent,
    LoginUsuarioComponent,
    InterfazUsuarioComponent,
    InterfazAdministradorComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    ReactiveFormsModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]

  
})
export class AppModule { }
