/* global IS_DEV */

import slider from './components/slider';

import $ from 'jquery';
import Collapse from 'bootstrap/js/dist/collapse';

function loaded() {
  // init slider
  slider();
}

document.addEventListener('DOMContentLoaded', loaded);
