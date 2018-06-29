import Styled from 'styled-components'
import {Row} from 'reactstrap'

export const StyledNavbarBottomImg = Styled.img `
    width: 50px;
    height: 50px;
`;
export const StyledNavbarBottom = Styled.div `
    position: sticky;
    z-index: 1000;
    bottom: 0;
    display: flex;
    width: 100%;
    height: 60px;
    padding: 5px;
    border-top:solid 1px ${props => props.theme.lightBlue};
`;
export const StyledNavbarBottomRow = Styled.div `
    display: flex;
    width: 100%;
    justify-content: center;
    height: 100%;
    align-items: center;
`;
