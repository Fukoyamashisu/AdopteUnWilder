
import React, { Component } from "react";
import Routes from "../routes.js";





class App extends Component {
  render() {
    return (

    <Routes {...this.props}/>

    );
  }
}

export default App;
