import Styled from 'styled-components'
import {Row} from 'reactstrap'
export const StyledCardExp = Styled.div `
    min-height: 30vh;
    width: 70%;
    font-family: Lato;
    font-size: 17px;
    background: ${props => props.theme.grey};
    box-shadow: 3px 3px 10px ${props => props.theme.blue};
    border-radius: 3px;
`;
export const StyledH2 = Styled.h2 `
padding-top: 3%;
    text-align: center;
    font-family: Lato ;
    color: ${props => props.theme.black};
`;
export const StyledH4 = Styled.h4 `
    font-family: Cardo;
    font-weight: bold;
    margin-bottom: 4%;
    margin-left: 4%;
    font-size: 21px;
    color: ${props => props.theme.black};
`;
export const StyledP = Styled.p `
    font-size: 15px;
    margin-left: 8%;
    margin-bottom: 5%;
    margin-right: 4%;
`;
export const StyledDiv = Styled.div `
    border-bottom: solid 2px ${props => props.theme.lightBlue};
`;
export const StyledRow = Styled(Row)`
    margin-top: 5%;
`