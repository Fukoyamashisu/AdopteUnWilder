import React, {Component} from 'react';
import {Row, Col} from 'reactstrap';
//Styled-Components
import {StyledContainerV, StyledRow} from '../styled/StyledContainer';
import {FontAwesomeIcon} from '@fortawesome/react-fontawesome';
import SearchBar from './SearchBar';
import CardStack from './CardStack'
import CardProject from './CardProject'
import CardExp from './CardExp';
import MenuProfile from './MenuProfile'

class ContenairV extends Component {
    constructor(props) {
        super(props);
        this.state = {
            user: this.props.location.state
        };
        console.log(this.state.user.user);
    }
    render() {
        const {
            projects,
            skills,
            experiences,
            firstname,
            lastname,
            adress,
            phoneNumber,
            workingArea,
            profilTitle,
            profilDescription,
            availability
        } = this.state.user.user;
        console.log(this.state.user);
        return (
            <StyledContainerV>
                <Row>
                    <Col xs="2">
                        <FontAwesomeIcon icon="bars" size="2x"/>
                    </Col>
                    <Col>
                        <SearchBar/>
                    </Col>
                </Row>
                <Row>
                    <Col md="5">
                        <MenuProfile
                            workingArea={workingArea}
                            availability={availability}
                            phoneNumber={phoneNumber}
                            adress={adress}
                            lastname={lastname}
                            profilTitle={profilTitle}
                            profilDescription={profilDescription}/>
                    </Col>
                    <Col md="7">
                        <CardStack stacks={skills}/>
                        <CardExp experiences={experiences}/>
                        <CardProject projects={projects}/>

                    </Col>
                </Row>
            </StyledContainerV>
        );
    }
}

export default ContenairV;
