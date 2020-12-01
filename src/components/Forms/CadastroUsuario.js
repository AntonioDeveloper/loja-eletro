import React from 'react';
import { Container, Row, Jumbotron } from 'reactstrap';

export default function CadastroUsuario(){
  return(
    <Container>
      <Row>
        <Jumbotron className="col-lg-5 col-md-8 col-sm-9 mx-auto py-2 form-group">
          <h3>Cadastre-se</h3>  
          <form action="cadastro_clientes.php" method="post">
          <div className="form-group">
                  <label for='name'>Nome:</label>
                  <input type="text" id='name' name='name'/> 
                  <label for='end'>Endereço:</label>
                  <input type="text" id='end' name='end'/> 
                  <label for='phone'>Telefone:</label>
                  <input id='phone' type='number' name='phone'/> 
                  <label for='email'>Email:</label>
                  <input id='email' type='email' name='email'/>
                  <label for='foto'>Foto:</label>
                  <input type='url' name="foto" />
                  <label for='senha'>Digite uma senha:</label>
                  <input type="password" name="senha" />
                  <label for='conf_senha'>Confirme sua senha:</label>
                  <input type="password" name="conf_senha"></input>
                  <input className="btn btn-primary btn-lg" type="submit" value="Enviar" id="enviar" />       
              </div>
          </form>  
        </Jumbotron>
      </Row>
    </Container>
  )
}