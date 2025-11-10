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
