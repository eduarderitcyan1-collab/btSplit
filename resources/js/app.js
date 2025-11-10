import $ from 'jquery'
import 'jquery-mask-plugin'
// сделать jQuery глобальным для остальных файлов/плагинов
window.$ = window.jQuery = $

// ...существующий код...
jQuery(document).ready(function ($) {
  console.log('jQuery работает!')
  $('.my-element').hide()
})
