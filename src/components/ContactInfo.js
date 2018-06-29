import React, { Component } from "react";
import { List, ListItem, Avatar, ListItemText } from "@material-ui/core";
import { LocationOn, Phone, Today } from "@material-ui/icons";

class ContactInfo extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    return (
      <List dense>
        <ListItem divider>
          <Avatar style={{ backgroundColor: "#006e90" }}>
            <LocationOn />
          </Avatar>
          <ListItemText primary="Ville" secondary="Lyon" />
        </ListItem>
        <ListItem divider>
          <Avatar style={{ backgroundColor: "#006e90" }}>
            <Phone />
          </Avatar>
          <ListItemText primary="Téléphone" secondary="06 69 36 20 71" />
        </ListItem>
        <ListItem divider>
          <Avatar style={{ backgroundColor: "#006e90" }}>
            <Today />
          </Avatar>
          <ListItemText
            primary="Disponibilité"
            secondary="1er septembre 2018"
          />
        </ListItem>
      </List>
    );
  }
}

export default ContactInfo;
