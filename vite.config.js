import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/css/header.css',
        'resources/css/index.css',
        'resources/css/footer.css',
        'resources/js/app.js',
        'resources/js/burger.js',
        'resources/js/mask.js',
        'resources/js/accordion.js',
        'resources/js/yearFooter.js',
      ],
      refresh: true,
    }),
    tailwindcss(),
  ],
})
