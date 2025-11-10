const wishButtons = document.querySelectorAll('.addToWish')

wishButtons.forEach(button => {
  button.addEventListener('click', function (event) {
    event.preventDefault() // чтобы ссылка не прыгала
    this.classList.toggle('active') // добавляем или удаляем класс active
  })
})

const variation = document.querySelectorAll('.variationItem')

variation.forEach(button => {
  button.addEventListener('click', function (event) {
    event.preventDefault() // чтобы ссылка не прыгала

    // Убираем active со всех элементов
    variation.forEach(btn => btn.classList.remove('active'))

    // Добавляем active только на кликнутый
    this.classList.add('active')
  })
})

import Swiper from 'swiper'
import { Navigation, Thumbs, FreeMode } from 'swiper/modules'
import GLightbox from 'glightbox'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/thumbs'
import 'glightbox/dist/css/glightbox.css'

document.addEventListener('DOMContentLoaded', () => {
  const thumbsContainer = document.querySelector('.thumbs-slider')
  const mainContainer = document.querySelector('.main-slider')

  if (!thumbsContainer || !mainContainer) return

  const thumbs = new Swiper(thumbsContainer, {
    modules: [FreeMode, Thumbs],
    slidesPerView: 4,
    spaceBetween: 10,
    freeMode: true,
    watchSlidesProgress: true,
  })

  new Swiper(mainContainer, {
    modules: [Navigation, Thumbs],
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: { swiper: thumbs },
  })

  GLightbox({
    selector: '.glightbox',
    touchNavigation: true,
    loop: true,
  })
})

const container = document.querySelector('.productCarousel')

new Swiper(container, {
  modules: [Navigation],
  spaceBetween: 20,
  navigation: {
    nextEl: '.product-next',
    prevEl: '.product-prev',
  },
  breakpoints: {
    500: { slidesPerView: 1 },
    800: { slidesPerView: 2 },
    1300: { slidesPerView: 3 },
  },
})
