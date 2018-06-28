import React, { Component } from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import Routes from '../routes.js';


class App extends Component {
  render() {
    return (
      <div>
        <Routes {...this.props}/>
      </div>
    );
  }
}

export default App;
