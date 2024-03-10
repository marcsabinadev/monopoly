import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CrearCartaComponent } from './crear-carta.component';

describe('CrearCartaComponent', () => {
  let component: CrearCartaComponent;
  let fixture: ComponentFixture<CrearCartaComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [CrearCartaComponent]
    });
    fixture = TestBed.createComponent(CrearCartaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
