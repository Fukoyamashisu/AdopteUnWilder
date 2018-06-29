//import { StyledSideMenu } from "../styled/StyledSideMenu";
import React from "react";
import { Row, Col } from "reactstrap";
import {
  MainHomeTitle,
  MainHomeDescription,
  Divider
} from "../styled/LeftMenu";
import { NavBar } from "../faac/NavBar";
import mainLogo from "../assets/img/logo_wild_portfolio.png";
import mainTitle from "../assets/img/title_wild_portfolio.png";
import SelectLeftPane from "../components/SelectLeftPane";

export const SideMenu = ({ children, match }) => {
  const contentSkills = {
    title: "Compétences",
    items: [
      {
        value: "0",
        text: "Toutes"
      },
      {
        value: "1",
        text: "Javascript"
      },
      {
        value: "2",
        text: "PHP"
      }
    ]
  };
  const contentCity = {
    title: "Villes",
    items: [
      {
        value: "0",
        text: "Toutes"
      },
      {
        value: "1",
        text: "Lyon"
      },
      {
        value: "2",
        text: "Marseille"
      },
      {
        value: "3",
        text: "BDX"
      }
    ]
  };
  const contentAvailability = {
    title: "Disponibilité",
    items: [
      {
        value: "0",
        text: "Disponible"
      },
      {
        value: "1",
        text: "Embauché :)"
      }
    ]
  };
  console.log(this.props);
  return (
    <Row>
      <Col xs="12" lg="3">
        <NavBar style={{ float: "left" }} />
      </Col>
      <Col xs="12" lg="7" align="left">
        <div style={{ textAlign: "center" }}>
          <img
            src={mainLogo}
            alt="Logo"
            width="70%"
            style={{ marginTop: "3em" }}
          />
        </div>
        <div style={{ textAlign: "center" }}>
          <img
            src={mainTitle}
            alt="Logo"
            width="100%"
            style={{ marginTop: "3em" }}
          />
        </div>
        {/* <MainHomeTitle>
          <span style={{ fontSize: "0.4em" }}>Into the</span>
          <br />
          Wild
        </MainHomeTitle> */}
        <Divider />
        <MainHomeDescription>
          Découvrez les profils des Wilders de la promotion du printemps 2018.
        </MainHomeDescription>
        <Divider />
        <form autoComplete="off">
          <SelectLeftPane content={contentSkills} />
          <SelectLeftPane content={contentCity} />
          <SelectLeftPane content={contentAvailability} />
        </form>
      </Col>
      {/* <Col lg="1"> </Col> */}
    </Row>
    // <StyledSideMenu>{children}</StyledSideMenu>
  );
};
