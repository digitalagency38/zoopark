import Glide from '@glidejs/glide';

const About = class About {
    constructor() {
        this.slider = null;
    }
    initSlider() {
        if (!document.querySelector('.detailed-about-us__about.glide')) return;

        this.slider = new Glide('.detailed-about-us__about.glide', {
            perView: 3,
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

export default About;