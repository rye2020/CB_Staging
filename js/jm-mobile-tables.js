// Responsive filter panel: show on mobile landscape, hide on mobile portrait
document.addEventListener('DOMContentLoaded', function () {
	var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
	var myWrap = document.getElementById('jmWrap');
	var myTopDiv = document.getElementById('top');

	if (!myWrap || !isMobile) return; // nothing to do on desktop or if wrapper is missing

	// Save the server-rendered filter HTML once, before we ever remove it.
	var savedFilterHTML = myWrap.innerHTML;

	function getOrientation() {
		if (screen.orientation && screen.orientation.type) {
			return screen.orientation.type; // "portrait-primary", "landscape-secondary", etc.
		}
		// Fallback for browsers without the Screen Orientation API (older iOS Safari)
		return window.matchMedia('(orientation: portrait)').matches ? 'portrait' : 'landscape';
	}

	function updateFilterPanel() {
		var myDiv = document.getElementById('jm-filter');
		var isPortrait = getOrientation().includes('portrait');

		if (isPortrait) {
			if (myDiv) {
				myDiv.remove();
			}
			if (myTopDiv) myTopDiv.style.paddingLeft = '10px';
		} else {
			if (!myDiv) {
				myWrap.innerHTML = savedFilterHTML;
			}
			if (myTopDiv) myTopDiv.style.paddingLeft = '40px';
		}
	}

	// Run once on load (covers "page loaded in portrait or landscape")
	updateFilterPanel();

	// Run again on every orientation change
	if (screen.orientation && screen.orientation.addEventListener) {
		screen.orientation.addEventListener('change', updateFilterPanel);
	} else {
		// Fallback for browsers without screen.orientation
		window.addEventListener('resize', updateFilterPanel);
	}
});
