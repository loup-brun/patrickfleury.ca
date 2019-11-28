/* global IS_DEV */

import slider from './components/slider';
//import pageTransitions from './components/page-transitions';

import $ from 'jquery';
import Collapse from 'bootstrap/js/dist/collapse';

function loaded() {
  activate();
  pageTransitions(activate);
}

function activate() {
  // init slider
  slider();

}

document.addEventListener('DOMContentLoaded', loaded);
