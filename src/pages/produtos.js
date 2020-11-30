import MoldeProduto from '../components/MoldeProduto/MoldeProduto';
import {Container, Row, Col} from 'reactstrap';
import {useState, useEffect} from 'react';
import ProdutoDetalhes from './produto_detalhes';


export default function Produtos(props){
   const [produtos, setProdutos] = useState([]);
   const [prod, setProd] = useState({});  
  
   //console.log(produto);
   
   useEffect(async () => {
      const res = await fetch("http://localhost:81/fullstackeletro/loja-eletro/src/api/getProdutos.php");
      const data = await res.json();
      //console.log(data);  
      setProdutos(data);    
   }, []);  

   function produtoAtual(item){
     setProd(item);     
     console.log(prod.nome);
   }
   
   return (
      <Container>     
         <Row>
         {
           prod.id === undefined ?

         produtos && produtos.map(item => <MoldeProduto key={item.id_prod} id={item.id_prod} imagem={item.nome_imagem}
         nome={item.descricao} preco={item.preco} escolherProd={produtoAtual}/>)
        
         :
         <ProdutoDetalhes id={prod.id} imagem={prod.imagem}
         nome={prod.nome} preco={prod.preco}/>
        
        }

      
         </Row>
        
        
      </Container>
   );
}