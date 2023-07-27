import './bootstrap';

import { createApp } from 'vue'
import App from './vue/App.vue'
import '../css/index.css'
import router from './routes/index';

const app = createApp(App)

app.use(router)

app.mount("#app")


