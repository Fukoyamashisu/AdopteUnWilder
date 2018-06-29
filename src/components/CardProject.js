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
        this.state = {};
    }
    render() {
        const {projects} = this.props;
        return (
            <Row>
                {projects
                    ? projects.map((elt, i) => <Col key={i} md="5">
                        <StyledCardProject>
                            <StyledCardHeader>
                                <StyledH2>{elt.title}</StyledH2>
                            </StyledCardHeader>
                            <StyledFooter>
                                <StyledP>{elt.description}</StyledP>
                                <StyledA href={elt.link}>Lien github</StyledA>
                            </StyledFooter>
                        </StyledCardProject>
                    </Col>)
                    : null}
            </Row>

        );
    }
}

export default CardProject;