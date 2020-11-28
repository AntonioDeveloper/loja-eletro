import React from 'react';
import {Link} from 'react-router-dom';

export default function BtComprar(){  

  return <button  as={Link} href="produtos.js"   
  className="btn btn-success mt-2 mb-2">Comprar</button>
}