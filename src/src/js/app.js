import * as globalFunctions from './modules/functions.js';
import Vue from 'vue/dist/vue.js';

globalFunctions.isWebp();

import AllAnimals from '../blocks/modules/home-page/all-animals/all-animals.js';
import Services from '../blocks/modules/home-page/services/services.js';
import Gallery from '../blocks/modules/home-page/gallery/gallery.js';
import Reviews from '../blocks/modules/home-page/reviews/reviews.js';
import News from '../blocks/modules/home-page/news/news.js';
import Poster from '../blocks/modules/home-page/poster/poster.js';
// import About from '../blocks/modules/about-us/detailed/detailed.js';
import AboutUs from '../blocks/modules/about-us/about-us-slider/about-us-slider.js';
import DetailedAboutUs from '../blocks/modules/about-us/detailed/detailed.js';
// import Animal from '../blocks/modules/animal-page/detailed/detailed.js';





window.app = new Vue({
    el: '#app',
    data: () => ({
        allAnimals: new AllAnimals(),
        services: new Services(),
        gallery: new Gallery(),
        reviews: new Reviews(),
        news: new News(),
        poster: new Poster(),
        // about: new About(),
        aboutUs: new AboutUs(),
        // animal: new Animal(),
        detailedAboutUs: new DetailedAboutUs()



    }),
    mounted() {
        this.allAnimals.init();
        this.services.init();
        this.gallery.init();
        this.reviews.init();
        this.news.init();
        this.poster.init();
        // this.about.init();
        this.aboutUs.init();
        // this.animal.init();
        this.detailedAboutUs.init();

    }
});

