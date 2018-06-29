import React, {Component} from 'react';
import {NavBarBottom} from '../faac/NavBarBottom'
import Routes from '../routes.js';

class App extends Component {
  render() {
    return (
      <div>
        <Routes {...this.props}/>
        <NavBarBottom {...this.props}/>
      </div>

    );
  }
}

export default App;
