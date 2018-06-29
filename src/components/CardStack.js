import React, {Component} from 'react';
import {StyledCardStack, StyledH2, StyledP, StyledContainer} from '../styled/StyledCardStack'
import {Col, Row, Container} from 'reactstrap'
class CardStack extends Component {
    constructor(props) {
        super(props);
        this.state = {
            stack: [
                "React",
                "JavaScript",
                "Angular",
                "Vue",
                "Pug",
                "PHP",
                "$?$?$?",
                "MVC",
                "Symfo",
                "Fortran",
                "Haskell",
                "Lodash",
                "Passport",
                "BCrypt"
            ]
        };
    }
    render() {
        const {stack} = this.state;
        return (
            <StyledCardStack>
                <StyledH2>Stacks Techniques</StyledH2>
                <StyledContainer>
                    <Row justify-content="center">
                        {stack.map((elt, i) => <Col md="4" key={i}>
                            <StyledP>{elt}</StyledP>
                        </Col>)}
                    </Row>
                </StyledContainer>
            </StyledCardStack>
        );
    }
}

export default CardStack;