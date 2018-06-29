import React, { Component } from 'react';
import withData from '../hoc/withData';

import Routes from "../routes.js";





class App extends Component {
  render() {
    return (

    <Routes {...this.props}/>

    );
  }
}

export default withData(App);
