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
    },
    breakpoints: {
      970: {
        perView: 2
      },
      660:{
        perView: 1,
        peek: {
          before: 0,
          after: 40
        },
      }
    }

  }).mount()

}