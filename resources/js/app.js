import './bootstrap';
import { createApp } from 'vue';

const app = createApp();

Object.entries(import.meta.globEager('./**/*.vue')).forEach(([path, definition]) => {
    app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default)
})

app.mount('#app');
