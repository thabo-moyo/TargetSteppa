import $ from 'jquery';
window.$ = window.jQuery = require('jquery');
require('./bootstrap')

//import 'jquery-ui/ui/widgets/datepicker.js';
//$('#datepicker').datepicker();

import 'material-icons/iconfont/material-icons.css';

//import snackbar from 'material-notifications'
//import AOS from 'aos';
import { createApp } from "vue";
import App from "./app.vue";
import route from "./routes/router";
import Vue3TransitionsEsm from 'vue3-transitions';

import { store } from "./store";
import 'nprogress/nprogress.css'
//AOS.init();

createApp(App)
    .use(Vue3TransitionsEsm)
    .use(route)
    .use(store)
    .mount("#app");


