import React from 'react';
import { Container, Row, Jumbotron } from 'reactstrap';

export default function CadastroUsuario(){
  return(
    <Container>
      <Row>
        <Jumbotron className="col-lg-5 col-md-8 col-sm-9 mx-auto py-2 form-group">
          <h3>Cadastre-se</h3>  
          <form action="http://localhost:81/fullstackeletro/loja-eletro/src/api/cadastro_clientes.php" method="post">
          <div className="form-group">
                  <label for='name'>Nome:</label><br />
                  <input type="text" id='name' name='name'/> <br /><br />
                  <label for='end'>Endereço:</label><br />
                  <input type="text" id='end' name='end'/> <br /><br />
                  <label for='phone'>Telefone:</label> <br />
                  <input id='phone' type='number' name='phone'/> <br /><br /> 
                  <label for='email'>Email:</label><br />
                  <input id='email' type='email' name='email'/><br /><br />
                  <label for='foto'>Foto:</label><br />
                  <input type='url' name="foto" /><br /><br />
                  <label for='senha'>Digite uma senha:</label><br />
                  <input type="password" name="senha" /><br /><br />
                  <label for='conf_senha'>Confirme sua senha:</label><br />
                  <input type="password" name="conf_senha"></input><br /><br />
                  <input className="btn btn-primary btn-lg" type="submit" value="Enviar" id="enviar" />       
              </div>
          </form>  
        </Jumbotron>
      </Row>
    </Container>
  )
}