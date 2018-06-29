import Styled from "styled-components";

export const StyledProfilCard = Styled.div`
    display:flex;
    flex-direction:column;
    justify-content:flex-end;
    height:80vh;
    /* background:url(${props => props.url}); */
    
    
    background: linear-gradient(rgba(255,0,0,0) 25%, ${props =>
      props.theme.orange}), url(${props => props.url});
      background-size:cover, cover;
    background-position:center center, center center;
    margin-right:1em;
    margin-left:1em;
    & div{
        position:absolute;
        display:flex;
        justify-content:center;
        top:0;
        border-radius:0 0 5px 0;
        padding:10px;
        color:${props => props.theme.grey};
        background:${props => props.theme.orange} 25%;
    }
`;

export const StyledProfilTitle = Styled.h2`
    color:${props => props.theme.grey};
    margin-bottom:5px;
    margin-left:20px;
    font-family: "Lato";
    font-weight:900;
`;

export const StyledProfilSubTitle = Styled.h3`
    color:${props => props.theme.grey};
    margin-left:20px;
    margin-bottom:15px;
    font-family: "Lato";
    font-weight:900;
`;
