import React, {Component} from 'react';
import {Row, Col, Container} from 'reactstrap'
import {
    StyledCardExp,
    StyledH2,
    StyledP,
    StyledH4,
    StyledDiv,
    StyledRow
} from '../styled/StyledCardExp'

class CardExp extends Component {
    constructor(props) {
        super(props);
        this.state = {};
    }
    render() {
        const {experiences} = this.props;
        return (
            <Row>
                <StyledCardExp md="10">
                    <StyledH2>Expériences</StyledH2>
                    {experiences.map((elt, i) => <StyledDiv>
                        <StyledRow>
                            <Col md="9">
                                <StyledH4>{elt.title}</StyledH4>
                            </Col>
                            <Col md="3">
                                <p>{elt.date}</p>
                            </Col>
                        </StyledRow>
                        <Row>
                            <StyledP>{elt.description}</StyledP>
                        </Row>
                    </StyledDiv>)}
                </StyledCardExp>
            </Row>
        );
    }
}

export default CardExp;