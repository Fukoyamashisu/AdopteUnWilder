import Styled from "styled-components";

export const MainHomeTitle = Styled.h1`
font-family: "Lato";
font-size: 6rem;
font-weight:900;
line-height:4.5rem;
color: ${props => props.theme.black};
margin-Top: 1rem;
text-transform: uppercase;
`;

export const MainProfileTitle = Styled.h1`
font-family: "Lato";
font-size: 3rem;
font-weight:900;
color: ${props => props.theme.black};
margin-Top: 2rem;
text-transform: uppercase;
`;

export const MainHomeDescription = Styled.p`
font-family: "Cardo";
font-size: 1.1rem;
line-height:1.5rem;
font-style: italic;
`;

export const Divider = Styled.div`
margin:30px 0px;
width: 30%;
height:10px;
border-bottom: 6px solid ${props => props.theme.red};
`;

export const NavItem = Styled.li`
    writing-mode: vertical-rl;
    text-orientation: sideways;
    list-style-type: none;
    margin: 3rem 0rem 3rem 0rem;
    text-align: center;
`;
