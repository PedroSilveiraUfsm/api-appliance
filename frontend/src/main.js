import './assets/main.css'
import 'bootstrap/dist/css/bootstrap.min.css';
import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router'
import ProductList from './resources/js/components/ProductList.vue'
import ProductForm from './resources/js/components/ProductForm.vue'
import Product from './resources/js/components/Product.vue'

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
