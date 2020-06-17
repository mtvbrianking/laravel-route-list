try {
    window.$ = window.jQuery = require('jquery');

    window.Popper = require('popper.js').default;

    require('bootstrap');

    require('datatables.net');
    require('datatables.net-bs4');
} catch (e) {}
