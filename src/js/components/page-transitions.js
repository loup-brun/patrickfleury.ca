/* global window */
import Swup from 'swup';

let swup;

function PageTransitions(cb) {
  cb = cb || function () {}; // default to noop
  var dummy = document.querySelectorAll('div');
  if (typeof dummy.forEach === 'function') {
    // only bind once, don't re-create new swup instances
    if (swup instanceof Swup) {
      return;
    } else {
      swup = new Swup({
        animateScroll: true
      });

      swup.on('contentReplaced', function () {
        cb();
      });
    }
  }
}

export default PageTransitions;
