import React, { Component } from 'react';
import { StyledProfilCard, StyledProfilSubTitle, StyledProfilTitle } from '../styled/StyledProfilCard';

//Styled-Components


class ProfileCard extends Component {
    constructor(props) {
        super(props);
        this.state = {  };
    }
    render() {
        return (
            <StyledProfilCard url="https://majorblog.com/wp-content/uploads/2016/11/silhouette-of-man-looking-away.jpg">
                <span></span>
                <StyledProfilTitle>PETITOT</StyledProfilTitle>
                <StyledProfilSubTitle>Sylvain</StyledProfilSubTitle>
            </StyledProfilCard>
        );
    }
}

export default ProfileCard;