/* global IS_DEV */

import slider from './components/slider';
import pageTransitions from './components/page-transitions';

import $ from 'jquery';
import Collapse from 'bootstrap/js/dist/collapse';

function loaded() {
  // my little credit
  console.log("%cHello! 👋", "font-family: sofia-pro, 'Sofia Pro Regular', Avenir, Gotham, SegoeUI, sans-serif; font-size: 60px");
  console.log("%cMy name is Louis, I’m the developer behind this cool website, designed by Stéphanie Giroux in beautiful Montréal, Québec. Don’t be shy, say hi!", "font-family: sofia-pro, 'Sofia Pro Regular', Avenir, Gotham, SegoeUI, sans-serif; font-size: 24px");
  console.log("%c<louis at loupbrun dot ca>", "font-family: Menlo, Courier, monospace; font-size: 24px");

  activate();
  pageTransitions.init(activate, deactivate);
}

function activate() {
  // init slider
  slider.init();

  if (window.pfClasses) {
    window.pfClasses.forEach(function (colorName) {
      document.body.classList.remove('bg-' + colorName);
    });
    let newColor = window.pfClasses[Math.floor(Math.random() * window.pfClasses.length)];
    document.body.classList.add('bg-' + newColor);
  }
}

function deactivate() {
  slider.destroy();

//  let wpAdminBar = document.getElementById('wpadminbar');
//  if (wpAdminBar) {
//    wpAdminBar.parentElement.removeChild(wpAdminBar);
//  }
}

document.addEventListener('DOMContentLoaded', loaded);
