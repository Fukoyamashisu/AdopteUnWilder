import React, {Component} from 'react';
import {FontAwesomeIcon} from '@fortawesome/react-fontawesome'
import Routes from '../routes.js';
import CardProject from './CardProject'

class App extends Component {
  render() {
    return (
      <div>
        <Routes {...this.props}/>
        <CardProject/>
      </div>
    );
  }
}

export default App;
