import { TestBed } from '@angular/core/testing';

import { CasillasService } from './casillas.service';

describe('CasillasService', () => {
  let service: CasillasService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(CasillasService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
