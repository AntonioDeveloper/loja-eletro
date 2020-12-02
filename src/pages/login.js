import React from 'react';
import {Container, Row, Col} from 'reactstrap';
import Login from '../components/Forms/Login';


export default function Home() {
  return (
    <Container fluid>
      <Row>
        <Col>
          <Login />
        </Col>
      </Row> 
    </Container>
  );
}

