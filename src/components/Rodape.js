import React from 'react';
import {Container, Row, Col} from 'reactstrap';
import '../css/rodape.css';
import logo from '../imagens/logo.gif';

export default function Rodape(){
  return (
    <Container fluid={true} className="rodape">
      <Row>
        <Col lg="4" md="6" sm="6">
          <img src={logo} alt="Logo" width="80px"/>                  
        </Col>
        <Col lg="4" md="6" sm="6">
          <div>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Id, dolor! Repellat, error in nisi fugiat minima quidem 
              ratione perspiciatis iste, libero sapiente saepe atque quo 
              cum numquam, sit incidunt quibusdam?
          </div> 
        </Col>
        <Col lg="4" md="6" sm="6">
          <div>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Id, dolor! Repellat, error in nisi fugiat minima quidem 
              ratione perspiciatis iste, libero sapiente saepe atque quo 
              cum numquam, sit incidunt quibusdam?
          </div>   
        </Col>
      </Row>
    </Container>
  );
}