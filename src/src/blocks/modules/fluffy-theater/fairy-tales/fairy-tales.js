import Glide from '@glidejs/glide';

const Tales = class Tales {
    constructor() {
        this.slider = null;
    }
    initSlider() {
        if (!document.querySelector('.fairy-tales__slider.glide')) return;
        console.log('Tales slider inited');
        this.slider = new Glide('.fairy-tales__slider.glide', {
            perView: 2,
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

export default Tales;