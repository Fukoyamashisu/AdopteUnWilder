import React, {Component} from 'react';
import Routes from '../routes.js';
import {InfoWild} from '../faac/InfoWild'
class App extends Component {
  render() {
    //<Routes {...this.props}/>
    return (
      <div>
        <InfoWild/>
      </div>

    );
  }
}

export default App;
