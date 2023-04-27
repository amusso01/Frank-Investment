export default function teamModal(){
  const htmlElement = document.querySelector("html");
  const teamMembers = document.querySelectorAll('.modalTeamMember')
  const closeBtn = document.querySelectorAll('.closeModalBtn')

  teamMembers.forEach(element => {
    element.addEventListener('click', (e)=>{
      e.stopImmediatePropagation()
      e.stopPropagation()

      let modal = element.querySelector('.memberModal')
      modal.classList.add('is-active')
      // prevent content scrolling
      htmlElement.classList.add("noscroll");
    })
  });

  closeBtn.forEach(element => {
    element.addEventListener('click', (e)=>{
      e.stopImmediatePropagation()
      e.stopPropagation()
      let modalID = element.dataset.close;
      let modal =  document.querySelector(`[data-member="${modalID}"]`);
      modal.classList.remove('is-active')
      htmlElement.classList.remove("noscroll");
    })
  });

}
