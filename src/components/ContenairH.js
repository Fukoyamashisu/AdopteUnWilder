import React, { Component } from 'react';
import {SideMenu} from '../faac/MenuSide'


class ContenairH  extends Component {
    constructor(props) {
        super(props);
        this.state = {  };
    }
    render() {
        return (
            <SideMenu>
                <h1 style={{color:"white"}}>hello</h1>
            </SideMenu>
            
        );
    }
}

export default ContenairH ;