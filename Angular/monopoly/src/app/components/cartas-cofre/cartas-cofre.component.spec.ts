import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CartasCofreComponent } from './cartas-cofre.component';

describe('CartasCofreComponent', () => {
  let component: CartasCofreComponent;
  let fixture: ComponentFixture<CartasCofreComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [CartasCofreComponent]
    });
    fixture = TestBed.createComponent(CartasCofreComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
