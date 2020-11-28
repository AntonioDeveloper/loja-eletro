import React from 'react';
import { BrowserRouter } from 'react-router-dom';
import { Container } from 'reactstrap';
import Menu from './components/Menu';
import Rotas from './Rotas';


function App() {
  return (
    <BrowserRouter>
      <div className="App">   
        <header>
          <Menu />       
        </header>
        <main>
          <Container fluid>
            <Rotas />
          </Container>
        </main>    
      </div>
    </BrowserRouter>
  );
}

export default App;
