import $ from 'jquery'

// Маска и валидация телефона
$(function () {
  const $phones = $('input[name="phone"]')
  if ($phones.length === 0) return

  // Если плагин маски подключён (например, через app.js или импортирован отдельно), применяем маску
  if ($.fn && typeof $.fn.mask === 'function') {
    $phones.mask('+7 (999) 999-99-99', { placeholder: '+7 (___) ___-__-__' })
  } else {
    // Плагин не найден — не ломаем работу, но инфорируем в консоли
    // Для полной работы маски установите и импортируйте `jquery-mask-plugin`
    console.warn('jquery-mask-plugin not found. Mask not applied. Install and import the plugin for masking.')
  }

  // Подсказка-плейсхолдер при наведении/уходе курсора
  $phones.on('mouseover', function () {
    $(this).attr('placeholder', '+7 (___) ___-__-__')
  })

  $phones.on('mouseout', function () {
    $(this).attr('placeholder', '+7 (___) ___-__-__')
  })

  // Убираем сообщение об ошибке при правке поля
  $phones.on('input change keyup', function () {
    const $p = $(this)
    const digits = typeof $p.cleanVal === 'function' ? $p.cleanVal() : $p.val().replace(/\D/g, '')
    if (digits.length >= 11) {
      $p.removeClass('input-error')
      $p.next('.phone-error').remove()
    }
  })

  // Валидация при отправке формы — ждём, что в номере будет 11 цифр (код 7 + 10 цифр)
  $('form').on('submit', function (e) {
    const $form = $(this)
    if ($form.find('input[name="phone"]').length === 0) return

    let valid = true
    $form.find('input[name="phone"]').each(function () {
      const $p = $(this)
      const digits = typeof $p.cleanVal === 'function' ? $p.cleanVal() : $p.val().replace(/\D/g, '')

      if (digits.length < 11) {
        valid = false
        $p.addClass('input-error')
        if ($p.next('.phone-error').length === 0) {
          $p.after('<div class="phone-error" style="color:#c00; font-size:0.9rem; margin-top:4px;">Введите номер полностью</div>')
        }
      } else {
        $p.removeClass('input-error')
        $p.next('.phone-error').remove()
      }
    })

    if (!valid) {
      e.preventDefault()
      e.stopImmediatePropagation()
      $form.find('.input-error').first().focus()
    }
  })
})
