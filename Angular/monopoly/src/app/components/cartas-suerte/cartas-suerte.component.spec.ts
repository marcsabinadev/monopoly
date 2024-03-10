import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CartasSuerteComponent } from './cartas-suerte.component';

describe('CartasSuerteComponent', () => {
  let component: CartasSuerteComponent;
  let fixture: ComponentFixture<CartasSuerteComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [CartasSuerteComponent]
    });
    fixture = TestBed.createComponent(CartasSuerteComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
