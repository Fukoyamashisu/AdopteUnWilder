import Styled from 'styled-components';



export const StyledSearch = Styled.input`
    font-family:Lato;
    border:none;
    height:40px;
    font-size:24px;
    &:focus{
        outline:none;
        &::placeholder{
            color: ${props => props.theme.orange};
        }
    }
    &::placeholder{
        color: ${props => props.theme.blue};
        text-align:center;
    }
`