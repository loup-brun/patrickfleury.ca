/* global IS_DEV */

import slider from './components/slider';
import pageTransitions from './components/page-transitions';

import $ from 'jquery';
import Collapse from 'bootstrap/js/dist/collapse';

function loaded() {
  activate();
  pageTransitions.init(activate, deactivate);
}

function activate() {
  // init slider
  slider.init();

  if (window.pfClasses) {
    console.log('we have pfclasses', window.pfClasses)
    window.pfClasses.forEach(function (colorName) {
      document.body.classList.remove('bg-' + colorName);
    });
    let newColor = window.pfClasses[Math.floor(Math.random() * window.pfClasses.length)];
    console.log('add new color', newColor);
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
