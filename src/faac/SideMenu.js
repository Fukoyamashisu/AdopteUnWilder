//import { StyledSideMenu } from "../styled/StyledSideMenu";
import React from "react";
import { Container, Row, Col } from "reactstrap";
import { MainHomeTitle, MainHomeDescription } from "../styled/LeftMenu";

export const SideMenu = ({ children, match }) => {
  return (
    <Row>
      <Col xs="3">menu gauche</Col>
      <Col xs="9">
        <img
          src="https://placeholdit.imgix.net/~text?txtsize=33&txt=256%C3%97180&w=256&h=180"
          alt="Logo"
          width="200px"
        />
        <MainHomeTitle color="black">New Wilders</MainHomeTitle>
        <MainHomeDescription>
          No matter what people tell you, words and ideas can change the world.
        </MainHomeDescription>
        <p>Filtre 1</p>
        <p>Filtre 2</p>
        <p>Filtre 3</p>
      </Col>
    </Row>
    // <StyledSideMenu>{children}</StyledSideMenu>
  );
};
