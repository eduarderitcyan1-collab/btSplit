import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/css/header.css',
        'resources/css/footer.css',
        'resources/css/index.css',
        'resources/css/about.css',
        'resources/css/blog-main.css',
        'resources/css/blog-page.css',
        'resources/css/cart.css',
        'resources/css/product-archive.css',
        'resources/css/service-main.css',
        'resources/css/service-page.css',
        'resources/css/single-product.css',
        'resources/css/sravnenie.css',
        'resources/css/wishlist.css',
        'resources/js/app.js',
        'resources/js/burger.js',
        'resources/js/mask.js',
        'resources/js/accordion.js',
        'resources/js/yearFooter.js',
        'resources/js/about.js',
        'resources/js/cart.js',
        'resources/js/addToWish-active.js',
        'resources/js/filterToggle.js',
      ],
      refresh: true,
    }),
    tailwindcss(),
  ],
})
