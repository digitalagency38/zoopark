import Glide from '@glidejs/glide';

const AllAnimals = class AllAnimals {
    constructor() {
        this.slider = null;
    }
    initSlider() {
        if (!document.querySelector('.all-animals__right.glide')) return;

        this.slider = new Glide('.all-animals__right.glide', {
            perView: 2,
            gap: 20,
            swipeThreshold: false,
            dragThreshold: false,
            type: 'carousel',
            breakpoints: {
                1130: {
                    perView: 1
                }
            },
        }).mount()
    }
    init() {
        this.initSlider();
    }
}

export default AllAnimals;