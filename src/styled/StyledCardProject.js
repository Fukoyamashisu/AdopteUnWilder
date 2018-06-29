import Styled from "styled-components";
import { Link } from "react-router-dom";

export const StyledCardProject = Styled.div`
    font-family: Lato;
    font-weight: 900;
    width: 100%;
    margin-top: 30px;
    font-size: 17px;
    background: ${props => props.theme.grey};
    box-shadow: 3px 3px 10px ${props => props.theme.dark};
    border-radius: 3px;
`;

export const StyledFooter = Styled.div`
    min-height: 100px;
    width: 100%;
    margin-top: 3%;
    font-family: Lato;
    background: ${props => props.theme.grey};
`;
export const StyledH2 = Styled.h2`
        padding-top: 4%;
        margin-left: 10px;
        font-family: Lato;
`;
export const StyledP = Styled.p`
        margin-left: 10px;
`;
export const StyledA = Styled.a`
        color: ${props => props.theme.orange};
        margin-left: 4%;
`;
export const StyledCardHeader = Styled.div`
    height:250px;
    width: 100%;
    background-image: url(https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
`;
