import React, { useState } from 'react';
import { Button, Modal, ModalHeader, ModalBody} from 'reactstrap';

const ModalPedido = (props) => {
  const {
    className    
  } = props;

  const [modal, setModal] = useState(false);

  const toggle = () => setModal(!modal);

  return (
    <div>
      <Button color="success" onClick={toggle}>Comprar</Button>
      <Modal isOpen={modal} toggle={toggle} className={className}>
        <ModalHeader toggle={toggle}>Faça seu pedido aqui!</ModalHeader>
        <ModalBody>
          <form id='frm1' action="http://localhost:81/fullstackeletro/loja-eletro/src/api/cadastro_pedidos.php" method="post" className="px-5">
            <label for='name'>Nome:</label><br/>
            <input type="text" id='name' name='name'/> <br/><br/>
            <label for='end'>Endereço:</label><br/>
            <input type="text" id='end' name='end'/> <br/><br/>
            <label for='phone'>Telefone:</label><br/>
            <input id='phone' type='number' name='phone'/> <br/><br/>
            <label for='email'>Email:</label><br/>
            <input id='email' type='text' name='email'/> <br/><br/>            
            <label for='id_prod'>id Prod:</label><br/>
            <input id='id_prod' type='text' name='id_prod' value={props.id}/><br/><br/>
            <label for='nome_prod'>Nome Prod:</label><br/>
            <input type='text' name='nome_prod' value={props.nome}/><br/><br/>
            <label for='val_unit'>Valor Unitário:</label><br/>
            <input type='number' name='val_unit' value={props.preco}/><br/><br/>
            <label for='quantidade'>Quantidade:</label><br/>
            <input name='quantidade' type='number' value={props.quant}/><br/><br/>
            <label for='valor_total'>Total:</label><br/>
            <input name='valor_total' type='number' value={props.quant * props.preco}/><br/><br/>
            <input type="submit" className="btn btn-primary" value="Enviar" id="enviar" /><br/><br/>        
          </form>
        </ModalBody>
       </Modal>
    </div>
  );
}

export default ModalPedido;