import Styled from 'styled-components';



export const StyledSearch = Styled.input`
    font-family:Lato;
    border:none;
    border-bottom:1px solid ${props => props.theme.darkBlue};
    height:40px;
    width:50%;
    font-size:20px;
    &:focus{
        outline:none;
        border-bottom: 1px solid ${props => props.theme.orange};
    }
`