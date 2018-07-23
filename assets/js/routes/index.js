import Home from '../components/Home';
import News from '../components/News';
import NotFound from '../components/NotFound';
import Cards from '../components/card/Cards';

const routes = [
  {
    path: '/',
    exact: true,
    component: Home
  },
  {
    path: '/news',
    component: News
  },
  {
    path: '/cards',
    component: Cards
  },
  {
    path: '*',
    component: NotFound,
    exact: true
  }
];

export default routes;
