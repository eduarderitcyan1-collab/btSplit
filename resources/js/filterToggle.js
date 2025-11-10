document.querySelectorAll('.filter__label.toggle').forEach(label => {
  label.addEventListener('click', () => {
    const buttons = label.nextElementSibling
    const arrow = label.querySelector('.arrow')
    buttons.style.display = buttons.style.display === 'flex' ? 'none' : 'flex'
    arrow.classList.toggle('active')
  })
})

document.querySelectorAll('.filter__btn').forEach(button => {
  button.addEventListener('click', () => {
    button.classList.toggle('active')
  })
})

document.querySelector('.filter__reset').addEventListener('click', () => {
  document.querySelectorAll('.filter__btn.active').forEach(el => {
    el.classList.remove('active')
  })

  document.querySelectorAll('.filter__label.toggle').forEach(label => {
    const buttons = label.nextElementSibling
    const arrow = label.querySelector('.arrow')

    buttons.style.display = 'none'
    arrow.classList.remove('active')
  })
})

jQuery(document).ready(function ($) {
  $('.filterButton').click(function () {
    $('.filter__form').toggleClass('disable')
  })
  $('.closeFilter').click(function () {
    $('.filter__form').addClass('disable')
  })
  $('.closeFilter').click(function () {
    $('.filter__form').addClass('disable')
  })
})
