import {Switch, Route} from 'react-router-dom';
import Home from './pages/home';
import Produtos from './pages/produtos';
import ProdutoDetalhes from './pages/produto_detalhes';

export default function Rotas(){

  return(
    <Switch>
      <Route exact path="/" component={Home} />
      <Route exact path="/produtos.js" component={Produtos} />
      <Route exact path="/produto_detalhes.js" component={ProdutoDetalhes} />
    </Switch>
  );
}