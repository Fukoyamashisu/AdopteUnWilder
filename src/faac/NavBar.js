import { StyledNav } from '../styled/StyledNavigation';
import React from 'react';
import {Link} from 'react-router-dom';


export const NavBar = (props) => {
    
    return <StyledNav>
                <Link to="/credit">PROPULSED BY</Link>
                <Link to="/createur">CREATORS</Link>
                <Link to="/">HOME</Link>
             </StyledNav>
}
          