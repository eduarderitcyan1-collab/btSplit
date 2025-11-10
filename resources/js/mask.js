jQuery(document).ready(function ($) {
  $('input[name="phone"]').click(function () {
    $(this).mask('+7 (999) 999-99-99', { placeholder: '_' })
  })
  $('input[name="phone"]').mouseover(function () {
    $(this).attr('placeholder', '+7 (___) ___-__-__')
  })
  $('input[name="phone"').mouseout(function () {
    $(this).attr('placeholder', '+7 (___) ___-__-__')
  })
})
