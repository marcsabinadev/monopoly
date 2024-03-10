import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ModificarCartaComponent } from './modificar-carta.component';

describe('ModificarCartaComponent', () => {
  let component: ModificarCartaComponent;
  let fixture: ComponentFixture<ModificarCartaComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [ModificarCartaComponent]
    });
    fixture = TestBed.createComponent(ModificarCartaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
