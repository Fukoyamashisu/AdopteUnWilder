
import React, { Component } from 'react';

import Routes from '../routes.js';
import ContainerContact from './ContainerContact'

class App extends Component {
  render() {
    return (
        <Routes {...this.props}/>
    );
  }
}

export default App;
