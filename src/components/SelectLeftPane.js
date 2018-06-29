import React, { Component } from "react";
import { FormControl, InputLabel, Select, MenuItem } from "@material-ui/core";

class SelectLeftPane extends Component {
  constructor(props) {
    super(props);
    this.state = {};
    this.handleChange = this.handleChange.bind(this);
  }
  handleChange(event) {
    console.log(event.target.value);
  }
  render() {
    const { title, items } = this.props.content;

    return (
      <FormControl style={{ width: "100%", marginBottom: "15px" }}>
        <InputLabel htmlFor={title}>{title}</InputLabel>
        <Select
          value={title}
          onChange={this.handleChange}
          inputProps={{
            name: `${title}`,
            id: { title }
          }}
        >
          {items.map((element, i) => {
            return (
              <MenuItem
                key={i}
                value={element.value}
                // {i === 0 ? selected : null)}
              >
                {element.text}
              </MenuItem>
            );
          })}
        </Select>
      </FormControl>
    );
  }
}

export default SelectLeftPane;
