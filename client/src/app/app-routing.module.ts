import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ContactComponent } from './components/contact/contact.component';
import { HomeComponent } from './components/home/home.component';
import { InfoComponent } from './components/info/info.component';
import { MapaComponent } from './components/mapa/mapa.component';
import { ProductsComponent } from './components/products/products.component';

const routes: Routes = [
    {
        path: '', component: HomeComponent
    },
    {
        path: 'home', component: HomeComponent
    },
    {
        path: 'products', component: ProductsComponent
    },
    {
        path: 'info', component: InfoComponent
    },
    {
        path: 'contacto', component: ContactComponent
    },
    {
        path: 'mapa', component: MapaComponent
    },
    {
        path: '**', component: HomeComponent
    }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
