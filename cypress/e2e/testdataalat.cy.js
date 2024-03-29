describe('testing alat', () => {
    it('login', () => {
      cy.visit('http://127.0.0.1:8000/login')
      cy.get(':nth-child(2) > .form-control').type('admin@admin.com')
      cy.get(':nth-child(3) > .form-control').type('admin123')
      cy.get('.btn').click()
      cy.visit('http://127.0.0.1:8000/homeAdmin')
    })
    it('create data', () => {
        cy.visit('http://127.0.0.1:8000/login')
        cy.get(':nth-child(2) > .form-control').type('admin@admin.com')
        cy.get(':nth-child(3) > .form-control').type('admin123')
        cy.get('.btn').click()
        cy.visit('http://127.0.0.1:8000/homeAdmin')
        cy.visit('http://127.0.0.1:8000/dataAlat')
        cy.get('[href="http://127.0.0.1:8000/createAlat"]').click()
        cy.get(':nth-child(3) > .form-control').type('cobatest')
        cy.get(':nth-child(5) > .form-control').type('cobatest')
        cy.get('.form-row > .form-group > .form-control').type(3)
        cy.get('.float-right > .btn').click()
      })
    it('read', () => {
        cy.visit('http://127.0.0.1:8000/login')
        cy.get(':nth-child(2) > .form-control').type('admin@admin.com')
        cy.get(':nth-child(3) > .form-control').type('admin123')
        cy.get('.btn').click()
        cy.visit('http://127.0.0.1:8000/homeAdmin')
        cy.visit('http://127.0.0.1:8000/dataAlat')
        cy.get('h2').contains('Alat Management')
    })
    it('update', () => {
        cy.visit('http://127.0.0.1:8000/login')
        cy.get(':nth-child(2) > .form-control').type('admin@admin.com')
        cy.get(':nth-child(3) > .form-control').type('admin123')
        cy.get('.btn').click()
        cy.visit('http://127.0.0.1:8000/homeAdmin')
        cy.visit('http://127.0.0.1:8000/dataAlat')
        cy.get(':nth-child(2) > tr > :nth-child(8) > .btn-warning').click()
        cy.get(':nth-child(2) > .form-group > .form-control').type('cobaupdate')
        cy.get(':nth-child(3) > .form-group > .form-control').type('cobaupdate')
        cy.get(':nth-child(4) > .form-group > .form-control').type(5)
        cy.get('.row > .btn').click()
    })
    it('delete', () => {
        cy.visit('http://127.0.0.1:8000/login')
        cy.get(':nth-child(2) > .form-control').type('admin@admin.com')
        cy.get(':nth-child(3) > .form-control').type('admin123')
        cy.get('.btn').click()
        cy.visit('http://127.0.0.1:8000/homeAdmin')
        cy.visit('http://127.0.0.1:8000/dataAlat')
        cy.get(':nth-child(2) > tr > :nth-child(8) > .btn-danger').click()
    })
  })