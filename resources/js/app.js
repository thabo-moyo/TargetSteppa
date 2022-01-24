require('../../node_modules/@fortawesome/fontawesome-free/js/fontawesome');

/*import $ from 'jquery';
window.$ = window.jQuery = require('jquery');*/


import 'jquery-ui/ui/widgets/datepicker.js';
$('#datepicker').datepicker();

import '@fortawesome/fontawesome-free/js/fontawesome'
import '@fortawesome/fontawesome-free/js/solid'
import '@fortawesome/fontawesome-free/js/regular'
import '@fortawesome/fontawesome-free/js/brands'
//import snackbar from 'material-notifications'
import AOS from 'aos';
import { createApp } from "vue";

import App from "./app.vue";
import route from "./routes";

createApp(App).use(route).mount("#app");

AOS.init();

