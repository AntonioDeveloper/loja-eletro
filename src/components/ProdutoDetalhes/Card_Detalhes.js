import React, {useState} from 'react';
import {
  Card, CardText, CardBody,
  CardTitle, CardSubtitle
} from 'reactstrap';
import ModalPedido from './ModalPedido';

const CardDetalhes = (props) => {
  const [modal, setModal] = useState(false);

  const toggle = () => setModal(!modal);

  return (
    <div>
      <Card>
        <CardBody>
          <CardTitle tag="h1"></CardTitle>
          <CardSubtitle tag="h3" className="mb-2 text-muted"></CardSubtitle>
            <CardText>{props.nome}</CardText>
            <ModalPedido onClick={toggle}/>
        </CardBody>
      </Card>
    </div>
  );
};

export default CardDetalhes;