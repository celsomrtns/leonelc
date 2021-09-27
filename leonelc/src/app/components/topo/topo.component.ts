import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-topo',
  templateUrl: './topo.component.html',
  styleUrls: ['./topo.component.css']
})
export class TopoComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

  anoatual = new Date().getFullYear();
  idadeleonel = ((new Date().getFullYear()) - 1979);

}
