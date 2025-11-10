function declOfNum(n, forms) {
  n = Math.abs(n) % 100
  const n1 = n % 10
  if (n > 10 && n < 20) return forms[2]
  if (n1 > 1 && n1 < 5) return forms[1]
  if (n1 === 1) return forms[0]
  return forms[2]
}

function formatPrice(num) {
  return num.toLocaleString('ru-RU') + ' ₽'
}

function updateCartItemsCount() {
  const cartQuanEls = document.querySelectorAll('.cartQuan')
  const count = document.querySelectorAll('.cartProductItem').length
  const word = declOfNum(count, ['товар', 'товара', 'товаров'])

  cartQuanEls.forEach(el => {
    if (el.closest('.pageTitle')) {
      el.textContent = `(${count} ${word})`
    } else if (el.closest('.cartDetails')) {
      el.textContent = count
    }
  })
}

function updateTotalPrice() {
  let total = 0
  document.querySelectorAll('.cartProductItem').forEach(item => {
    const priceEl = item.querySelector('.salePrice')
    const valueEl = item.querySelector('.value')
    if (priceEl && valueEl) {
      const price = parseInt(priceEl.textContent.replace(/\D/g, '')) || 0
      const quantity = parseInt(valueEl.textContent) || 0
      total += price * quantity
    }
  })
  const totalPriceEl = document.querySelector('.totalPrice')
  if (totalPriceEl) totalPriceEl.textContent = formatPrice(total)
}

function updateCartInfo() {
  updateCartItemsCount()
  updateTotalPrice()
}

document.querySelectorAll('.counter').forEach(counter => {
  const valueEl = counter.querySelector('.value')
  const minus = counter.querySelector('.minus')
  const plus = counter.querySelector('.plus')
  let value = parseInt(valueEl.textContent) || 0

  minus.addEventListener('click', () => {
    if (value > 1) value--
    valueEl.textContent = value
    updateTotalPrice()
  })

  plus.addEventListener('click', () => {
    value++
    valueEl.textContent = value
    updateTotalPrice()
  })
})

document.querySelectorAll('.removeProduct').forEach(btn => {
  btn.addEventListener('click', e => {
    e.preventDefault()
    const item = btn.closest('.cartProductItem')
    if (item) {
      item.remove()
      updateCartInfo()
    }
  })
})

updateCartInfo()

const cartContainer = document.querySelector('.cartProduct')
if (cartContainer && window.MutationObserver) {
  const observer = new MutationObserver(updateCartInfo)
  observer.observe(cartContainer, { childList: true })
}
