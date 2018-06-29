//import { StyledSideMenu } from "../styled/StyledSideMenu";
import React from "react";
import { Row, Col } from "reactstrap";
import {
  MainHomeTitle,
  MainHomeDescription,
  Divider
} from "../styled/LeftMenu";
import mainLogo from "../assets/img/logo_wild_portfolio.png";
import SelectLeftPane from "../components/SelectLeftPane";

export const SideMenu = ({ children, match }) => {
  const contentSkills = {
    title: "Compétences",
    items: [
      {
        value: "",
        text: "Toutes"
      },
      {
        value: "0",
        text: "Javascript"
      },
      {
        value: "1",
        text: "PHP"
      }
    ]
  };
  return (
    <Row>
      <Col lg="1"> </Col>
      <Col xs="12" lg="10" align="left">
        <div style={{ textAlign: "center" }}>
          <img
            src={mainLogo}
            alt="Logo"
            width="70%"
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
        <form autoComplete="off">
          <SelectLeftPane content={contentSkills} />
          <SelectLeftPane content={contentSkills} />
          <SelectLeftPane content={contentSkills} />
        </form>
      </Col>
      <Col lg="1"> </Col>
    </Row>
  );
};
