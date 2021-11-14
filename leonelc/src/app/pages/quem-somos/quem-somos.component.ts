import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-quem-somos',
  templateUrl: './quem-somos.component.html',
  styleUrls: ['./quem-somos.component.css']
})
export class QuemSomosComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

  anoatual = new Date().getFullYear();
  idadeleonel = ((new Date().getFullYear()) - 1979);

}
