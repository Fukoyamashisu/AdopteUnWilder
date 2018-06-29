import React from "react";
import ReactDOM from "react-dom";
import "./assets/css/index.css";
import App from "./components/App";
import theme from "./styled/theme";
import { ThemeProvider } from "styled-components";
import registerServiceWorker from "./registerServiceWorker";
import { BrowserRouter as Router } from "react-router-dom";

import "bootstrap/dist/css/bootstrap.min.css";

import { library } from "@fortawesome/fontawesome-svg-core";
import {
  faCheckSquare,
  faCoffee,
  faBars,
  faSearch,
  faChevronRight,
  faChevronLeft
} from "@fortawesome/free-solid-svg-icons";

library.add(faChevronRight, faChevronLeft, faBars, faSearch);

if (module.hot) module.hot.accept();

ReactDOM.render(
  <Router>
    <ThemeProvider theme={theme}>
      <App />
    </ThemeProvider>
  </Router>,
  document.getElementById("root")
);

registerServiceWorker();
