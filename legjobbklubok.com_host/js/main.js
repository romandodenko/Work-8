"use strict"

// window.addEventListener("load", windowLoad);
window.addEventListener("DOMContentLoaded", windowLoad);

function windowLoad() {
  document.documentElement.classList.add("loaded");

  // Открытие и закрытие бургера

  const menu = document.querySelector(".header__menu");

  document.addEventListener("click", function (e) {

    const elementInteractive = e.target;

    if (elementInteractive.closest(".burger")) { // Открытие и закрытие бургера
      menu.classList.add("menu-active")
      document.body.style.overflow = "hidden";
    }
    if (elementInteractive.closest(".header__exit-menu")) { // Открытие и закрытие бургера 
      menu.classList.remove("menu-active")
      document.body.style.overflow = "";
    }
    if (elementInteractive.closest(".nav__link")) { // Открытие и закрытие бургера
      menu.classList.remove("menu-active")
      document.body.style.overflow = "";
    }
  })

  // Скрипт для проверки , поддерживает ли браузер webp 

  function testWebP(callback) {
    var webP = new Image();

    webP.onload = webP.onerror = function () {
      callback(webP.height == 2);
    };

    webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
  }

  testWebP(function (support) {
    if (support == true) {
      document.querySelector('body').classList.add('webp');
    } else {
      document.querySelector('body').classList.add('no-webp');
    }
  });

  const mnenieSliderInit = document.querySelector(".mnenie-swlider-init");

  if (mnenieSliderInit) {
    const mnenieSlider = new Swiper('.mnenie-swlider-init', {
      observer: true,
      observeParents: true,
      watchOverflow: true,
      direction: 'horizontal',
      pagination: {
        el: '.mnenie__nums',
        clickable: true,
        type: 'fraction'
      },
      navigation: {
        nextEl: '.mnenie-slider-next',
        prevEl: '.mnenie-slider-prev',
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 24,
        },
        769: {
          slidesPerView: 2,
          spaceBetween: 24,
        },
        992: {
          slidesPerView: 2,
          spaceBetween: 55
        }
      },
    });

    const mnenieBottom = document.querySelector(".mnenie__bottom");

    const mnenieControls = document.querySelector(".mnenie__controls");

    if (document.body.clientWidth < 992) {
      if (mnenieBottom && mnenieControls) {
        mnenieBottom.append(mnenieControls);
      }
    }

  }

  const popup = document.querySelector(".popup");

  if (popup) {
    function setCookie(name, value, days) {
      let expires = "";
      if (days) {
        let date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
      let matches = document.cookie.match(
        new RegExp(
          "(?:^|; )" +
          name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") +
          "=([^;]*)"
        )
      );
      return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    function checkCookies() {
      let cookieNote = document.querySelector(".popup-active"); // элемент
      let cookieBtnAccept = cookieNote.querySelector(".popup__button"); // кнопка

      // Если куки cookies_policy нет или она просрочена, то показываем уведомление
      if (!getCookie("cookies_policy")) {
        cookieNote.classList.add("show");
      }

      // При клике на кнопку устанавливаем куку cookies_policy на один год
      cookieBtnAccept.addEventListener("click", function () {
        setCookie("cookies_policy", "true", 365);
        cookieNote.classList.remove("show");
      });
    }

    checkCookies();
  }
};