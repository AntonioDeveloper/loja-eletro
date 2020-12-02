import React from 'react';
import { Container, Row, Jumbotron } from 'reactstrap';

export default function Login(){
  return(
    <Container>
      <Row>
        <Jumbotron className="col-lg-5 col-md-8 col-sm-9 mx-auto py-2 form-group">
          <h3>Entre ou cadastre-se</h3>  
          <form action="http://localhost:81/fullstackeletro/loja-eletro/src/api/login_usuario.php" method="post">
          <div className="form-group">
                  <label for='email'>Email:</label><br />
                  <input id='email' type='email' name='email'/><br /><br />
                  <label for='senha'>Digite uma senha:</label><br />
                  <input type="password" name="senha" /><br /><br />
                  <input className="btn btn-primary btn-lg" type="submit" value="Enviar" id="enviar" />       
                  <a href="http://localhost:3000/fullstackeletro/loja-eletro/cadastro.js" role="button">Ainda não possui cadastro? Clique aqui.</a>  
          </div>
          </form>  
        </Jumbotron>
      </Row>
    </Container>
  )
}