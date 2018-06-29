import React from "react";
import ReactDOM from "react-dom";
import "./assets/css/index.css";
import App from "./components/App";
import theme from "./styled/theme";
import { ThemeProvider } from "styled-components";
import registerServiceWorker from "./registerServiceWorker";
import { BrowserRouter as Router } from "react-router-dom";


import 'bootstrap/dist/css/bootstrap.min.css';

import { library } from '@fortawesome/fontawesome-svg-core';
<<<<<<< HEAD
import { faChevronRight, faChevronLeft,faBars, faSearch } from '@fortawesome/free-solid-svg-icons';
=======
import { faCheckSquare, faCoffee, faBars, faSearch } from '@fortawesome/free-solid-svg-icons';
>>>>>>> 698257766fbd1ce991253dffe1f9f93ea74c1d15


library.add( faChevronRight, faChevronLeft, faBars, faSearch);

if (module.hot) 
    module.hot.accept();

ReactDOM.render(
    <Router>
    <ThemeProvider theme={theme}>
        <App/>
    </ThemeProvider>
</Router>, document.getElementById('root'));

registerServiceWorker();
