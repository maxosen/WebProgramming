var htmlTabs = [];
var cssTabs = [];
var jsTabs = [];
var htmlBtns = [];
var cssBtns = [];
var jsBtns = [];

for (var i = 0; i < 3; i++) {
  htmlTabs.push(document.querySelector('[data-tab="html-' + i + '"]'));
  cssTabs.push(document.querySelector('[data-tab="css-' + i + '"]'));
  jsTabs.push(document.querySelector('[data-tab="js-' + i + '"]'));
  var buttons = Array.from(document.getElementsByClassName("code__tab-button"));
  htmlBtns = buttons.slice(0, 3);
  cssBtns = buttons.slice(3, 6);
  jsBtns = buttons.slice(6, 9);
}

function setTab(e, tabName) {
  var split = tabName.split("-"),
      tab = split[0],
      index = split[1];

  if (tab === 'html') {
    htmlTabs.forEach(function (tab) {
      return tab.classList.remove('active');
    });
    htmlBtns.forEach(function (btn) {
      return btn.classList.remove('active');
    });
    htmlTabs[index].classList.add('active');
  }

  if (tab === 'css') {
    cssTabs.forEach(function (tab) {
      return tab.classList.remove('active');
    });
    cssBtns.forEach(function (btn) {
      return btn.classList.remove('active');
    });
    cssTabs[index].classList.add('active');
  }

  if (tab === 'js') {
    jsTabs.forEach(function (tab) {
      return tab.classList.remove('active');
    });
    jsBtns.forEach(function (btn) {
      return btn.classList.remove('active');
    });
    jsTabs[index].classList.add('active');
  }

  e.currentTarget.classList.add('active');
}

function setActiveLink() {
  var aboutY = 0;
  var techY = document.getElementById("tech-section").getBoundingClientRect().top + window.pageYOffset;
  var htmlY = document.getElementById("html").getBoundingClientRect().top + window.pageYOffset;
  var cssY = document.getElementById("css").getBoundingClientRect().top + window.pageYOffset;
  var jsY = document.getElementById("js").getBoundingClientRect().top + window.pageYOffset;

  function getReadingSection() {
    var midY = (window.innerHeight / 2) + window.pageYOffset;
    if (midY > jsY) {
      return "js";
    } else if (midY > cssY) {
      return "css";
    } else if (midY > htmlY) {
      return "html";
    } else if (midY > techY) {
      return "tech";
    } else if (midY > aboutY) {
      return "about";
    }
  }
  Array.from(document.getElementsByClassName("nav-link")).forEach(el => el.classList.remove("active"));
  document.querySelector(`a[href='#${getReadingSection()}']`).parentElement.classList.add("active");
}

window.onscroll = setActiveLink;