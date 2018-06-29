import Styled from 'styled-components'

export const StyledInfoWild = Styled.div `
        width: 100%;
        height: 100%;
        
`
export const StyledInfoWildHeader = Styled.div `
        min-width: 100%;
        height: 20%;
        background: ${props => props.theme.wildColor}
        padding-bottom:5%;
        text-align:center;
        h1 {
                font-family: Lato;
                font-size: 65px;
                margin-top: 5%;
        };
        p {
                margin: 0;
                font-size: 13px
        };
        a {
                color: ${props => props.theme.red};
        }
`;

export const StyledInfoWildCore = Styled.div `
        margin-left: 5%;
        p {
                margin: 0;
        }
        h3 {
                font-size: 23px;
        }
        img {
                width: 200px;
                height: 200px;
        }
`;
