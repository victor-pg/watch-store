import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Switch, Link } from 'react-router-dom';
import Navbar from './components/Navbar/Navbar';
import HomePage from './components/HomePage/HomePage';
import WatchesPage from './containers/WatchesPage/WatchesPage';
import WatchDetails from './containers/WatchDetails/WatchDetails';
import CartPage from './containers/CartPage/CartPage'

const Root = () => {
    return (
        <BrowserRouter>
            <Navbar />
            <Switch>
                <Route path="/" exact component={HomePage} />
                <Route path="/watches" component={WatchesPage} />
                <Route path="/watch/:id" component={({match})=><WatchDetails id={match.params.id} />} />
                <Route path="/cart" component={CartPage} />
            </Switch>
        </BrowserRouter>
    );
}

export default Root;

ReactDOM.render(<Root />, document.getElementById('root'));
