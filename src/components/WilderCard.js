import React, { Component } from "react";
import {
  Row,
  Col,
  CardBody,
  CardSubtitle,
  CardImg,
  CardText,
  Card,
  Container,
  Button,
  CardTitle
} from "reactstrap";

class WilderCard extends Component {
  constructor(props) {
    super(props);
    this.state = {
      wilderCards: [
        {
          firstname: "exemple",
          lastname: "exemple",
          photo: "ex.jpg",
          langages: ["Javascript", "PHP", "Python"]
        }
      ]
    };
  }
  render() {
    return (
      <div>
        <Container>
          <Row>
            {this.state.wilderCards.map(wilderCard => (
              <Col sm="3">
                <Card>
                  <CardBody>
                    <CardSubtitle />
                  </CardBody>
                  <CardImg
                    width="100%"
                    height="100px"
                    src={wilderCard.photo}
                    alt=""
                  />
                  <CardBody>
                    {wilderCard.disponible === true ? (
                      <CardText className="text-center">oui</CardText>
                    ) : (
                      <CardText className="text-center">non</CardText>
                    )}
                    <CardTitle>
                      {wilderCard.firstname}
                      {wilderCard.lastname}
                    </CardTitle>
                    <CardText className="text-center">
                      {wilderCard.langages.map(langage => (
                        <Button>{langage}</Button>
                      ))}
                    </CardText>
                  </CardBody>
                </Card>
              </Col>
            ))}
          </Row>
        </Container>
      </div>
    );
  }
}

export default WilderCard;
