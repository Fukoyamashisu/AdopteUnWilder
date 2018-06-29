import Styled from 'styled-components'

export const StyledContainerContact = Styled.div `
    width: 100%;
    height: 100%;
    background:white;
    text-align: center;
`;

export const StyledInput = Styled.input `
        margin-top:3%;
        border: none;
        border-right: dashed 1px;
        border-bottom: solid 1px;
        width: 50%
        &:focus{
            outline: none;
            border-color: ${props => props.theme.orange};
            ::placeholder{
                color:${props => props.theme.orange}
            }
        }
`;

export const StyledTextArea = Styled.textarea `
        width: 50%; 
        height: 250px;
        margin-top:3%;
        ::placeholder {
            text-align:center;
            font-size: 25px;
            padding-top: 20%;
        };
        &:focus{
            outline: none;
            border-color: ${props => props.theme.orange};
            ::placeholder{
                color: ${props => props.theme.orange}
            }
        }
`;

export const StyledH2 = Styled.h2 `
        
`