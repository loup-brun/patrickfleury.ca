/* global window */
import Swup from 'swup';

let swup;
let PageTransitions = {
  init: init
}

function init(load, unload) {
  load = load || function () {}; // default to noop
  var dummy = [];
  if (typeof dummy.forEach === 'function') {
    // only bind once, don't re-create new swup instances
    if (swup instanceof Swup) {
      return;
    } else {
      swup = new Swup({
        animateScroll: true
      });

      swup.on('willReplaceContent', unload);
      swup.on('contentReplaced', function () {
        window.scrollTo(0, 0);
        load()
      });
    }
  }
}

export default PageTransitions;
