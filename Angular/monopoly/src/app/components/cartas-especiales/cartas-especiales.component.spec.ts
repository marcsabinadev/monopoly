import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CartasEspecialesComponent } from './cartas-especiales.component';

describe('CartasEspecialesComponent', () => {
  let component: CartasEspecialesComponent;
  let fixture: ComponentFixture<CartasEspecialesComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [CartasEspecialesComponent]
    });
    fixture = TestBed.createComponent(CartasEspecialesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
