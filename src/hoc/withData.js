import React, { Component } from 'react';
import data from '../api.json';
import axios from 'axios';

const withData = WrapComponent => 

    class extends Component {
        constructor(props) {
            super(props);
            this.state = {
                data
            };
            this.getData = this.getData.bind(this);
        }

        componentDidMount(){
            this.getData();
            setInterval(() => {
                this.getData();
            }, 6*1000*20);
        }

        
        getData(){
            axios.get("http://api.adopteflavien.com:8000/").then(res => {
                if(res.data){
                    this.setState({data:res.data});
                }
            }).catch(error => {
                console.log(error);
                this.setState({ data });
            });
        }

        render() {
            return (
            <WrapComponent {...this.props} {...this.state.data}/>
        );
        }
    }



export default withData;