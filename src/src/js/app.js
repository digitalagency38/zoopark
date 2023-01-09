import * as globalFunctions from './modules/functions.js';
import Vue from 'vue/dist/vue.js';

globalFunctions.isWebp();

import AllAnimals from '../blocks/modules/home-page/all-animals/all-animals.js';
import Services from '../blocks/modules/home-page/services/services.js';

window.app = new Vue({
    el: '#app',
    data: () => ({
        allAnimals: new AllAnimals(),
        services: new Services(),
    }),
    mounted() {
        this.allAnimals.init();
        this.services.init();
    }
});