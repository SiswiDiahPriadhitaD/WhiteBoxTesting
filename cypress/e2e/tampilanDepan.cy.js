describe('empty spec', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    cy.get('body')
    cy.get('.me-1 > .btn').click()
    cy.get('#form2Example18').type('admin1@carin.com')
    cy.get('#form2Example28').type('admin')
    cy.get('.btn').click()
    cy.get(':nth-child(3) > .sidebar-link > .mdi').click()
    cy.get('.card-body > .btn').click()
    cy.get('.form-control').type('HRV')
    cy.get('.col-sm-12').click()
    cy.get(':nth-child(4) > .sidebar-link > .mdi').click()
    cy.get('.card-body > .btn').click()
    cy.get(':nth-child(2) > div.col-md-12 > .form-control').type('PCX')
    cy.get(':nth-child(3) > div.col-md-12 > .form-control').type('2022')
    cy.get('.dropdown-menu > [href="http://127.0.0.1:8000/logout"]')
    cy.get('body')
  })
})