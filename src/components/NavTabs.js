import React, { useState, useEffect } from 'react';
import { Nav, NavItem, NavLink } from 'reactstrap';
import {Container, Row} from 'reactstrap';
import MoldeProduto from './MoldeProduto/MoldeProduto';
import ProdutoDetalhes from '../pages/produto_detalhes';
import '../css/navtabs.css';

const Navtabs = (props) => {
  const [dropdownOpen, setDropdownOpen] = useState(false);

  const toggle = () => setDropdownOpen(!dropdownOpen);

  const [produtos, setProdutos] = useState([]);
  const [prod, setProd] = useState({});  
  
  //  console.log(produtos);
   
   useEffect(async () => {
      const res = await fetch("http://localhost:81/fullstackeletro/loja-eletro/src/api/getProdutos.php");
      const data = await res.json();
      console.log(data);  
      setProdutos(data);  
    }, []);  
    //console.log(produtos);
    
    function produtoAtual(item){
      setProd(item);     
      //console.log(prod.nome);
    }      
    
  return (
    <div className="px-2 py-5">      
    <h1>MAIS VISTOS</h1>
    <p className="py-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
      <Nav tabs>
        <NavItem>
          <NavLink href="#" active onClick={() => console.log("Oi!")}>Fogões</NavLink>
        </NavItem>
        <NavItem>
          <NavLink href="#">Geladeiras</NavLink>
        </NavItem>
        <NavItem>
          <NavLink href="#">Microondas</NavLink>
        </NavItem>
        <NavItem>
          <NavLink href="#">Máquinas de Lavar</NavLink>
        </NavItem>
        <NavItem>
          <NavLink href="#">Lava-Louças</NavLink>
        </NavItem>
      </Nav>

      <Container className="py-5 cards">     
         <Row>
         {
           prod.id === undefined ?

         produtos && produtos.map(item => <MoldeProduto key={item.id_prod} id={item.id_prod} imagem={item.nome_imagem}
         nome={item.descricao} preco={item.preco} escolherProd={produtoAtual}/>)
        
         :
         <ProdutoDetalhes id={prod.id} imagem={prod.imagem}          
         nome={prod.nome} preco={prod.preco} />        
        }
      
         </Row>
         
      </Container>

    </div>
  );
}

export default Navtabs;