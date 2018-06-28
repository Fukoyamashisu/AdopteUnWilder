import React from 'react';
import {Route} from 'react-router-dom';
import ContenairH from './components/ContenairH';
import ContenairV from './components/ContenairV';


const Routes = (rest) => {
    return <div>
        <Route exact path="/" render={props => <ContenairH {...props} {...rest}/>}/>
        <Route path="/profile" render={props => <ContenairV {...props} {...rest}/>} />
    </div>
}



export default Routes;