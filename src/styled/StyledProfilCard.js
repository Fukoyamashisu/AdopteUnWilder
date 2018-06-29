import Styled from 'styled-components';



export const StyledProfilCard = Styled.div`
    display:flex;
    flex-direction:column;
    justify-content:flex-end;
    height:80vh;
    background:url(${props => props.url});
    background-size:cover;
    background-position:center center;
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
        background:${props => props.theme.orange};
    }
`

export const StyledProfilTitle = Styled.h2`
    color:${props => props.theme.grey};
    margin-bottom:10px;
    margin-left:20px;
`

export const StyledProfilSubTitle = Styled.h3`
    color:${props => props.theme.orange};
    margin-left:30px;
    margin-bottom:15px;
`
