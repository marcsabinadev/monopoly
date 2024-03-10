import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ModificarParticipanteComponent } from './modificar-participante.component';

describe('ModificarParticipanteComponent', () => {
  let component: ModificarParticipanteComponent;
  let fixture: ComponentFixture<ModificarParticipanteComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [ModificarParticipanteComponent]
    });
    fixture = TestBed.createComponent(ModificarParticipanteComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
