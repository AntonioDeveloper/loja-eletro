import React from 'react';

export default function MoldeProduto(props){  

  function produtoAtual(){
      
      let i = ({
        id: props.id,
        imagem: props.imagem,
        imagem1: props.imagem1,
        imagem2: props.imagem2,
        imagem3: props.imagem3,
        imagem4: props.imagem4,
        nome: props.nome,
        preco: props.preco,
        texto: props.texto
      });
      props.escolherProd(i);
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
