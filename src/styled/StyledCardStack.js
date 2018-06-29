import Styled from 'styled-components'
import {Col} from 'reactstrap'

export const StyledCardStack = Styled(Col)`
    min-height: 30vh;
    margin-top: 6%;
    font-family: Lato;
    font-size: 17px;
    background: ${props => props.theme.grey};
    box-shadow: 3px 3px 10px ${props => props.theme.blue};
    border-radius: 3px;
    padding-bottom: 3%;
`;
export const StyledH2 = Styled.h2 `
    text-align: center;
    font-family: Cardo;
    color: ${props => props.theme.black};
`;
export const StyledP = Styled.p `
    margin: 3px;
`;
export const StyledContainer = Styled(Col)`
    margin-left: 5%
`