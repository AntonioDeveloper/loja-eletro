import {Switch, Route} from 'react-router-dom';
import CadastroUsuario from './components/Forms/CadastroUsuario';
import Home from './pages/home';
import Produtos from './pages/produtos';
//import ProdutoDetalhes from './pages/produto_detalhes';

export default function Rotas(){

  return(
    <Switch>
      <Route exact path="/" component={Home} />
      <Route exact path="/produtos.js" component={Produtos} />
      <Route exact path="/cadastro.js" component={CadastroUsuario} />
    </Switch>
  );
}