import React, { Component } from "react";
import {
  StyledCardStack,
  StyledH2,
  StyledP,
  StyledContainer
} from "../styled/StyledCardStack";
import { Col, Row, Container } from "reactstrap";
class CardStack extends Component {

    constructor(props) {
        super(props);
        this.state = {
            orderedSkills: []
        };
    }

    render() {
        const {stacks} = this.props;
        console.log(stacks);
        return (
            <Row>
                <StyledCardStack md="10">
                    <StyledH2>Stacks Techniques</StyledH2>
                    <StyledContainer>
                        <Row justify-content="center">
                            {stacks
                                ? stacks.map((elt, i) => <Col key={i} md="4">
                                    <StyledP>{elt.name}</StyledP>
                                </Col>)
                                : null}
                        </Row>
                    </StyledContainer>
                </StyledCardStack>
            </Row>
          </StyledContainer>
        </StyledCardStack>
      </Row>
    );
  }
}

export default CardStack;
