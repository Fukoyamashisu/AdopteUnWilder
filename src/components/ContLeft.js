import React, { Component } from "react";
import { Row, Col, Container } from "reactstrap";
import LeftPane from "./MenuLeft/LeftPane";
import RightPane from "./MenuLeft/RightPane";

class ContLeft extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <Container>
        <Row>
          <Col xs="3">
            <LeftPane />
          </Col>
          <Col Col xs="9">
            <RightPane />
          </Col>
        </Row>
      </Container>
    );
  }
}

export default ContLeft;
