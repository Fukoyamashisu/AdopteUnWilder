import React, { Component } from "react";
import { SideMenu } from "../faac/SideMenu";
import { Container, Row, Col } from "reactstrap";
//import cover from "../assets/img/fond_home.jpg";

class ContenairH extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <Container fluid>
        <Row style={{ height: "100vh" }}>
          <Col xs="12" lg="3">
            <SideMenu {...this.props} />
          </Col>
          <Col xs="12" lg="9" style={{ height: "100vh" }}>
            <p>contenus de la page</p>
          </Col>
        </Row>
      </Container>
    );
  }
}

export default ContenairH;
