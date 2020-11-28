import React, { useState } from 'react';

export default function MoldeProduto(props){
  
  const [produto, setProd] = useState(props);
  
  const updateId = () => {    
    setProd({
      id: props.id,
      imagem: props.imagem,
      nome: props.nome,
      preco: props.preco
    });
    console.log(produto);
    return produto;
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
       <button href="produto_detalhes.js" className="btn btn-success mt-2 mb-2" onClick={updateId}>Comprar</button>
     </div>
    </>
 );

}