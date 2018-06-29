import React, { Component } from "react";
import {
  StyledProfilCard,
  StyledProfilSubTitle,
  StyledProfilTitle
} from "../styled/StyledProfilCard";
import photo from "../assets/img/photo.jpg";

//Styled-Components

class ProfileCard extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <StyledProfilCard url={photo}>
        <span />
        <StyledProfilTitle>JULIEN FOUCHER</StyledProfilTitle>
        <StyledProfilSubTitle>Javascript, React, Node.js</StyledProfilSubTitle>
      </StyledProfilCard>
    );
  }
}

export default ProfileCard;
