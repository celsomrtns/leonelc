import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { QuemSomosComponent } from './pages/quem-somos/quem-somos.component';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './pages/home/home.component';
import { CompraComponent } from './pages/compra/compra.component';
import { VendaComponent } from './pages/venda/venda.component';
import { CartasComponent } from './pages/cartas/cartas.component';
import { ServicosComponent } from './pages/servicos/servicos.component';
import { ConsorcioComponent } from './pages/consorcio/consorcio.component';
import { AtendimentoComponent } from './pages/atendimento/atendimento.component';
import { FormokComponent } from './pages/formok/formok.component';

const routes: Routes = [
  { path: '', component: HomeComponent }, 
	{ path: 'quem-somos', component: QuemSomosComponent },
  { path: 'compra', component: CompraComponent },
  { path: 'venda', component: VendaComponent },
  { path: 'cartas', component: CartasComponent },
  { path: 'servicos', component: ServicosComponent },
  { path: 'consorcio', component: ConsorcioComponent },
  { path: 'atendimento', component: AtendimentoComponent },
  { path: 'formok', component: FormokComponent }
];


@NgModule({
  exports: [RouterModule],
  imports: [
		RouterModule.forRoot(routes),
    CommonModule
	],
  declarations: []
})
export class AppRoutingModule { }
