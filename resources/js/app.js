import './bootstrap';
window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js');
require('bootstrap');

$(document).ready(function() {
    let currentUrl = window.location.href;
    let pathArray = currentUrl.split('/');
    let currentTab = pathArray.pop();

    $(`#${currentTab}-nav`).addClass("active");
});