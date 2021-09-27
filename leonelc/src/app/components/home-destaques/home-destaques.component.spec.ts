import { ComponentFixture, TestBed } from '@angular/core/testing';

import { HomeDestaquesComponent } from './home-destaques.component';

describe('HomeDestaquesComponent', () => {
  let component: HomeDestaquesComponent;
  let fixture: ComponentFixture<HomeDestaquesComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ HomeDestaquesComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(HomeDestaquesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
