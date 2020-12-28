import React from 'react';
import {Container} from 'reactstrap';
import Navtabs from '../components/NavTabs';
import BannerPrincipal from '../components/BannerPrincipal';
import Garantias from '../components/Garantias';
import Rodape from '../components/Rodape';



export default function Home() {
  return (
    <Container fluid={true} >
      <BannerPrincipal />
      <Navtabs />       
       <Garantias />
       <Rodape /> 
     
    </Container>
  );
}

