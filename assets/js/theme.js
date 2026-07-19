(function () {
	'use strict';

	const supportsReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	if (supportsReducedMotion) {
		document.documentElement.classList.add('reduce-motion');
	}
})();
