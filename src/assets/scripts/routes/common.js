import smoothscroll from "smoothscroll-polyfill";
// import hamburger from "./../part/hamburger";
import dropdownNav from "../part/dropdownNav";
import fdryAccordion from "../part/accordion";
import timeline from "../part/timeline";

// https://github.com/aFarkas/lazysizes
import 'lazysizes';
import 'lazysizes/plugins/bgset/ls.bgset';
import 'lazysizes/plugins/parent-fit/ls.parent-fit';

export default {
	init() {
		// JavaScript to be fired on all pages

		// kick off the polyfill!
		smoothscroll.polyfill()

		// Hamburger event listener
		// hamburger()

		// NAV
		dropdownNav()

		// ACCORDION
		const accordion = document.querySelector('.accordion-container')
		if (typeof(accordion) != 'undefined' && accordion != null){
			fdryAccordion();
		}

		// timeline
		const timelineWrapper = document.querySelector('.glide')
		if (typeof(timelineWrapper) != 'undefined' && timelineWrapper != null){
			timeline();
		}
	
	},

	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
	},
};
