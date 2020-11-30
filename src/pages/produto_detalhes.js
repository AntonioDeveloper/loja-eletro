import React from 'react';
import {Row, Col} from 'reactstrap';
import CardDetalhes from '../components/ProdutoDetalhes/Card_Detalhes';
import Carrossel from '../components/ProdutoDetalhes/Carrossel';

export default function ProdutoDetalhes(props){

  return(
    
      <Row>
        <Col lg="6" md="6">
          <Carrossel />
        </Col>
        <Col lg="6" md="6">
          <CardDetalhes nome={props.nome}/>
        </Col>
      </Row>
    
  );
}