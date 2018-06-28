import React, { Component } from 'react';
import {SideMenu} from '../faac/MenuSide';


class ContenairH  extends Component {
    constructor(props) {
        super(props);
        this.state = {  };
    }
    render() {
        return (
            <SideMenu {...this.props}/>
            
        );
    }
}

export default ContenairH ;