import MoldeProduto from '../components/MoldeProduto/MoldeProduto';
import {Container, Row} from 'reactstrap';
import {useState, useEffect} from 'react';


export default function Produtos(){
   const [produtos, setProdutos] = useState([]);
   
   useEffect(async () => {
      const res = await fetch("http://localhost:81/fullstackeletro/loja-eletro/src/api/getProdutos.php");
      const data = await res.json();
      console.log(data);  
      setProdutos(data);    
   }, []);

   return (
      <Container>
         <Row>
         {produtos && produtos.map(item => <MoldeProduto key={item.id_prod} id={item.id_prod} imagem={item.nome_imagem}
         nome={item.descricao} preco={item.preco} />)}   
         </Row>
      </Container>
   );
}