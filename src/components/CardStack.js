import React, {Component} from 'react';
import {StyledCardStack} from '../styled/StyledCardStack'
import {Col, Row} from 'reactstrap'
class CardStack extends Component {
    constructor(props) {
        super(props);
        this.state = {
            stack: ["React", "JavaScript", "Angular", "Vue"]
        };
    }
    render() {
        return (
            <StyledCardStack>
                <Row>
                    <Col lg="5">
                        <p>React</p>
                    </Col>
                    <Col lg="5">
                        <p>JavaScript</p>
                    </Col>
                </Row>
            </StyledCardStack>
        );
    }
}

export default CardStack;