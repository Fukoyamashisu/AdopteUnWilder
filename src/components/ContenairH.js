import React, { Component } from "react";
import { Col, Row } from "reactstrap";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
//Styled-Components
import { StyledContainerH, StyledRow } from "../styled/StyledContainer";

import SimpleSlider from "./SimpleSlider";

import SearchBar from "./SearchBar";
import { NavBar } from "../faac/NavBar";
import { SideMenu } from "../faac/SideMenu";
import cover from "../assets/img/fond_home.jpg";

class ContenairH extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }

  render() {
    return (
      <StyledContainerH>
        <StyledRow>
          {/* <Col md="1" id="NavBarV" style={{ background: "red" }} /> */}
          <Col md="3" id="SideMenuMain">
            <SideMenu />
          </Col>
          <Col>
            <StyledRow
              style={{
                backgroundImage: `url(${cover})`,
                backgroundSize: "cover"
              }}
            >
              <Col>
                <Row>
                  <Col md={{ size: "6", offset: 2 }}>
                    <SearchBar />
                  </Col>
                </Row>
                <StyledRow align>
                  <Col>
                    <StyledRow slick>
                      <SimpleSlider />
                    </StyledRow>
                  </Col>
                </StyledRow>
              </Col>
            </StyledRow>
          </Col>
        </StyledRow>
      </StyledContainerH>
    );
  }
}

export default ContenairH;
