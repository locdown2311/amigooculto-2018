
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('painel', require('./components/Painel.vue'));
Vue.component('resultados', require('./components/Resultados.vue'));
Vue.component('participantes', require('./components/Participantes.vue'));
Vue.component('alerta', require('./components/Alerta.vue'));
Vue.component('sorteado', require('./components/Sorteado.vue'));
Vue.component('btc', require('./components/BTC.vue'));
Vue.component('url', require('./components/URL.vue'));
Vue.component('modal', require('./components/Modal.vue'));
Vue.component('passport-at',require('./components/passport/PersonalAccessTokens.vue'));

const app = new Vue({
    el: '#app',
    mounted:function(){
        $(function() {
          $('#app').css('display','block');
        });
      }
});
