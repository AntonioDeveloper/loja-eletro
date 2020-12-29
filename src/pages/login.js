import React from 'react';
import {Container, Row, Col} from 'reactstrap';
import Login from '../components/Forms/Login';
import '../css/login.css';

export default function Home() {
  return (
    <Container fluid={true}>
      <Row >
        <Col>
          <Login />
        </Col>
      </Row> 
    </Container>
  );
}

