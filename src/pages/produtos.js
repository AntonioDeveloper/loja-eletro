import MoldeProduto from '../components/MoldeProduto/MoldeProduto';
import {Container, Row} from 'reactstrap';
import {useState, useEffect} from 'react';
import ProdutoDetalhes from './produto_detalhes';
import Garantias from '../components/Garantias';
import Rodape from '../components/Rodape';

export default function Produtos(props){
   const [produtos, setProdutos] = useState([]);
   const [prod, setProd] = useState({});  
  
   console.log(produtos);
   
   useEffect(async () => {
      const res = await fetch("http://localhost:81/fullstackeletro/loja-eletro/src/api/getProdutos.php");
      const data = await res.json();
      //console.log(data);  
      setProdutos(data);    
   }, []);  

   function produtoAtual(item){
     setProd(item);     
     //console.log(prod.nome);
   }
   
   return (
      <Container fluid>     
         <Row>
         {
           prod.id === undefined ?

         produtos && produtos.map(item => <MoldeProduto key={item.id_prod} id={item.id_prod} imagem={item.nome_imagem}
            imagem1={item.imagem1_cat} imagem2={item.imagem2_cat} 
            imagem3={item.imagem3_cat} imagem4={item.imagem4_cat}
         nome={item.descricao} preco={item.preco} texto={item.texto} escolherProd={produtoAtual}
         />)
         
         :
         <ProdutoDetalhes id={prod.id} imagem={prod.imagem}
         imagem1={prod.imagem1} imagem2={prod.imagem2} 
         imagem3={prod.imagem3} imagem4={prod.imagem4}
         nome={prod.nome} preco={prod.preco} texto={prod.texto}
         
         />
        
        }

      
         </Row>
         <Garantias />
         <Rodape />
        
      </Container>
   );
}