import React, {Component} from "react";
import {List, ListItem, Avatar, ListItemText} from "@material-ui/core";
import {LocationOn, Phone, Today} from "@material-ui/icons";

class ContactInfo extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }
  render() {
    const {availability, phoneNumber, workingArea} = this.props;
    return (
      <List dense>
        <ListItem divider>
          <Avatar style={{
            backgroundColor: "#006e90"
          }}>
            <LocationOn/>
          </Avatar>
          <ListItemText primary="Ville" secondary={workingArea}/>
        </ListItem>
        <ListItem divider>
          <Avatar style={{
            backgroundColor: "#006e90"
          }}>
            <Phone/>
          </Avatar>
          <ListItemText primary="Téléphone" secondary={phoneNumber}/>
        </ListItem>
        <ListItem divider>
          <Avatar style={{
            backgroundColor: "#006e90"
          }}>
            <Today/>
          </Avatar>
          <ListItemText primary="Disponibilité" secondary={availability}/>
        </ListItem>
      </List>
    );
  }
}

export default ContactInfo;
