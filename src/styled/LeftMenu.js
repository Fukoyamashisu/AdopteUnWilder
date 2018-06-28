import Styled from "styled-components";

export const MainHomeTitle = Styled.h1`
font-family: "Lato";
font-size: 4rem;
font-weight:900;
color: ${props => props.theme.red};
`;

export const MainHomeDescription = Styled.p`
font-family: "Cardo";
font-size: 1.3rem;
line-Height:1.5rem;
font-style: italic;
`;

export const Divider = Styled.span`
margin:30px 0px;
width: 50%;
border-bottom: 2px solid ${props => props.theme.black};
`;

export const NavItem = Styled.li`
    writing-mode: vertical-rl;
    text-orientation: sideways;
    list-style-type: none;
    margin: 3rem 0rem 3rem 0rem;
    text-align: center;
`;
