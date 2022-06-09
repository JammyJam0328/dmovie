import './bootstrap';
import KioskBoard from 'kioskboard';
import Keyboard from 'simple-keyboard';
import 'simple-keyboard/build/css/index.css';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



const keyboard = new Keyboard({
    onChange: input => onChange(input),
    onKeyPress: button => onKeyPress(button)
});

function onChange(input) {
    document.querySelector(".input").value = input;
    console.log("Input changed", input);
}

function onKeyPress(button) {
    console.log("Button pressed", button);
}