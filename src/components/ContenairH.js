import React, { Component } from 'react';
import {Col,Row} from 'reactstrap';

//Styled-Components
import {StyledContainerH,StyledRow} from '../styled/StyledContainer';

import Slider from "react-slick";

import SearchBar from './SearchBar';
import { NavBar } from '../faac/NavBar';
import ProfileCard from './ProfileCard';


class ContenairH  extends Component {
    constructor(props) {
        super(props);
        this.state = {  };
    }
    render() {

        const settings = {
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1
        };

        return (
            <StyledContainerH>
                <StyledRow>
                    <Col md="1">
                        <NavBar />
                    </Col>
                    <Col md="2">
                        sidemenu
                    </Col>
                    <Col>
                        <StyledRow>
                            <Col>
                                <Row style={{justifyContent:"space-around"}}>
                                    <SearchBar />
                                </Row>
                                <StyledRow align>
                                    <Col>
                                        <StyledRow slick>
                                            <Slider {...settings}>
                                                <ProfileCard />
                                                <ProfileCard />
                                                <ProfileCard />
                                                <ProfileCard />
                                            </Slider>
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

export default ContenairH ;