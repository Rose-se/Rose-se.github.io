import { EventEmitter, Injectable, OnInit } from '@angular/core';
import { toArray } from 'rxjs';
import { Product, products } from './products';
import { CartItem } from './products';


@Injectable({
  providedIn: 'root'
})

export class CartService {

  cartitems: Product[] = [];  
  cart: CartItem[] = [];
  quanity = 0;
  totalprice = 0;

  event: EventEmitter<null> = new EventEmitter();
  notifyDataChange(){
    this.event.emit();
  }
  
  constructor() { }
  


  addToCart(p: Product) { 
    let index = -1;
    index = this.cartitems.findIndex(l => l.id === p.id);
        if (index != -1){
          this.cartitems[index].quanity += 1;
        } else if(index === -1){
          this.cartitems.push(p)
        }
        this.sum();
        console.log(this.cartitems.length)
        this.notifyDataChange();
      }
      
      getCartItem() {
        return this.cartitems;
      }
      
      getCartItemCount() {
        return this.quanity;
      }
      
      getTotalprice(){
        this.notifyDataChange();
        this.sum();
        return this.totalprice
      }
      
      clearCart(){
        this.cartitems = []
        this.notifyDataChange();
        this.totalprice = 0
        this.quanity = 0
        return this.cartitems
      }

      delete(pid: any){
        let index = this.cartitems.findIndex(item => item.id === pid);
        this.cartitems.splice(index, 1);
        this.notifyDataChange();
        this.sum();
        alert('Total price: '+ this.totalprice) 
      }

      sum(): void {
        this.quanity = 0;
        this.totalprice = 0;
        if(this.cartitems){

          this.cartitems.map(
            products => {
            this.quanity += products.quanity
            this.totalprice += products.price * products.quanity
            }
            )

        }

      }

}
