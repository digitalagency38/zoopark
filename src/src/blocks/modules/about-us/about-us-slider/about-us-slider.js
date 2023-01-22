import Glide from '@glidejs/glide';

const AboutUs = class AboutUs {
    constructor() {
        this.slider = null;
    }
    initSlider() {
        if (!document.querySelector('.about-us-slider__flex.glide')) return;

        this.slider = new Glide('.about-us-slider__flex.glide', {
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

export default AboutUs;