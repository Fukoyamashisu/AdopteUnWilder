import React, {Component} from 'react';
import {
    StyledCardProject,
    StyledFooter,
    StyledCardHeader,
    StyledH2,
    StyledA,
    StyledP
} from '../styled/StyledCardProject';
import {Col, Row} from 'reactstrap'

class CardProject extends Component {
    constructor(props) {
        super(props);
        this.state = {
            projects: [
                {
                    title: "Adopte Un Wilder",
                    description: "Projet de portefolio skvhlhg hsjvhsf fhjsv vhsjfv dfhsqjvh sjkvjksvh shsj",
                    link: "https://www.youtube.com/watch?v=UoBusD8-EwQ"
                }, {
                    title: "Adopte Un Wilder",
                    description: "Projet de portefolio skvhlhg hsjvhsf fhjsv vhsjfv dfhsqjvh sjkvjksvh shsj",
                    link: "https://www.youtube.com/watch?v=UoBusD8-EwQ"
                }, {
                    title: "Adopte Un Wilder",
                    description: "Projet de portefolio skvhlhg hsjvhsf fhjsv vhsjfv dfhsqjvh sjkvjksvh shsj",
                    link: "https://www.youtube.com/watch?v=UoBusD8-EwQ"
                }, {
                    title: "Adopte Un Wilder",
                    description: "Projet de portefolio skvhlhg hsjvhsf fhjsv vhsjfv dfhsqjvh sjkvjksvh shsj",
                    link: "https://www.youtube.com/watch?v=UoBusD8-EwQ"
                }
            ]
        };
    }
    render() {
        const {projects} = this.state;
        return (
            <Row>
                {projects.map((elt, i) => <Col key={i} md="5">
                    <StyledCardProject>
                        <StyledCardHeader>
                            <StyledH2>{elt.title}</StyledH2>
                        </StyledCardHeader>
                        <StyledFooter>
                            <StyledP>{elt.description}</StyledP>
                            <StyledA href={elt.link}>Lien github</StyledA>
                        </StyledFooter>
                    </StyledCardProject>
                </Col>)}
            </Row>

        );
    }
}

export default CardProject;