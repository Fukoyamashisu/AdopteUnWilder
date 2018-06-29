import React, { Component } from "react";
import { List, ListItem, Avatar, ListItemText } from "@material-ui/core";

class LanguagesInfo extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <List dense>
        <ListItem button component="a" href="https://github.com/blomki" divider>
          <Avatar style={{ backgroundColor: "#006e90" }}>
            <i className="devicon-github-plain" />
          </Avatar>
          <ListItemText
            primary="blomki"
            secondary="https://github.com/blomki"
          />
        </ListItem>
        <ListItem
          button
          component="a"
          href="https://twitter.com/fabr_fr"
          divider
        >
          <Avatar style={{ backgroundColor: "#006e90" }}>
            <i className="devicon-twitter-plain" />
          </Avatar>
          <ListItemText
            primary="@fabr_fr"
            secondary="https://twitter.com/fabr_fr"
          />
        </ListItem>
        <ListItem
          button
          component="a"
          href="https://www.linkedin.com/in/julienfoucher/"
          divider
        >
          <Avatar style={{ backgroundColor: "#006e90" }}>
            <i className="devicon-twitter-plain" />
          </Avatar>
          <ListItemText
            noWrap="true"
            primary="LinkedIn"
            secondary="Julien Foucher"
          />
        </ListItem>
      </List>
    );
  }
}

export default LanguagesInfo;
