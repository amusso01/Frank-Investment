

export default function dropdownNav() {
	const topEl = document.querySelectorAll(".noLink")
	const overlay = document.getElementById('jsMenuBg')
	const mediaQuery = window.matchMedia('(max-width: 920px)')
	


	if (mediaQuery.matches) {

		topEl.forEach(element => {
			element.addEventListener('click', function(){
				let submenu = element.querySelector('.sub-menu-wrap')
				submenu.classList.toggle('is-open-mobile')
			})

		});

	}else{

		topEl.forEach(element => {
			element.addEventListener("mouseover", function (e) {
				let submenu = element.querySelector('.sub-menu-wrap')
				submenu.classList.add('is-active')
				overlay.classList.add('is-active')
	
			});
			element.addEventListener("mouseleave", function (e) {
				let submenu = element.querySelector('.sub-menu-wrap')
				submenu.classList.remove('is-active')
				overlay.classList.remove('is-active')
	
			});

		});
	}




}
