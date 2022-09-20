import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.css']
})
export class FooterComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

  closeMenu() {
    $("#mobbtnmenu").attr("aria-expanded", "false").addClass("collapsed");
    $("#navbarSupportedContent").removeClass("show");
    $("html, body").animate({ scrollTop: 0 }, "slow");
  }

  anoatual = new Date().getFullYear();
  idadeleonel = ((new Date().getFullYear()) - 1979);

}
