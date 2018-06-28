import React, {Component} from 'react';
import {FontAwesomeIcon} from '@fortawesome/react-fontawesome'
import Routes from '../routes.js';
import CardStack from './CardStack'

class App extends Component {
  render() {
    return (
      <div>
        <Routes {...this.props}/>
        <CardStack/>
      </div>
    );
  }
}

export default App;
