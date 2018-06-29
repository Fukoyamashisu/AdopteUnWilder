import React, { Component } from "react";

import {
  StyledProfilCard,
  StyledProfilSubTitle,
  StyledProfilTitle
} from "../styled/StyledProfilCard";
import photo from "../assets/img/photo.jpg";


class ProfileCard extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    const {history,user} = this.props;
    const {skills} = user;
    const allSkills = skills.map(el => el.name);

    return (
      <StyledProfilCard url="https://cdn.pixabay.com/photo/2016/10/09/18/03/smile-1726471_640.jpg">
        <span />
        <StyledProfilTitle onClick={() => history.push(`/profile/${user.id}`, { user })}>{user.firstName} {user.lastName}</StyledProfilTitle>
        <StyledProfilSubTitle>{allSkills}</StyledProfilSubTitle>
      </StyledProfilCard>
    );
  }
}

export default ProfileCard;
