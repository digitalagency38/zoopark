import Glide from '@glidejs/glide';

const Animal = class Animal {
    constructor() {
        this.slider = null;
    }
    initSlider() {
        if (!document.querySelector('.detailed-animal-page__about.glide')) return;
        console.log('Animal slider inited');
        this.slider = new Glide('.detailed-animal-page__about.glide', {
            perView: 2,
            gap: 20,
            swipeThreshold: false,
            dragThreshold: false,
            type: 'carousel',
            breakpoints: {
                1130: {
                    perView: 2
                },
                990: {
                    perView: 1
                },
                
            }
        }).mount()
    }
    init() {
        this.initSlider();
    }
}

export default Animal;