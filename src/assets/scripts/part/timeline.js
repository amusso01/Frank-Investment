import Glide from "@glidejs/glide";

export default function timeline(){
  new Glide('.glide', {
    type: 'slider',
    startAt: 0,
    perView: 3,
    gap: 20,
    // bound:true,
    peek: {
      before: 0,
      after: 150
    }

  }).mount()

}