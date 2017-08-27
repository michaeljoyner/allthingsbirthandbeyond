export default {
    scrolled: false,
    navbar: document.querySelector('.main-navbar'),

    set() {
        if(!this.scrolled && window.scrollY > 70) {
            return this.whiten();
        }

        if(this.scrolled && window.scrollY <= 70) {
            return this.translucen();
        }
    },

    whiten() {
        this.navbar.classList.add('scrolled');
        this.scrolled = true;
    },

    translucen() {
        this.navbar.classList.remove('scrolled');
        this.scrolled = false;
    }
}