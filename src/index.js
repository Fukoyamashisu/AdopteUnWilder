import React from 'react';
import ReactDOM from 'react-dom';
import './assets/css/index.css';
import App from './components/App';
import theme from './styled/theme';
import {ThemeProvider} from 'styled-components';
import registerServiceWorker from './registerServiceWorker';

import { library } from '@fortawesome/fontawesome-svg-core'
import { fab } from '@fortawesome/free-brands-svg-icons'
import { faCheckSquare, faCoffee } from '@fortawesome/free-solid-svg-icons'

library.add(fab, faCheckSquare, faCoffee)




if(module.hot) module.hot.accept();



ReactDOM.render(
    <ThemeProvider theme={theme}>
        <App />
    </ThemeProvider>,
     document.getElementById('root'));
registerServiceWorker();
