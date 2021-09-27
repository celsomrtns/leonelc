import { ComponentFixture, TestBed } from '@angular/core/testing';

import { HomeMainLinksComponent } from './home-main-links.component';

describe('HomeMainLinksComponent', () => {
  let component: HomeMainLinksComponent;
  let fixture: ComponentFixture<HomeMainLinksComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ HomeMainLinksComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(HomeMainLinksComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
