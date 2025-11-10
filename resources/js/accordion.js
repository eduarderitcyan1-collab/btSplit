jQuery(document).ready(function ($) {
  $('.accordion-item').each(function () {
    if (!$(this).hasClass('active')) {
      $(this).find('.accordion-content').hide()
    }
  })

  $('.accordion-item').on('click', function () {
    const $item = $(this).closest('.accordion-item')
    const isActive = $item.hasClass('active')

    $('.accordion-item').not($item).removeClass('active').find('.accordion-content').slideUp()

    if (isActive) {
      $item.removeClass('active')
      $item.find('.accordion-content').slideUp()
    } else {
      $item.addClass('active')
      $item.find('.accordion-content').slideDown()
    }
  })
})
