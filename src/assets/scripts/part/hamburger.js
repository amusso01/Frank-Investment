export default function hamburger() {
	const burger = document.getElementById("pencet");
	const mainMenu = document.querySelector(".site-header__menu");
	const htmlElement = document.querySelector("html");
	burger.addEventListener("click", function (e) {
		mainMenu.classList.toggle("is-active");
		burger.classList.toggle("is-active");

		// prevent content scrolling
		htmlElement.classList.toggle("noscroll");
	});
}
