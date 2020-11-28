import React from 'react';
import {Container, Row, Col} from 'reactstrap';
import '../css/garantias.css';
import truck from '../imagens/delivery-truck.svg';
import card from '../imagens/credit-card.svg';
import assistance from '../imagens/24-hours-support.svg';

export default function Garantias(){
  return (
    <Container fluid={true} className="garantias">
      <Row>
        <Col lg="4" md="6" sm="6">
          <img src={truck} alt="Entrega rápida" width="80px"/>
          <h4>Entrega rápida</h4>
          <p class="textos-garantias">
            Lorem ipsum dolor sit amet.
          </p>                     
        </Col>
        <Col lg="4" md="6" sm="6">
          <img src={card} alt="Formas de Pagamento" width="80px"/>
          <h4>Aceitamos todos os Cartões</h4>
          <p class="textos-garantias">
            Lorem ipsum dolor sit amet.
          </p>    
        </Col>
        <Col lg="4" md="6" sm="6">
          <img src={assistance} alt="Suporte ao cliente" width="80px"/>
          <h4>Suporte 24 horas, 7 dias</h4>
          <p class="textos-garantias">
            Lorem ipsum dolor sit amet.
          </p>    
        </Col>
      </Row>
    </Container>
  );
}