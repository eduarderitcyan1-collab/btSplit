jQuery(document).ready(function ($) {
  $('input[name="phone"]').mask('+7 (999) 999-99-99', { placeholder: '+7 (___) ___-__-__' })

  $('input[name="phone"]').on('mouseover', function () {
    $(this).attr('placeholder', '+7 (___) ___-__-__')
  })

  $('input[name="phone"]').on('mouseout', function () {
    $(this).attr('placeholder', '+7 (___) ___-__-__')
  })
})
