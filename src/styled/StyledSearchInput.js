import Styled from 'styled-components';



export const StyledSearch = Styled.input`
    font-family:Lato;
    border:none;
    height:40px;
    max-width:100%;
    min-width:80%;
    font-size:24px;
    background:transparent;
    &:focus{
        outline:none;
        &::placeholder{
            color: ${props => props.theme.black};
        }
    }
    &::placeholder{
        color: ${props => props.theme.grey};
        text-align:center;
    }
`