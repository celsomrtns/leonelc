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

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    TopoComponent,
    HomeMainLinksComponent,
    HomeDestaquesComponent,
    ParceirosComponent,
    FooterDivComponent,
    FooterComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
