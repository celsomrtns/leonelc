import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { TopoComponent } from './components/topo/topo.component';
import { HomeMainLinksComponent } from './components/home-main-links/home-main-links.component';
import { HomeDestaquesComponent } from './components/home-destaques/home-destaques.component';
import { ParceirosComponent } from './components/parceiros/parceiros.component';
import { FooterDivComponent } from './components/footer-div/footer-div.component';
import { FooterComponent } from './components/footer/footer.component';
import { AppRoutingModule } from './app-routing.module';
import { QuemSomosComponent } from './pages/quem-somos/quem-somos.component';
import { HomeComponent } from './pages/home/home.component';
import { CompraComponent } from './pages/compra/compra.component';
import { BannerHomeComponent } from './components/banner-home/banner-home.component';
import { VendaComponent } from './pages/venda/venda.component';
import { CartasComponent } from './pages/cartas/cartas.component';
import { ServicosComponent } from './pages/servicos/servicos.component';
import { ConsorcioComponent } from './pages/consorcio/consorcio.component';
import { AtendimentoComponent } from './pages/atendimento/atendimento.component';
import { FormokComponent } from './pages/formok/formok.component';
import { NgHcaptchaModule } from 'ng-hcaptcha';
import { PoliticaPrivacidadeComponent } from './pages/politica-privacidade/politica-privacidade.component';

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    TopoComponent,
    HomeMainLinksComponent,
    HomeDestaquesComponent,
    ParceirosComponent,
    FooterDivComponent,
    FooterComponent,
    QuemSomosComponent,
    HomeComponent,
    CompraComponent,
    BannerHomeComponent,
    VendaComponent,
    CartasComponent,
    ServicosComponent,
    ConsorcioComponent,
    AtendimentoComponent,
    FormokComponent,
    PoliticaPrivacidadeComponent
  ],
  imports: [
    BrowserModule,
    NgHcaptchaModule.forRoot({
      siteKey: 'a0883eeb-b5d1-4148-b55a-ee8d20d74714'
  }),
    AppRoutingModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
