import $ from 'jquery';
window.$ = window.jQuery = require('jquery');


//import 'jquery-ui/ui/widgets/datepicker.js';
//$('#datepicker').datepicker();

import '@fortawesome/fontawesome-free/js/fontawesome'
import '@fortawesome/fontawesome-free/js/solid'
import '@fortawesome/fontawesome-free/js/regular'
import '@fortawesome/fontawesome-free/js/brands'
//import snackbar from 'material-notifications'
//import AOS from 'aos';
import { createApp } from "vue";
import App from "./app.vue";
import route from "./routes";
import { store } from "./store";
//AOS.init();

createApp(App)
    .use(route)
    .use(store)
    .mount("#app");


