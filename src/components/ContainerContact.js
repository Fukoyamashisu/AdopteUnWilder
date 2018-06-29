import React, {Component} from 'react';
import {StyledContainerContact, StyledInput, StyledTextArea, StyledH2} from '../styled/StyledContainerContact'
import {Col, Row} from 'reactstrap'

class ContainerContact extends Component {
    constructor(props) {
        super(props);
        this.state = {};
    }
    render() {
        return (
            <StyledContainerContact>
                <StyledH2>Contacter $prénom $nom</StyledH2>
                <form
                    onSubmit={e => {
                    e.preventDefault();
                    return console.log(e)
                }}>
                    <Row>
                        <Col><StyledInput placeholder="Votre mail"/></Col>
                    </Row>
                    <Row>
                        <Col><StyledInput placeholder="Votre nom"/></Col>
                    </Row>
                    <Row>
                        <Col><StyledInput placeholder="Votre société"/></Col>
                    </Row>
                    <Row>
                        <Col><StyledTextArea placeholder="Votre message"/></Col>
                    </Row>
                    <Row>
                        <Col>
                            <button type="submit">Envoyer</button>
                        </Col>

                    </Row>
                </form>

            </StyledContainerContact>
        );
    }
}

export default ContainerContact;