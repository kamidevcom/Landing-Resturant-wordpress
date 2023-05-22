"use strict";

(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var hamburger = document.querySelectorAll(".js-sandwich-menu");

    if (hamburger) {
      var openNav = function openNav() {
        document.getElementsByTagName("html")[0].classList.toggle("is-fixed"), document.querySelector(".js-nav").classList.toggle("is-open");
      };

      hamburger.forEach(function (e) {
        e.addEventListener("click", openNav, !1);
      });
    }
  });
  var tab = document.querySelectorAll(".js-tab__item");

  if (tab) {
    var tabPane = document.querySelectorAll(".js-our-menu__list");

    var openTab = function openTab(id) {
      tab.forEach(function (e, index) {
        if (id == index) {
          e.classList.add("is-active");
          tabPane[index].classList.add("is-active");
        } else {
          e.classList.remove("is-active");
          tabPane[index].classList.remove("is-active");
        }
      });
    };

    tab.forEach(function (e, index) {
      e.addEventListener("click", function () {
        openTab(index);
      });
    });
  }

  var popularDishes = document.querySelector('.js-popular-dishes');

  if (popularDishes) {
    var listener = function listener() {
      pageNumber[0].textContent = flkty.selectedIndex + 1;
    };

    var flkty = new Flickity(popularDishes, {
      // options
      cellAlign: 'left',
      contain: true,
      pageDots: false,
      prevNextButtons: false
    });
    var prevButton = document.querySelector(".js-popular-dishes--previous");
    var nextButton = document.querySelector(".js-popular-dishes--next");
    prevButton.addEventListener("click", function () {
      return flkty.previous(true);
    });
    nextButton.addEventListener("click", function () {
      return flkty.next(true);
    });
    var pageNumber = document.querySelectorAll(".c-popular-dishes__slide-number--content span");
    pageNumber[1].textContent = flkty.getCellElements().length;
    flkty.on('change', listener);
  }

  var plusNumber = document.querySelector(".js-number-plus");

  if (plusNumber) {
    var numberField = document.getElementById('nember-of-people');

    var plus = function plus() {
      numberField.value = Number(numberField.value) + 1;
    };

    plusNumber.addEventListener("click", plus);
  }
})();