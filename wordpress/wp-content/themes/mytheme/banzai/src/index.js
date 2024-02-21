import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import "@fontsource/east-sea-dokdo";
import WebFont from 'webfontloader';

WebFont.load({
   google: {
     families: ['East Sea Dokdo Web:400', 'sans-serif']
   }
});

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <App />
  </React.StrictMode>
);
