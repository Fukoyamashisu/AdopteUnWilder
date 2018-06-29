import React from 'react';
import {Link} from 'react-router-dom';
import {Row, Col} from 'reactstrap';
import {StyledNavbarBottomImg, StyledNavbarBottom, StyledNavbarBottomRow} from '../styled/StyledNavBarBottom';
import {FontAwesomeIcon} from '@fortawesome/react-fontawesome';

export const NavBarBottom = props => {
    return <StyledNavbarBottom>

        <Col>
            <StyledNavbarBottomRow>
                <Link to="/"><StyledNavbarBottomImg
                    alt=""
                    src="https://wildcodeschool.fr/wp-content/uploads/2017/01/logo_orange_pastille.png"/></Link>
            </StyledNavbarBottomRow>
        </Col>
        <Col>
            <StyledNavbarBottomRow>
                <Link to="/"><FontAwesomeIcon icon="home" size="3x" color="#ffad42"/></Link>
            </StyledNavbarBottomRow>
        </Col>
        <Col>
            <StyledNavbarBottomRow>
                <Link to="/">{props.pageprofil
                        ? <FontAwesomeIcon icon="envelope" size="3x"/>
                        : <FontAwesomeIcon icon="info-circle" size="3x" color="#ffad42"/>}</Link>
            </StyledNavbarBottomRow>
        </Col>
    </StyledNavbarBottom>
}