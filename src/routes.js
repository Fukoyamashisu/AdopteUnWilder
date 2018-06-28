import React from 'react';
import {Route} from 'react-router-dom';
import ContenairH from './components/ContenairH';
import ContenairV from './components/ContenairV';


const Routes = (props) => {
    return <div>
        <Route exact path="/" component={ContenairH}/>
        <Route path="/profile" component={ContenairV} />
    </div>
}



export default Routes;