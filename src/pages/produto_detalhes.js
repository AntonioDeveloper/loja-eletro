import React from 'react';
import {Col} from 'reactstrap';
import CardDetalhes from '../components/ProdutoDetalhes/Card_Detalhes';
import Carrossel from '../components/ProdutoDetalhes/Carrossel';
import '../css/produto-detalhes.css';

export default function ProdutoDetalhes(props){
 
  //console.log(props.imagem4);

  return(
    
      <>
        <Col sm="12" md="6" className="py-5">
          <Carrossel imagem1={props.imagem1} imagem2={props.imagem2} 
          imagem3={props.imagem3} imagem4={props.imagem4}
          />
        </Col>
        <Col sm="12" md="6" className="py-5">
          <CardDetalhes id={props.id} nome={props.nome} preco={props.preco} texto={props.texto}/>
        </Col>
      </>
    
  );
}