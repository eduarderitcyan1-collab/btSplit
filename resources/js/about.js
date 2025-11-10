import Swiper from 'swiper'
import { Navigation } from 'swiper/modules'
import 'swiper/css'
import 'swiper/css/navigation'

document.addEventListener('DOMContentLoaded', () => {
  const container = document.querySelector('.mySwiper')
  if (!container) return

  new Swiper(container, {
    modules: [Navigation],
    slidesPerView: 5,
    spaceBetween: 20,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      500: { slidesPerView: 2 },
      800: { slidesPerView: 3 },
      1100: { slidesPerView: 4 },
      1300: { slidesPerView: 5 },
    },
  })
})
