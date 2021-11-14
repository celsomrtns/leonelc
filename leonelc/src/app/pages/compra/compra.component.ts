import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-compra',
  templateUrl: './compra.component.html',
  styleUrls: ['./compra.component.css']
})
export class CompraComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

  onVerify(token: string) {
    // The verification process was successful.
    // You can verify the token on your server now.
  }

  onExpired(response: any) {
      // The verification expired.
  }

  onError(error: any) {
      // An error occured during the verification process.
  }

}
