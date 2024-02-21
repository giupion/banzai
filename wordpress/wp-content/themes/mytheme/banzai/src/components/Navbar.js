import React from 'react';
import { Navbar, Nav, Container,Image } from 'react-bootstrap';

const NavBar = () => {
  return (
    <Navbar bg="transparent" variant="dark" expand="lg">
      <Container>
        <Navbar.Brand href="#home"><Image
            src="/LogoKitsune.jpg
            " 
            
            width="150"  
            height="150" 
            className="d-inline-block align-top"
          /></Navbar.Brand>
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="mr-auto">
            <Nav.Link  className="text-dark" href="#home">Home</Nav.Link>
            <Nav.Link className="text-dark" href="#about">Articoli</Nav.Link>
            <Nav.Link className="text-dark" href="#services">Utenti</Nav.Link>
            <Nav.Link className="text-dark" href="#contact"></Nav.Link>
          </Nav>
        </Navbar.Collapse>
      </Container>
    </Navbar>
  );
};

export default NavBar;