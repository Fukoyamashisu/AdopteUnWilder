import React, { Component } from "react";

import {
  StyledProfilCard,
  StyledProfilSubTitle,
  StyledProfilTitle
} from "../styled/StyledProfilCard";


class ProfileCard extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    const {history,user} = this.props;

    return (
      <StyledProfilCard url="https://majorblog.com/wp-content/uploads/2016/11/silhouette-of-man-looking-away.jpg">
          <StyledProfilTitle onClick={() => history.push(`/profile/${user.id}`,{user})}>JULIEN FOUCHER</StyledProfilTitle>
          <StyledProfilSubTitle>Javascript, React, Node.js</StyledProfilSubTitle>
      </StyledProfilCard>
    );
  }
}

export default ProfileCard;
