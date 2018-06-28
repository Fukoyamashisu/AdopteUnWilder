import React, { Component } from 'react';

import { InputGroup, InputGroupAddon } from 'reactstrap';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { StyledSearch } from '../styled/StyledSearchInput';


class SearchBar extends Component {
    constructor(props) {
        super(props);
        this.state = { 
            focus:false,
            search:""
        };
    }


    render() {

        const inputStyle = {
            alignItems: "center",
            borderBottom: `1px solid ${this.state.focus ? "#fa7a0f" : "#006e90"}`,
            color: `${this.state.focus ? "#fa7a0f" : "#006e90"}`,
            padding: "5px"
        }

        return (
            <div style={{width:"60%"}}>
                <InputGroup>
                    <InputGroupAddon addonType="prepend"
                        style={inputStyle}>
                        <FontAwesomeIcon icon="search" />
                    </InputGroupAddon>
                    <StyledSearch
                        type="text"
                        id="inputSearch"
                        name="search"
                        onFocus={() => this.setState({ focus: !this.state.focus })}
                        onBlur={() => this.setState({ focus: !this.state.focus })}
                        onChange={e => this.setState({ search: e.target.value })}
                    />
                </InputGroup>
            </div>
        );
    }
}

export default SearchBar;