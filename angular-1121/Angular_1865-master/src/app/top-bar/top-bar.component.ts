import { Component, OnInit } from '@angular/core';
import { CartService } from '../cart.service';
import { Subscription } from 'rxjs';

@Component({
  selector: 'app-top-bar',
  templateUrl: './top-bar.component.html',
  styleUrls: ['./top-bar.component.css']
})
export class TopBarComponent implements OnInit {

  notifireSubscription: Subscription = this.cartservice.event.subscribe(notified => {
    this.cartCount = this.cartservice.getCartItemCount();
  });
  cartCount = 0;
  constructor(private cartservice: CartService) { }

  ngOnInit(): void {
  }

  ngOnDestroy(){
    this.notifireSubscription.unsubscribe();
  }
  
}
