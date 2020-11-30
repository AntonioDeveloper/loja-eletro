import React, { useState } from 'react';
import {Row, Col} from 'reactstrap';
import CardDetalhes from '../ProdutoDetalhes/Card_Detalhes';
import Carrossel from '../ProdutoDetalhes/Carrossel';

export default function MoldeProduto(props){  
 const [prodUnit, setProdUnit] = useState({});  
  
  //console.log(produto);

  function produtoAtual(){
      
      setProdUnit({
        id: props.id,
        imagem: props.imagem,
        nome: props.nome,
        preco: props.preco
      });
      //console.log(prodUnit);
      //return prodUnit;
      props.escolherProd(prodUnit);
    

  }
  
 return (
    <>
   
     <div className="col-lg-3 col-md-3 col-sm-6 mt-4 mb-4">
     <img src={require(`../../imagens/${props.imagem}`).default} alt="Foto do Produto" />
     <br />
     <p> 
       {props.nome}
     </p>
     <hr />
     <strike>R$ 6.389,00</strike><br />
     <p>
        R$ {props.preco}
     </p>
     <br />
     <button className="btn btn-success mt-2 mb-2" onClick={produtoAtual}>Comprar</button>
   </div> 
    
    </>
 );

}
