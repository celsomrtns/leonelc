import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FormokComponent } from './formok.component';

describe('FormokComponent', () => {
  let component: FormokComponent;
  let fixture: ComponentFixture<FormokComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FormokComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(FormokComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
