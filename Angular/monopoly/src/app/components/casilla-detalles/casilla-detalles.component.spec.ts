import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CasillaDetallesComponent } from './casilla-detalles.component';

describe('CasillaDetallesComponent', () => {
  let component: CasillaDetallesComponent;
  let fixture: ComponentFixture<CasillaDetallesComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [CasillaDetallesComponent]
    });
    fixture = TestBed.createComponent(CasillaDetallesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
