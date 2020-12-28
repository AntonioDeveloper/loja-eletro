import React, {useState} from 'react';
import {
  Card, CardText, CardBody,
  CardTitle, CardSubtitle, Input
} from 'reactstrap';
import ModalPedido from './ModalPedido';

const CardDetalhes = (props) => {
  const [modal, setModal] = useState(false);

  const toggle = () => setModal(!modal);

  const [qtde, setQtde] = useState(0);
 

  return (
    <div>
      <Card>
        <CardBody>
          <CardTitle tag="h2">{props.nome}</CardTitle>
          <CardSubtitle tag="h3" className="mb-2 text-muted">R$ {props.preco}</CardSubtitle>
            <CardText id="descritivo">{props.texto}</CardText>
            <div id="quantidade">
              <span className="menos">
                <img src="http://localhost:81/fullstackeletro/loja-eletro/src/imagens/minus-solid.svg" alt="decremento" width="20px"
                onClick={() => qtde > 0 ? setQtde(qtde - 1) : setQtde(0)}
                />
              </span>
              <Input placeholder={qtde} />
              <span className="mais">
              <img src="http://localhost:81/fullstackeletro/loja-eletro/src/imagens/plus-solid.svg" alt="incremento" width="20px"
               onClick={() => setQtde(qtde + 1)}
              />
              </span>
            </div>
            <ModalPedido onClick={toggle} id={props.id} nome={props.nome} preco={props.preco}quant={qtde}/>
        </CardBody>
      </Card>
    </div>
  );
};

export default CardDetalhes;