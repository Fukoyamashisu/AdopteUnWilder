//import { StyledSideMenu } from "../styled/StyledSideMenu";
import React, {Component} from "react";
import {Row, Col} from "reactstrap";
import {MainHomeDescription, Divider, MainProfileTitle} from "../styled/LeftMenu";
import mainLogo from "../assets/img/logo_wild_portfolio.png";
import ContactInfo from "../components/ContactInfo";
import LanguagesInfo from "../components/LanguagesInfo";

class MenuProfile extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    const {
      firstname,
      lastname,
      adress,
      phoneNumber,
      workingArea,
      profilTitle,
      profilDescription,
      availability
    } = this.props;
    return (
      <Row>
        <Col lg="1"></Col>
        <Col xs="12" lg="10" align="left">
          <Row
            style={{
            paddingTop: "1em",
            display: "flex"
          }}>
            <Col xs="6">
              <div style={{
                textAlign: "center"
              }}>
                <img
                  src={mainLogo}
                  alt="Logo"
                  width="30%"
                  style={{
                  marginRight: "20px"
                }}/>
                <span
                  style={{
                  fontFamily: "'Lato', Sans Serif",
                  fontSize: "1rem",
                  textTransform: "uppercase"
                }}>
                  Retour
                </span>
              </div>
            </Col>
          </Row>

          <MainProfileTitle>{firstname} {lastname}
            {profilTitle}</MainProfileTitle>
          <Divider/>
          <MainHomeDescription>
            {profilDescription}
          </MainHomeDescription>
          <Divider/>
          <Row>
            <Col xs="12" lg="6">
              <ContactInfo
                workingArea={workingArea}
                phoneNumber={phoneNumber}
                availability={availability}/>
            </Col>
            <Col xs="12" lg="6">
              <LanguagesInfo/>
            </Col>
          </Row>
          <Divider/>
          <Row>
            <Col xs="2">
              <i
                class="devicon-javascript-plain"
                style={{
                fontSize: "3rem"
              }}/>
            </Col>
            <Col xs="2">
              <i
                class="devicon-react-original-wordmark"
                style={{
                fontSize: "3rem"
              }}/>
            </Col>
            <Col xs="2">
              <i
                class="devicon-nodejs-plain"
                style={{
                fontSize: "3rem",
                color: `${props => props.theme.red}`
              }}/>
            </Col>
          </Row>
        </Col>
        <Col lg="1"></Col>
      </Row>
    );
  }
}

export default MenuProfile;
