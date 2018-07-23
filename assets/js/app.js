import React, { Component } from 'react';
import { NavLink, Route, StaticRouter, Switch } from 'react-router-dom';
import routes from './routes';
import ReactDOM from 'react-dom';

class App extends Component {
  render() {
    return (
      <div>
        <div>
          <NavLink to={'/news'}>News</NavLink>
        </div>
        <Switch>
          {routes.map((route, i) => <Route key={i} {...route} />)}
        </Switch>
      </div>
    );
  }
}

ReactDOM.render((
  <StaticRouter location={window.location.pathname} context={{}}>
    <App/>
  </StaticRouter>
), document.getElementById('root'));
