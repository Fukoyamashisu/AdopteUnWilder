import React, { Component } from 'react';
import data from '../api.json';

const withData = WrapComponent => 

    class extends Component {
        constructor(props) {
            super(props);
            this.state = {
                data
            };
        }

        componentDidMount(){

        }
        
        render() {
            return (
            <WrapComponent {...this.props} {...this.state.data}/>
        );
        }
    }



export default withData;