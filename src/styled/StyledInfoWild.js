import Styled from 'styled-components'
export const StyledInfoWild = Styled.div `
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        
`
export const StyledInfoWildHeader = Styled.div `
        width: 100%;
        height: 20%;
        background: ${props => props.theme.wildColor}
        padding-bottom:5%;
        display:flex;
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
        display:flex;
        width: 100%;
        p {
                margin: 0;
                margin-bottom: 3%;
        }
        h3 {
                font-size: 23px;
                border-top: solid 1px ${props => props.theme.lightBlue}; 
                border-bottom: solid 1px ${props => props.theme.lightBlue}; 
                margin-top: 50px;
                padding: 10px;

                
        }
        img {
                width: 200px;
                height: 200px;
                margin-top: 50px;

        }
`;
