//import { StyledSideMenu } from "../styled/StyledSideMenu";
import React from "react";
import { Row, Col } from "reactstrap";
import {
  MainHomeTitle,
  MainHomeDescription,
  Divider,
  NavItem
} from "../styled/LeftMenu";
import mainLogo from "../assets/img/logo_wild_portfolio.png";

export const SideMenu = ({ children, match }) => {
  return (
    <Row>
      <Col lg="1"> </Col>
      <Col xs="12" lg="10" align="left">
        <div style={{ textAlign: "center" }}>
          <img
            src={mainLogo}
            alt="Logo"
            width="80%"
            style={{ marginTop: "3em" }}
          />
        </div>
        <MainHomeTitle>
          <span style={{ fontSize: "0.4em" }}>Into the</span>
          <br />
          Wild
        </MainHomeTitle>
        <Divider />
        <MainHomeDescription>
          Découvrez les profils des Wilders de la promotion du printemps 2018.
        </MainHomeDescription>
        <Divider />
        <p>Filtre 1</p>
        <p>Filtre 2</p>
        <p>Filtre 3</p>
      </Col>
      <Col lg="1"> </Col>
    </Row>
    // <StyledSideMenu>{children}</StyledSideMenu>
  );
};
