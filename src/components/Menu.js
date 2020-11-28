import React, { useState } from 'react';
import logo from '../imagens/logo.gif'
import '../css/menu.css';
import {Link, withRouter} from 'react-router-dom';
import { Collapse,
  Navbar,
  NavbarToggler,
  NavbarBrand,
  Nav,
  NavItem,
  NavLink
  } from 'reactstrap';

  function BaseMenu(props){
    const {location} = props;
    const [isOpen, setIsOpen] = useState(false);
  
    const toggle = () => setIsOpen(!isOpen);
  
    return (
      <div>
        <Navbar className="menu" color="light" light expand="md">
          <NavbarBrand href="home.js"><img src={logo} alt="Logo" width="100px"/></NavbarBrand>
          <NavbarToggler onClick={toggle} />
          <Collapse isOpen={isOpen} navbar>
            <Nav activeKey={location.pathname} className="mr-auto" navbar>
              <NavItem>
                <NavLink as={Link} href="home.js">Home</NavLink>
              </NavItem>
              <NavItem>
                <NavLink as={Link} href="produtos.js">Produtos</NavLink>
              </NavItem>
              <NavItem>
                <NavLink as={Link} href="lojas.js">Nossas Lojas</NavLink>
              </NavItem>
              
              <NavItem>
                <NavLink as={Link} href="contato.js">Contato</NavLink>
              </NavItem>
              
              <NavItem>
                <NavLink as={Link} href="cadastro.js">Cadastro</NavLink>
              </NavItem>
              
              <NavItem>
                <NavLink as={Link} href="consultas.js">Consultas Gerais</NavLink>
              </NavItem>
            </Nav>           
          </Collapse>
        </Navbar>
      </div>
    );
  }
  
  const Menu = withRouter(BaseMenu);

  export default Menu;

  