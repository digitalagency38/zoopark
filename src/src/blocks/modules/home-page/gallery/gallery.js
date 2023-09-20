import Glide from '@glidejs/glide';

const Gallery = class Gallery {
    constructor() {
        this.slider = null;
        this.activeSlidesType = 'all';
    }
    initSlider() {
        if (!document.querySelector('.gallery__images.glide')) return;

        this.slider = new Glide('.gallery__images.glide', {
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
    changeSlidesType(type) {
        this.activeSlidesType = type;
        setTimeout(() => {
            this.slider.update();
        }, 0);
    }
    init() {
        this.initSlider();
    }
}

export default Gallery;