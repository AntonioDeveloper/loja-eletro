import React, { useEffect, useState } from 'react';
import {
  Card, CardText, CardBody,
  CardTitle, CardSubtitle, Button
} from 'reactstrap';
import Bt from '../MoldeProduto/BtComprar';

const CardDetalhes = (props) => {

  return (
    <div>
      <Card>
        <CardBody>
          <CardTitle tag="h1"></CardTitle>
          <CardSubtitle tag="h3" className="mb-2 text-muted"></CardSubtitle>
            <CardText>{props.nome}</CardText>
          <Bt />
        </CardBody>
      </Card>
    </div>
  );
};

export default CardDetalhes;