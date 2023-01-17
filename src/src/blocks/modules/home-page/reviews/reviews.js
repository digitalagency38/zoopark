import Glide from '@glidejs/glide';

const Reviews = class Reviews {
    constructor() {
        this.slider = null;
    }
    initSlider() {
        if (!document.querySelector('.reviews__slider.glide')) return;

        this.slider = new Glide('.reviews__slider.glide', {
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

export default Reviews;