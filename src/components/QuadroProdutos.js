import React from 'react';

export default class QuadroProdutos extends React.Component{
  
  constructor(){
    super();
    this.state = ({
      db: []
    });
    this.exibirProdutos();
  }

exibirProdutos(){
  fetch("http://localhost:81/fullstackeletro/loja-eletro/src/api/getProdutos.php")
  .then((response) => response.json())
  .then ((responseJson) => 
  {
    this.setState({ 
      db: responseJson
    });
    console.log(this.state.db);
  })
}

  render(){
    return(
      <div>

      </div>
    );
  }
}