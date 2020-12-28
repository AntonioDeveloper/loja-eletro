import React from 'react';
import capa from '../imagens/eletronicos.jpg';
import '../css/banner-principal.css';

export default function BannerPrincipal(){
  return(
    <section className="container-fluid px-0">
       <img src={capa} className="img-fluid" alt="Capa" />
    </section>
  );
}