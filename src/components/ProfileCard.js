import React, { Component } from 'react';
import { StyledProfilCard } from '../styled/StyledProfilCard';

//Styled-Components


class ProfileCard extends Component {
    constructor(props) {
        super(props);
        this.state = {  };
    }
    render() {
        return (
            <StyledProfilCard>
               <h1>hello</h1>
            </StyledProfilCard>
        );
    }
}

export default ProfileCard;