import $ from 'jquery'
import 'jquery-mask-plugin'
// сделать jQuery глобальным для остальных файлов/плагинов
window.$ = window.jQuery = $

// ...существующий код...
jQuery(document).ready(function ($) {
  $('.my-element').hide()
})

document.addEventListener('DOMContentLoaded', () => {
  const bidButton = document.querySelector('#bid')
  const popup = document.querySelector('.popupModal')
  const closeBtn = popup.querySelector('.closeBtn')

  bidButton.addEventListener('click', () => {
    popup.classList.add('active')
  })

  // Закрытие по крестику
  closeBtn.addEventListener('click', () => {
    popup.classList.remove('active')
  })
})
