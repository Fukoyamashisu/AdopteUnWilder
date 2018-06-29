import React, { Component } from "react";
import Routes from "../routes.js";
import withData from "../hoc/withData";

class App extends Component {
  render() {
    return (
      <div>
        <Routes {...this.props} />
      </div>
    );
  }
}

export default withData(App);
