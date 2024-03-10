import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ComoJugarComponent } from './como-jugar.component';

describe('ComoJugarComponent', () => {
  let component: ComoJugarComponent;
  let fixture: ComponentFixture<ComoJugarComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [ComoJugarComponent]
    });
    fixture = TestBed.createComponent(ComoJugarComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
