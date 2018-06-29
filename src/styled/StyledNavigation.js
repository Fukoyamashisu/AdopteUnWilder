import Styled from "styled-components";

export const StyledNav = Styled.div`
    position:sticky;
    display:flex;
    flex-direction:column;
    justify-content:space-around;
    width:50px;
    height:100%;
    background:transparent;
    margin-left:-15px;
    transform:rotate(180deg);
    border-left:1px solid ${props => props.theme.lightBlue};
    padding:5px;
    & a{
        letter-spacing:1px;
        text-decoration:none;
        writing-mode: vertical-rl;
        font-family:Lato;
        font-size:20px;
        padding:5px;
        color:${props => props.theme.blue};
        &:hover {
            color:${props => props.theme.darkBlue};
            text-decoration:none;
            border-left:4px solid ${props => props.theme.blue};
        }
    }
`;
