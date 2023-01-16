import Glide from '@glidejs/glide';

const Services = class Services {
    constructor() {
        this.slider = null;
    }
    initSlider() {
        if (!document.querySelector('.services__slider.glide')) return;

        this.slider = new Glide('.services__slider.glide', {
            perView: 3,
            gap: 20,
            swipeThreshold: false,
            dragThreshold: false,
            type: 'carousel',
            breakpoints: {
                1130: {
                    perView: 2
                },
                
            }
        }).mount()
    }
    init() {
        this.initSlider();
    }
}

export default Services;