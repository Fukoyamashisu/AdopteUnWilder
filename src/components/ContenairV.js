import React, { Component } from "react";
import { SideMenu } from "../faac/SideMenu";

class ContenairV extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return <SideMenu {...this.props} />;
  }
}

export default ContenairV;
