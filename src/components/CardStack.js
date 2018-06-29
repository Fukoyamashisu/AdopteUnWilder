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
  componentDidMount() {
    const { stacks } = this.props;
    const orderedSkills = stacks.sort((a, b) => a.order - b.order);
    return this.setState({ orderedSkills });
  }
  render() {
    const { orderedSkills } = this.state;
    return (
      <Row>
        <StyledCardStack md="10">
          <StyledH2>Stack Technique</StyledH2>
          <StyledContainer>
            <Row justify-content="center">
              {orderedSkills.map((elt, i) => (
                <Col key={i} md="4">
                  <StyledP>{elt.name}</StyledP>
                </Col>
              ))}
            </Row>
          </StyledContainer>
        </StyledCardStack>
      </Row>
    );
  }
}

export default CardStack;
