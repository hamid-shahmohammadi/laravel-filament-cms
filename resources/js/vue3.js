import { createApp } from "vue/dist/vue.esm-bundler";
import App from './components/App.vue';
import Home from './components/Home.vue';

const app=createApp({});

app.component('app',App);
app.component('home',Home);

app.mount("#app")
