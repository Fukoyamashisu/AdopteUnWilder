import React, { Component } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Routes from "../routes.js";
import WilderCard from "./WilderCard";

class App extends Component {
  render() {
    return (
      <div>
        <WilderCard />
        <Routes {...this.props} />
      </div>
    );
  }
}

export default App;
