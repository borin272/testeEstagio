import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { webcrypto } from 'node:crypto'; // Usando o módulo nativo do Node.js

// Aplica o polyfill APENAS se não existir
if (!globalThis.crypto) {
  globalThis.crypto = webcrypto;
}

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
});
