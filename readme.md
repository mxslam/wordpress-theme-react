## Vite Config Setup

```js
export default defineConfig({
  plugins: [react()],
  base: '/wp-content/themes/wordpress-theme-react/react-app/',
  build: {
    rollupOptions: {
      output: {
        entryFileNames: 'index.js',
        chunkFileNames: '[name].js',
        assetFileNames: '[name][extname]',
      },
    },
  },
});
```

## Replace BrowserRouter with HashRouter if used

---

## Directory Structure

```
wp-content/
└── themes/
    └── wordpress-theme-react/
        ├── style.css
        ├── functions.php
        └── react-app/
            ├── index.html
            └── ...
```

---

## Enable the WordPress Theme

Appearance > Themes > Activate "wordpress-theme-react"

---

## Create a Page with Template

- Title: React App
- Template: React-Page
