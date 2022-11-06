import { Component, OnInit } from '@angular/core';
import { CartService } from '../cart.service';
import { ProductListComponent } from '../product-list/product-list.component';

@Component({
  selector: 'app-cart',
  templateUrl: './cart.component.html',
  styleUrls: ['./cart.component.css']
})

export class CartComponent implements OnInit {
  items = this.cartService.getCartItem();
  IteminCart = this.cartService.getCartItemCount();
  totalprice = this.cartService.getTotalprice();
  

  clear(pid: any){
    this.cartService.delete(pid);
    this.IteminCart = this.cartService.getCartItemCount();
    this.totalprice = this.cartService.getTotalprice();
  }

  deleteCart(){
    this.items = []
    this.cartService.clearCart()
  }
  
 
  
  constructor(private cartService: CartService) { }

  ngOnInit(): void {
  }

}
