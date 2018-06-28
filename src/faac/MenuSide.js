import { MenuSide } from '../styled/StyledSlideMenu';
import React from 'react';


export const SideMenu = (props) => 
            <MenuSide>
                {props.children}
            </MenuSide>