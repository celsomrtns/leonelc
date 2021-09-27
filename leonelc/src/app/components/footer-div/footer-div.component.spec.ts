import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FooterDivComponent } from './footer-div.component';

describe('FooterDivComponent', () => {
  let component: FooterDivComponent;
  let fixture: ComponentFixture<FooterDivComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FooterDivComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(FooterDivComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
