import React from 'react'
import './App.css'
import { BrowserRouter, Switch, Route } from 'react-router-dom';
import Description from './Core/Description';
import Home from './Core/Home';
import Listing from './Core/Listing';
import Breeders from './Core/Breeders';
import Healthwellness from './Core/Healthwellness';
import Financing from './Core/Financing';
import Community from './Core/Community';
import About from './Core/About';
import Venterinarin from './Core/Veterinarian';
import Faq from './Core/Faq';
import Contact from './Core/Contact';
import Thankyou from './Core/Thankyou';

// Pages
// const Login = React.lazy(() => import('./Admin/Login'));

const Routes = () => {
  return (
    <div>
      <BrowserRouter>
        {/* <Menu/> */}
        <Switch>
          <Route path='/' exact component={Home} />
          <Route path='/puppies-for-sale' exact component={Listing} />
          <Route path='/puppies-for-sale/:pet_id' exact component={Description} />
          <Route path='/about' exact component={About} />
          <Route path='/faq' exact component={Faq} />
          <Route path='/our-veterinarian' exact component={Venterinarin} />
          <Route path='/breeders' exact component={Breeders} />
          <Route path='/healthwellness' exact component={Healthwellness} />
          <Route path='/financing' exact component={Financing} />
          <Route path='/community' exact component={Community} />
          <Route path='/contact' exact component={Contact} />
          <Route path='/thank-you' exact component={Thankyou} />
        </Switch>
        {/* <Footer/> */}
      </BrowserRouter>
    </div>
  );
};

export default Routes;