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
        this.state = {
            experiences: [
                {
                    title: "WildCodeSchool",
                    description: "Apprentissage du langage javascript avec le framework React côté front et NodeJs" +
                            "côté back.",
                    date: "2018"
                }, {
                    title: "McDonald's",
                    description: "Apprentissage du langage Mcdonald's avec le framework service côté front et burg" +
                            "er côté back.",
                    date: "2017"
                }
            ]
        };
    }
    render() {
        const {experiences} = this.state;
        return (
            <StyledCardExp>
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
        );
    }
}

export default CardExp;