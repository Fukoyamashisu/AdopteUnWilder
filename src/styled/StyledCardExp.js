import Styled from "styled-components";
import { Row, Col } from "reactstrap";
export const StyledCardExp = Styled(Col)`
    min-height: 30vh;
    margin-top: 6%;
    font-family: Lato;
    font-size: 17px;
    background: ${props => props.theme.grey};
    box-shadow: 3px 3px 10px ${props => props.theme.dark};
    border-radius: 3px;
`;
export const StyledH2 = Styled.h2`
    padding-top: 3%;
    text-align: left;
    font-family: Lato ;
    color: ${props => props.theme.black};
    font-family: Lato;
    font-weight: 900;
`;
export const StyledH4 = Styled.h4`
    font-family: Lato;
    font-weight: bold;
    margin-bottom: 4%;
    font-size: 21px;
    color: ${props => props.theme.black};
`;
export const StyledP = Styled.p`
    font-size: 15px;
    margin-left: 8%;
    margin-bottom: 5%;
    margin-right: 4%;
    font-family: Cardo;
`;
export const StyledDiv = Styled.div`
    border-bottom: solid 2px ${props => props.theme.lightBlue};
`;
export const StyledRow = Styled(Row)`
    margin-top: 5%;
`;
