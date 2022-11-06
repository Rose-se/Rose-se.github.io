import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CartComponent } from './cart/cart.component';
import { ProductListComponent } from './product-list/product-list.component';
import { ProductdetailComponent } from './productdetail/productdetail.component';

const routes: Routes = [
  { path: '', component: ProductListComponent},
  { path: 'phone/:pid', component: ProductdetailComponent},
  { path: 'cart', component:CartComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
