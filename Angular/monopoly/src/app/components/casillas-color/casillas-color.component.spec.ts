import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CasillasColorComponent } from './casillas-color.component';

describe('CasillasColorComponent', () => {
  let component: CasillasColorComponent;
  let fixture: ComponentFixture<CasillasColorComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [CasillasColorComponent]
    });
    fixture = TestBed.createComponent(CasillasColorComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
