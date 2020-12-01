import React from 'react';
import {Container, Row, Col} from 'reactstrap';
import CadastroUsuario from '../components/Forms/CadastroUsuario';


export default function Home() {
  return (
    <Container fluid>
      <Row>
        <Col>
          <CadastroUsuario />
        </Col>
      </Row> 
    </Container>
  );
}

