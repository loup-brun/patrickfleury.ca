/* global window */
import Swipe from 'swipejs';

let slider = {
  init: init,
  destroy: destroy
};

export default slider;

function init() {
  let swipeElements = [];

  // if we have defined Swipe instances, kill them and start fresh
  if (window.swipeInstances && window.swipeInstances.length) {
    window.swipeInstances.forEach((swipeInst) => {
      swipeInst.api.kill();
    });
  } else {
    // no Swipe instances defined; create empty collection
    window.swipeInstances = [];
  }

  // init each SwipeJS instance
  // @see https://github.com/lyfeyaj/swipe
  swipeElements = document.querySelectorAll('.swipe-js');

  // Make array, otherwise `.forEach()` will not work.
  swipeElements = Array.prototype.slice.call(swipeElements);

  swipeElements.forEach( (sliderElem) => {
    // new swipe instance with raw element

    let swipeInstance = createSlider(sliderElem);

    window.swipeInstances
      .push({
        wrapper: sliderElem,
        api: swipeInstance
      });
  });
}

function destroy() {
  window.swipeInstances.forEach(function (swipeInst) {
    swipeInst.api.kill();
  });
}

function createSlider(sliderElem) {

  let swipeInstance = new Swipe(sliderElem, {
    callback: function (elem, pos) {
      updateSliderNumbers(sliderElem, swipeInstance);

      updateSliderNav(sliderElem, swipeInstance);
    }
  });

  makeSliderNavigation(sliderElem, swipeInstance);

  updateSliderNumbers(sliderElem, swipeInstance);

  return swipeInstance;
}

function makeSliderNavigation(sliderElem, swipeInstance) {
  let prevBtn = sliderElem.querySelector('.swipe-js-btn.-prev');
  let nextBtn = sliderElem.querySelector('.swipe-js-btn.-next');
  let sliderNav = sliderElem.querySelector('.swipe-js-nav');

  if (prevBtn) {
    prevBtn.addEventListener('click', function (ev) {
      swipeInstance.prev()
    });
  }
  if (nextBtn) {
    nextBtn.addEventListener('click', function (ev) {
      swipeInstance.next()
    });
  }

  if (sliderNav) {
    addSliderNav(sliderElem, swipeInstance);
  }
  updateSliderNav(sliderElem, swipeInstance);
}

/**
 * @param slider {Object} [Swipe]
 * @param bullets {DOM Object}
 */
function addSliderNav(sliderElem, swipeInstance) {
  let numSlides = swipeInstance.getNumSlides(),
      sliderNavWrapper = sliderElem.querySelector('.swipe-js-nav'),
      ul = document.createElement('ul'),
      i;

  if (sliderNavWrapper) {
    console.log('we have a slider nav wrapper');
    for (i = 0; i < numSlides; i++) {
      bindEach(i);
    }
    sliderNavWrapper.appendChild(ul);
  }

  // private function for individual binding
  function bindEach(index) {
    let li = document.createElement('li'),
        a = document.createElement('a');

    // Bind click events on bullets
    a.addEventListener('click', function(ev) {
      swipeInstance.slide(index); // go to the nth-slide
    });

    li.appendChild(a);

    ul.appendChild(li);
  }
}

function updateSliderNav(sliderElem, swipeInstance) {

  let children = sliderElem.querySelectorAll('li a'),
      slideIndex = swipeInstance.getPos(),
      i;

  // make array
  children = Array.prototype.slice.call(children);

  // Temporary fix if there are only two slides
  // This strange error happens after resizing the
  // window. The slide index then continues beyond
  // the actual number of slides, then comes back to 0.
  if (slideIndex >= children.length) {
    slideIndex = slideIndex - 2;
  }

  for (i = 0; i < children.length; i++) {
    _removeActive(i);

    if (i === slideIndex) {
      // add active class on nth-bullet
      _addActive(slideIndex);
    }
  }

  // private function for individual class removal
  function _removeActive(n) {
    let a = children[n];

    a.classList.remove('active');
  }
  function _addActive(n) {
    let a = children[n];

    a.classList.add('active');
  }
}


function updateSliderNumbers(sliderElem, swipeInstance) {
  let currentElem = sliderElem.querySelector('.slider-number-current');
  let totalElem = sliderElem.querySelector('.slider-number-total');

  if (totalElem) {
    // set total if not set
    if (totalElem.innerHTML === '') {
      totalElem.innerHTML = sliderElem.querySelector('.swipe-js-wrap').children.length;
    }
  }

  if (currentElem) {
    // update current position
    currentElem.innerHTML = swipeInstance.getPos() + 1; // humans don't start counting at zero
  }
}
