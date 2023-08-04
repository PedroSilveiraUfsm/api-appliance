import './assets/main.css'
import 'bootstrap/dist/css/bootstrap.min.css';
import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router'
import ApplianceList from './resources/js/components/ApplianceList.vue'
import ApplianceForm from './resources/js/components/ApplianceForm.vue'
import Appliance from './resources/js/components/Appliance.vue'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/home', component: ApplianceList },
        { path: '/appliances/create', component: ApplianceForm },
        { path: '/appliances/:id', component: Appliance },
        { path: '/appliances/:id/edit', component: ApplianceForm },
    ]
});

const app = createApp(App);
app.use(router);
app.mount('#app');
