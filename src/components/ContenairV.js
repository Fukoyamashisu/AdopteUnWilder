import React, { Component } from "react";
import MenuProfile from "./MenuProfile";
import { Container, Row, Col } from "reactstrap";

class ContenairV extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <Container fluid>
        <Row style={{ height: "100vh" }}>
          <Col xs="12" lg="5">
            <MenuProfile {...this.props} />
          </Col>
          <Col xs="12" lg="7" style={{ height: "100vh" }}>
            <p>contenus de la page</p>
          </Col>
        </Row>
      </Container>
    );
  }
}

export default ContenairV;
