import Glide from '@glidejs/glide';

const DetailedAboutUs = class DetailedAboutUs {
    constructor() {
        this.slider = null;
    }
    initSlider() {
        if (!document.querySelector('.detailed-about-us__about.glide')) return;
        console.log('123');
        this.slider = new Glide('.detailed-about-us__about.glide', {
            perView: 3,
            gap: 20,
            type: 'slider',
            bound: true,
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

export default DetailedAboutUs;