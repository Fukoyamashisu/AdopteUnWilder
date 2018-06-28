import React, { Component } from 'react';
import {Col,Row} from 'reactstrap';

//Styled-Components
import {StyledContainerH,StyledRow} from '../styled/StyledContainer';

import SwipeableViews from 'react-swipeable-views';


class ContenairH  extends Component {
    constructor(props) {
        super(props);
        this.state = {  };
    }
    render() {
        return (
            <StyledContainerH>
                <StyledRow>
                    <Col md="1">
                        navbar
                    </Col>
                    <Col md="2">
                        sidemenu
                    </Col>
                    <Col>
                        <Row>
                            searchBar
                        </Row>
                        <StyledRow>
                            <h1>hello</h1>
                            <SwipeableViews>
                                
                            </SwipeableViews>
                        </StyledRow>
                    </Col>
                </StyledRow> 
            </StyledContainerH>
            
        );
    }
}

export default ContenairH ;