/**
 * CarRentals front-end behaviour, without jQuery: full-height banner rows,
 * the Superfish drop-down menu, the mobile menu built from a copy of the main
 * menu, smooth scrolling to on-page anchors and the header's scrolled state.
 */
(function () {
  'use strict';

  var UI = window.ColorlibUI;
  if (!UI) return;

  // jQuery's .height(): the element's content box.
  function contentHeight(el) {
    var style = window.getComputedStyle(el);
    return el.clientHeight - parseFloat(style.paddingTop) - parseFloat(style.paddingBottom);
  }

  function setHeight(selector, px) {
    UI.toElements(selector).forEach(function (el) {
      el.style.height = px + 'px';
    });
  }

  function toggleClasses(selector, a, b) {
    UI.toElements(selector).forEach(function (el) {
      el.classList.toggle(a);
      el.classList.toggle(b);
    });
  }

  // jQuery's .toggle(): hide a shown element, show a hidden one.
  function toggleDisplay(el) {
    if (window.getComputedStyle(el).display === 'none') {
      el.style.display = '';
      if (window.getComputedStyle(el).display === 'none') el.style.display = 'block';
    } else {
      el.style.display = 'none';
    }
  }

  // The element a #hash points at. jQuery threw on a hash that is not a valid
  // selector, and on one whose element does not exist; this returns null.
  function hashTarget(hash) {
    if (!hash || hash === '#') return null;
    try {
      return document.querySelector(hash);
    } catch (e) {
      return null;
    }
  }

  UI.ready(function () {
    var windowHeight = window.innerHeight;
    var header = document.querySelector('.default-header');

    setHeight('.fullscreen', windowHeight);
    if (header) setHeight('.fitscreen', windowHeight - contentHeight(header));
  });

  if (document.getElementById('default-select')) {
    UI.enhanceSelects('select');
  }

  //  Counter Js
  if (document.getElementById('facts-area')) {
    UI.counter('.counter', { time: 1000 });
  }

  UI.ready(function () {
    // Initiate superfish on nav menu
    UI.superfish('.nav-menu', {
      animation: {
        opacity: 'show'
      },
      speed: 400
    });

    // Mobile Navigation: a copy of the menu as Superfish left it.
    var container = document.getElementById('nav-menu-container');
    if (!container) {
      ['mobile-nav', 'mobile-nav-toggle'].forEach(function (id) {
        var el = document.getElementById(id);
        if (el) el.style.display = 'none';
      });
      return;
    }

    var mobileNav = container.cloneNode(true);
    mobileNav.id = 'mobile-nav';
    Array.prototype.forEach.call(mobileNav.children, function (child) {
      if (child.tagName === 'UL') {
        child.setAttribute('class', '');
        child.setAttribute('id', '');
      }
    });
    document.body.appendChild(mobileNav);
    document.body.insertAdjacentHTML('afterbegin', '<button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>');
    document.body.insertAdjacentHTML('beforeend', '<div id="mobile-body-overly"></div>');
    UI.toElements(mobileNav.querySelectorAll('.menu-has-children')).forEach(function (li) {
      li.insertAdjacentHTML('afterbegin', '<i class="lnr lnr-chevron-down"></i>');
    });

    var toggle = document.getElementById('mobile-nav-toggle');
    var overlay = document.getElementById('mobile-body-overly');

    // Sub-menu arrows open and close their sub-menu.
    document.addEventListener('click', function (e) {
      var icon = e.target.closest && e.target.closest('.menu-has-children i');
      if (!icon) return;
      if (icon.nextElementSibling) icon.nextElementSibling.classList.toggle('menu-item-active');
      var sub = icon.nextElementSibling;
      while (sub && sub.tagName !== 'UL') sub = sub.nextElementSibling;
      if (sub) UI.slide(sub, 'toggle');
      icon.classList.toggle('lnr-chevron-up');
      icon.classList.toggle('lnr-chevron-down');
    });

    document.addEventListener('click', function (e) {
      if (!toggle.contains(e.target)) return;
      document.body.classList.toggle('mobile-nav-active');
      toggleClasses('#mobile-nav-toggle i', 'lnr-cross', 'lnr-menu');
      toggleDisplay(overlay);
    });

    // A click anywhere else closes the menu.
    document.addEventListener('click', function (e) {
      if (mobileNav.contains(e.target) || toggle.contains(e.target)) return;
      if (document.body.classList.contains('mobile-nav-active')) {
        document.body.classList.remove('mobile-nav-active');
        toggleClasses('#mobile-nav-toggle i', 'lnr-cross', 'lnr-menu');
        UI.fade(overlay, 'out');
      }
    });
  });

  // Smooth scroll for the menu and links with .scrollto classes
  UI.ready(function () {
    UI.toElements('.nav-menu a, #mobile-nav a, .scrollto').forEach(function (link) {
      link.addEventListener('click', function (e) {
        if (!link.hash) return;
        if (location.pathname.replace(/^\//, '') !== link.pathname.replace(/^\//, '') || location.hostname !== link.hostname) return;
        var target = hashTarget(link.hash);
        if (!target) return;

        var header = document.getElementById('header');
        var topSpace = header ? header.getBoundingClientRect().height : 0;
        UI.scrollToY(UI.offset(target).top - topSpace, 1500);

        if (link.parentElement && link.parentElement.closest('.nav-menu')) {
          UI.toElements('.nav-menu .menu-active').forEach(function (el) {
            el.classList.remove('menu-active');
          });
          var item = link.closest('li');
          if (item) item.classList.add('menu-active');
        }

        if (document.body.classList.contains('mobile-nav-active')) {
          document.body.classList.remove('mobile-nav-active');
          toggleClasses('#mobile-nav-toggle i', 'lnr-cross', 'lnr-menu');
          UI.fade('#mobile-body-overly', 'out');
        }
        e.preventDefault();
        e.stopPropagation();
      });
    });
  });

  // Arriving with a #hash: the page is hidden for a tick, shown at the top,
  // then scrolled smoothly to 62px above the target.
  UI.ready(function () {
    if (!window.location.hash) return;
    var roots = [document.documentElement, document.body];
    roots.forEach(function (el) { el.style.display = 'none'; });
    setTimeout(function () {
      window.scrollTo(0, 0);
      roots.forEach(function (el) { el.style.display = ''; });
      var target = hashTarget(window.location.hash);
      if (target) UI.scrollToY(UI.offset(target).top - 62, 1000);
    }, 0);
  });

  // Header scroll class
  window.addEventListener('scroll', function () {
    var header = document.getElementById('header');
    if (header) header.classList.toggle('header-scrolled', window.pageYOffset > 100);
  }, { passive: true });
}());
