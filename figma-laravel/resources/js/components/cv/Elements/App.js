// resources/js/components/HelloReact.js
import React from 'react';
import ReactDOM from 'react-dom';
import Picker from "./Picker";

export default function App() {
    return (
       <>
       <Picker />
       </>
    )
};

if(document.getElementById('pirated')) {
    ReactDOM.render(<App/>,document.getElementById('pirated'));
}