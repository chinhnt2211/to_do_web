import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

// Dung tailwind thi them cai nay
import './index.css' 


createApp(App)
    .use(router)
    .mount('#app')
