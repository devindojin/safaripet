import React from 'react';
import ReactDOM from 'react-dom';
import Routes from './Routes';
import "antd/dist/antd.css";
import "./style.css";
import HeaderScript from './Core/HeaderScript';

ReactDOM.render(
  // <React.StrictMode>
  <Routes />,
  // </React.StrictMode>,
  document.getElementById('root')
);

// ReactDOM.render( <HeaderScript />, document.getElementById('head_script'));
