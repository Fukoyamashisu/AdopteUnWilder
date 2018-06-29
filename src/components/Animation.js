import React, { Component } from "react";
import Typist from "react-typist";
import "../assets/css/index.css";
import { StyledDivAnimation } from "../styled/StyledAnimation";

class Animation extends Component {
  state = {
    renderMsg: false
  };

  onHeaderTyped = () => {
    this.setState({ renderMsg: true });
  };
  
  render() {
    return (
      <StyledDivAnimation>
        <Typist
          cursor={{ hideWhenDone: true }}
          onTypingDone={this.onHeaderTyped}
        >
          <span>&lt;h1&gt; Hello World ! &lt;/h1&gt;</span>
          <Typist.Backspace count={20} delay={2000} />
          <span> Welcome to the Wild Code School Portfolio ! &lt;/h1&gt;</span>
          <Typist.Backspace count={54} delay={2000} />
        </Typist>
      </StyledDivAnimation>
    );
  }
}

export default Animation;
