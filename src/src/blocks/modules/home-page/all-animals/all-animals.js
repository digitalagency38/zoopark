import Glide from '@glidejs/glide';

const AllAnimals = class AllAnimals {
    constructor() {
        this.slider = null;
        this.index = 0;
    }
    initSlider() {
        if (!document.querySelector('.all-animals__right.glide')) return;

        this.slider = new Glide('.all-animals__right.glide', {
            perView: 2,
            gap: 20,
            swipeThreshold: true,
            dragThreshold: true,
            type: 'carousel',
            breakpoints: {
                1131: {
                    perView: 1
                },
                0: {
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
