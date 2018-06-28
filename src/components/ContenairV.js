import React, { Component } from 'react';
import { SideMenu } from '../faac/MenuSide'



class ContenairV extends Component {
    constructor(props) {
        super(props);
        this.state = {};
    }
    render() {
        return (
     
            <SideMenu>
                <h1 style={{ color: "blue" }}>hello</h1>
            </SideMenu>
        );
    }
}

export default ContenairV;