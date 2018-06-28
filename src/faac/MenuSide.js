import { MenuSide } from '../styled/StyledSlideMenu';
import React from 'react';


export const SideMenu = ({children, match}) => {
    
    return <MenuSide>
        {children}
    </MenuSide>
}
          