import './bootstrap';
import '../css/app.css';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

// import { createApp, h } from 'vue';
// import { createInertiaApp } from '@inertiajs/vue3';
// import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
// import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

// Import components
import App from './components/App.vue';
import ProductList from './components/ProductList.vue';
import ProductForm from './components/ProductForm.vue';
import Product from './components/Product.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/home', component: ProductList },
        { path: '/products/create', component: ProductForm },
        { path: '/products/:id', component: Product },
        { path: '/products/:id/edit', component: ProductForm },
    ]
});

const app = createApp(App);
app.use(router);
app.mount('#app');

// const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// createInertiaApp({
//     title: (title) => `${title} - ${appName}`,
//     resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
//     setup({ el, App, props, plugin }) {
//         return createApp({ render: () => h(App, props) })
//             .use(plugin)
//             .use(ZiggyVue, Ziggy)
//             .mount(el);
//     },
//     progress: {
//         color: '#4B5563',
//     },
// });
