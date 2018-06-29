import React, { Component } from 'react';
import { StyledProfilCard, StyledProfilSubTitle, StyledProfilTitle } from '../styled/StyledProfilCard';

import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

class ProfileCard extends Component {
    
    render() {

        const {dispo} = this.props;
        return (
            <StyledProfilCard url="https://majorblog.com/wp-content/uploads/2016/11/silhouette-of-man-looking-away.jpg">
                <div>
                    {dispo ? <FontAwesomeIcon icon="lock-open" size="2x" /> : <FontAwesomeIcon icon="lock" size="2x" />}
                </div>
                <StyledProfilTitle>PETITOT</StyledProfilTitle>
                <StyledProfilSubTitle>Sylvain</StyledProfilSubTitle>
            </StyledProfilCard>
        );
    }
}

export default ProfileCard;