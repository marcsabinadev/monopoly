import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CasillasComponent } from './casillas.component';

describe('CasillasComponent', () => {
  let component: CasillasComponent;
  let fixture: ComponentFixture<CasillasComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [CasillasComponent]
    });
    fixture = TestBed.createComponent(CasillasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
