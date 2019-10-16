/* global window */
import Swipe from 'swipejs';

export default init;

function init() {
  let swipeElements = [];

  // if we have defined Swipe instances, kill them and start fresh
  if (window.swipeInstances && window.swipeInstances.length) {
    window.swipeInstances.forEach((swipeInst) => {
      swipeInst.kill();
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

  swipeElements.forEach( (swipeElem) => {
    // new swipe instance with raw element

    let swipeInstance = createSlider(swipeElem);

    window.swipeInstances
      .push({
        wrapper: swipeElem,
        instance: swipeInstance
      });
  });
}

function createSlider(swipeElem) {
  let currentElem = swipeElem.querySelector('.slider-number-current');
  let totalElem = swipeElem.querySelector('.slider-number-total');

  let swipeInstance = new Swipe(swipeElem, {
    callback: function (pos) {
      if (currentElem) {
        updateSliderNumbers(currentElem, pos);
      }
    }
  });

  makeSliderNavigation(swipeElem, swipeInstance);

  if (totalElem) {
    updateSliderNumbers(currentElem, pos);
  }

  return swipeInstance;
}

function makeSliderNavigation(sliderElem, swipeInstance) {
  let prevBtn = sliderElem.querySelector('.swipe-js-btn.-prev');
  let nextBtn = sliderElem.querySelector('.swipe-js-btn.-next');

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

  addSliderNav(sliderElem, swipeInstance);
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


  function updateSliderBullets(slideIndex, bullets) {
    let children = sliderElem.querySeleectorAll('li a', bullets), i;

    // make array
    children = Array.prototype.slice.call(children);

    for (i = 0; i < children.length; i++) {
      removeActive(i);
    }

    // Temporary fix if there are only two slides
    // This strange error happens after resizing the
    // window. The slide index then continues beyond
    // the actual number of slides, then comes back to 0.
    if (slideIndex >= children.length) {
      slideIndex = slideIndex - 2;
    }

    // add active class on nth-bullet
    let currentBullet = children[slideIndex];
    currentBullet.classList.add('active');

    // private function for individual class removal
    function removeActive(n) {
      let a = children[n];

      a.classList.remove('active');
    }
  }
}

function makeSliderNumbers(totalElem, totalSlides) {
  totalElem.innerHTML = totalSlides;
}

function updateSliderNumbers(currentElem, swipeInstance) {
  currentElem.innerHTML = swipeInstance.getPos() + 1;
}
