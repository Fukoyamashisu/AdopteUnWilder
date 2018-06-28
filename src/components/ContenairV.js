import React, { Component } from 'react';

import {Row,Col} from 'reactstrap';
//Styled-Components
import { StyledContainerV, StyledRow } from '../styled/StyledContainer';


import {FontAwesomeIcon} from '@fortawesome/react-fontawesome';


class ContenairV extends Component {
    constructor(props) {
        super(props);
        this.state = {};
    }
    render() {
        return (
            <StyledContainerV>
                <Row>
                    <Col xs="2">
                        <FontAwesomeIcon icon="bars" size="2x"/>
                    </Col>
                    <Col>
                        searchbar
                    </Col>
                </Row>
                <Row>
                    <Col>
                        Profilecard
                    </Col>
                </Row>
            </StyledContainerV>
        );
    }
}

export default ContenairV;