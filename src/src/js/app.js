import * as globalFunctions from './modules/functions.js';
import Vue from 'vue/dist/vue.js';

globalFunctions.isWebp();

import AllAnimals from '../blocks/modules/home-page/all-animals/all-animals.js';

window.app = new Vue({
    el: '#app',
    data: () => ({
        allAnimals: new AllAnimals()
    }),
    mounted() {
        this.allAnimals.init();
    }
});