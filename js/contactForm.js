'use strict';

// Stop annoying page refresh!
var submit = document.querySelector('#btn-submit'),
    form = document.querySelector('#form');

submit.addEventListener('click', function (e) {
	e.preventDefault();
	form.reset();
}, false);