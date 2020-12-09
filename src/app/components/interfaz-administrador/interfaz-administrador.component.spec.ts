import { ComponentFixture, TestBed } from '@angular/core/testing';

import { InterfazAdministradorComponent } from './interfaz-administrador.component';

describe('InterfazAdministradorComponent', () => {
  let component: InterfazAdministradorComponent;
  let fixture: ComponentFixture<InterfazAdministradorComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ InterfazAdministradorComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(InterfazAdministradorComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
