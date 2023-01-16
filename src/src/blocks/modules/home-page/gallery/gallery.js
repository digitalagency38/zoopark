import Glide from '@glidejs/glide';

const Gallery = class Gallery {
    constructor() {
        this.slider = null;
    }
    initSlider() {
        if (!document.querySelector('.gallery__images.glide')) return;

        this.slider = new Glide('.gallery__images.glide', {
            perView: 2,
            gap: 20,
            swipeThreshold: false,
            dragThreshold: false,
            type: 'carousel'
        }).mount()
    }
    init() {
        this.initSlider();
    }
}

export default Gallery;