import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IntegrantesGrupoComponent } from './integrantes-grupo.component';

describe('IntegrantesGrupoComponent', () => {
  let component: IntegrantesGrupoComponent;
  let fixture: ComponentFixture<IntegrantesGrupoComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [IntegrantesGrupoComponent]
    });
    fixture = TestBed.createComponent(IntegrantesGrupoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
