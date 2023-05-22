(function () {
  'use strict';
  document.addEventListener('DOMContentLoaded', function () {

    let hamburger = document.querySelectorAll(".js-sandwich-menu");
    if (hamburger) {
      let openNav = () => {
        document.getElementsByTagName("html")[0].classList.toggle("is-fixed"), document.querySelector(".js-nav").classList.toggle("is-open")
      };
      hamburger.forEach(((e) => {
        e.addEventListener("click", openNav, !1)
      }))
    }
  });

  let tab = document.querySelectorAll(".js-tab__item");
  if (tab) {
    let tabPane = document.querySelectorAll(".js-our-menu__list");

    let openTab = (id) => {
      tab.forEach((e, index) => {
        if (id == index) {
          e.classList.add("is-active");
          tabPane[index].classList.add("is-active");
        } else {
          e.classList.remove("is-active");
          tabPane[index].classList.remove("is-active");
        }
      })
    }

    tab.forEach(((e, index) => {
      e.addEventListener("click", () => { openTab(index) })
    }))
  }

  let popularDishes = document.querySelector('.js-popular-dishes');
  if (popularDishes) {
    let flkty = new Flickity(popularDishes, {
      // options
      cellAlign: 'left',
      contain: true,
      pageDots: false,
      prevNextButtons: false,
    });

    let prevButton = document.querySelector(".js-popular-dishes--previous");
    let nextButton = document.querySelector(".js-popular-dishes--next");

    prevButton.addEventListener("click", () => flkty.previous(true));
    nextButton.addEventListener("click", () => flkty.next(true));

    let pageNumber = document.querySelectorAll(".c-popular-dishes__slide-number--content span");
    pageNumber[1].textContent = flkty.getCellElements().length;
    function listener() {
      pageNumber[0].textContent = flkty.selectedIndex + 1;
    }

    flkty.on('change', listener);
  }

  let plusNumber = document.querySelector(".js-number-plus");
  if (plusNumber) {
    let numberField = document.getElementById('nember-of-people');

    let plus = () => {
      numberField.value = Number(numberField.value) + 1;
    }
    plusNumber.addEventListener("click", plus);
  }
})();