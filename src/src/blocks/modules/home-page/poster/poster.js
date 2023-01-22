import Glide from '@glidejs/glide';

const Poster = class Poster {
    constructor() {
        this.slider = null;
    }
    initSlider() {
        if (!document.querySelector('.billboard-cards.glide')) return;

        this.slider = new Glide('.billboard-cards.glide', {
            perView: 1,
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

export default Poster;