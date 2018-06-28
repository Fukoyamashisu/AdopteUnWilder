import React, {Component} from 'react';
import {FontAwesomeIcon} from '@fortawesome/react-fontawesome'
import Routes from '../routes.js';
import ContainerContact from './ContainerContact'

class App extends Component {
  render() {
    return (
      <div>
        <Routes {...this.props}/>
        <ContainerContact/>
      </div>
    );
  }
}

export default App;
