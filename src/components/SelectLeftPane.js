import React, { Component } from "react";
import { FormControl, InputLabel, Select, MenuItem } from "@material-ui/core";

class SelectLeftPane extends Component {
  constructor(props) {
    super(props);
    this.state = {
      content: this.props.content
    };
    this.handleChange = this.handleChange.bind(this);
  }
  handleChange(event) {
    console.log("Modification du select");
  }
  render() {
    const { content } = this.state;
    return (
      <FormControl style={{ width: "100%", marginBottom: "15px" }}>
        <InputLabel>{content.title}</InputLabel>
        <Select value={content.title}>
          <MenuItem value="">Toutes</MenuItem>
          <MenuItem value="0">Element 1</MenuItem>
          <MenuItem value="1">Element 2</MenuItem>
        </Select>
      </FormControl>
    );
  }
}

export default SelectLeftPane;
