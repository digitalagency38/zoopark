import Glide from '@glidejs/glide';

const Fluffy = class Fluffy {
    constructor() {
        this.slider = null;
    }
    initSlider() {
        if (!document.querySelector('.detailed__in-banner.glide')) return;
        console.log('Fluffy slider inited');
        this.slider = new Glide('.detailed__in-banner.glide', {
            perView: 1,
            gap: 20,
            swipeThreshold: true,
            dragThreshold: true,
            type: 'carousel',
            breakpoints: {
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

export default Fluffy;