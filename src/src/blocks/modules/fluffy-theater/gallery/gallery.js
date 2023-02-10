import Glide from '@glidejs/glide';

const FluffyGallery = class FluffyGallery {
    constructor() {
        this.slider = null;
    }
    initSlider() {
        if (!document.querySelector('.gallery-theater__images.glide')) return;
        console.log('FluffyGallery slider inited');
        this.slider = new Glide('.gallery-theater__images.glide', {
            perView: 2,
            gap: 20,
            swipeThreshold: false,
            dragThreshold: false,
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

export default FluffyGallery;