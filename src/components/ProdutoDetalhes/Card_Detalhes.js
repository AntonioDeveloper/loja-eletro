import React, { useEffect, useState } from 'react';
import {
  Card, CardText, CardBody,
  CardTitle, CardSubtitle, Button
} from 'reactstrap';
import Bt from '../MoldeProduto/BtComprar';

const CardDetalhes = (props) => {


  
  
  // const [produto, setProduto] = useState("");

  //   setProduto(produto = { props.nome});
  

  // useEffect(async () => {
  //   const res = await fetch("http://localhost:81/fullstackeletro/loja-eletro/src/api/getProdutos.php");
  //   const data = await res.json();
  //   setProdutos(data);
  // }, []);

  return (
    <div>
      <Card>
        <CardBody>
          <CardTitle tag="h1"></CardTitle>
          <CardSubtitle tag="h3" className="mb-2 text-muted"></CardSubtitle>
          <CardText>Some quick example text to build on the card title and make up the bulk of the card's content.</CardText>
          <Bt />
        </CardBody>
      </Card>
    </div>
  );
};

export default CardDetalhes;