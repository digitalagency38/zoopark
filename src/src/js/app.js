import * as globalFunctions from './modules/functions.js';
import Vue from 'vue/dist/vue.js';

globalFunctions.isWebp();

import AllAnimals from '../blocks/modules/home-page/all-animals/all-animals.js';
import Services from '../blocks/modules/home-page/services/services.js';
import Gallery from '../blocks/modules/home-page/gallery/gallery.js';
import Reviews from '../blocks/modules/home-page/reviews/reviews.js';
import News from '../blocks/modules/home-page/news/news.js';




window.app = new Vue({
    el: '#app',
    data: () => ({
        allAnimals: new AllAnimals(),
        services: new Services(),
        gallery: new Gallery(),
        reviews: new Reviews(),
        news: new News(),


    }),
    mounted() {
        this.allAnimals.init();
        this.services.init();
        this.gallery.init();
        this.reviews.init();
        this.news.init();



    }
});