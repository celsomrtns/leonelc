import { Component, OnInit } from '@angular/core';


@Component({
  selector: 'app-atendimento',
  templateUrl: './atendimento.component.html',
  styleUrls: ['./atendimento.component.css']
})
export class AtendimentoComponent implements OnInit {

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
