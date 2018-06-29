import { StyledNav } from '../styled/StyledNavigation';
import React from 'react';
import {Link} from 'react-router-dom';


export const NavBar = (props) => {
    
    return <StyledNav>
                <Link to="/credit">Credit</Link>
                <Link to="/createur">Createur</Link>
                <Link to="/">Home</Link>
             </StyledNav>
}
          