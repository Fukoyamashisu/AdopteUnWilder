import React from 'react';
import {StyledInfoWild, StyledInfoWildHeader, StyledInfoWildCore} from '../styled/StyledInfoWild';
import {Col, Row} from 'reactstrap'
import {FontAwesomeIcon} from '@fortawesome/react-fontawesome';
import julien from '../assets/images/Julien.jpeg';
import laetitia from '../assets/images/Laetitia.jpeg';
import jonathan from '../assets/images/Jonathan.jpg'

export const InfoWild = props => {
    const bosses = [
        {
            name: "Laetitia Varela - Campus Manager",
            photo: laetitia,
            description: "Formée au management et à la communication, Laetitia a travaillé dans le secteur" +
                    " de la formation aux côtés des entreprises sur des sujets liés au recrutement et" +
                    " à l’alternance. Passionnée par l’éducation, elle rejoint la Wild Code School de" +
                    " Lyon pour promouvoir les nouvelles pratiques pédagogiques en lien avec le monde" +
                    " professionnel d’aujourd’hui.",
            skills: ["Parfois sympathique", "Vigilante sur les acariens", "BLEU OU NOIR BORDEL", "Penser à acheter du spray pour les toilettes du rdc"]
        }, {
            name: "Julien Boyer - Formateur JS",
            photo: julien,
            description: "Fan et féru de frameworks Backend,consultant & formateurs à différentes écoles a" +
                    "uparavant, en missions sur Paris/Lyon pour la formation/consulting vers les fram" +
                    "eworks Backend/Frontend et un peu de mobile (Android, Nativescript, Ionic2).",
            skills: ["Too much Dialog Flow", "A battu Bootstrap en duel", "Pro de la division", "Bim ! Bam ! BIM BIMM BIIIIM ! PAAF"]
        }, {
            name: "Jonanthan Plantey - Formateur PHP",
            photo: jonathan,
            description: "C’est après son BTS IRIS (programmation C / C++) que Jonathan découvre et se pas" +
                    "sionne pour le développement web. Sa licence pro en poche, il passera ensuite pl" +
                    "us de 7 ans dans le métier de développeur avant de se lancer dans la formation.",
            skills: ["API MASTER", "Soirée cuire moustache", "Il attend", "$?$?$$????$$?$?$$???$??$?????$$$$?$????$$?????$$$??????$$"]
        }
    ]
    return <StyledInfoWild>
        <StyledInfoWildHeader>
            <h1>Wild Code School Lyon</h1>
            <p>17 rue Delandine, 69002 Lyon</p>
            <p><FontAwesomeIcon icon="phone"/>
                +33 6 58 46 83 32</p>
            <a href="https://wildcodeschool.fr/lyon/">Visiter notre site</a>
        </StyledInfoWildHeader>
        <StyledInfoWildCore>
            {bosses.map((elt, i) => <Row key={i}>
                {elt.photo === julien
                    ? <Col md="3">
                            <img alt="" src={elt.photo}/>
                        </Col>
                    : <Col md="8">
                        <h3>{elt.name}</h3>
                        <p>{elt.description}</p>
                        <Row>
                            {elt
                                .skills
                                .map((elt, i) => <Col md="3">
                                    {elt}
                                </Col>)}
                        </Row>
                    </Col>}
                {elt.photo === julien
                    ? <Col md="8">
                            <h3>{elt.name}</h3>
                            <p>{elt.description}</p>
                            <Row>
                                {elt
                                    .skills
                                    .map((elt, i) => <Col md="3">
                                        {elt}
                                    </Col>)}
                            </Row>
                        </Col>
                    : <Col md="3">
                        <img alt="" src={elt.photo}/>
                    </Col>}
            </Row>)}
        </StyledInfoWildCore>
    </StyledInfoWild>
}