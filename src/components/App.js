<<<<<<< HEAD
import React, { Component } from 'react';
import withData from '../hoc/withData';
=======

import React, { Component } from "react";
import Routes from "../routes.js";
>>>>>>> 698257766fbd1ce991253dffe1f9f93ea74c1d15





class App extends Component {
  render() {
    return (

    <Routes {...this.props}/>

    );
  }
}

export default withData(App);
