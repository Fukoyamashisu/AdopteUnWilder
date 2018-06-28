import React, { Component } from "react";
import { SideMenu } from "../faac/SideMenu";
import { Container, Row, Col } from "reactstrap";

class ContenairH extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <Container fluid>
        <Row style={{ marginTop: "20px" }}>
          <Col xs="3">
            <SideMenu {...this.props} />
          </Col>
          <Col xs="3">
            <p>contenus</p>
          </Col>
        </Row>
      </Container>
    );
  }
}

export default ContenairH;
