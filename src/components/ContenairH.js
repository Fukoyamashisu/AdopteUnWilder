
import React, { Component } from 'react';
import {Col,Row} from 'reactstrap';
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";

//Styled-Components
import {StyledContainerH,StyledRow} from '../styled/StyledContainer';

import SimpleSlider from './SimpleSlider';


import SearchBar from './SearchBar';
import { NavBar } from '../faac/NavBar';



class ContenairH extends Component {
    constructor(props) {
        super(props);
        this.state = {};
    }
    
    render() {

        

        return (
            <StyledContainerH>
                <StyledRow>
                    <Col md="1" id="NavBarV">
                        <NavBar />
                    </Col>
                    <Col md="2" id="SideMenuMain">
                        sidemenu
                    </Col>
                    <Col>
                        <StyledRow>
                            <Col>
                                <Row>
                                    <Col md={{ size: '6', offset: 2 }}>
                                        <SearchBar />
                                    </Col>
                                </Row>
                                <StyledRow align>
                                    <Col>
                                        <StyledRow slick>
                                          <SimpleSlider/>  
                                        </StyledRow>
                                    </Col>
                                </StyledRow>
                            </Col>
                        </StyledRow>
                    </Col>
                </StyledRow> 
            </StyledContainerH>
        );
    }
}

export default ContenairH;
