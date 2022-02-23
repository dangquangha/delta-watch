const HEADER_MOBILE = {
    init() {
        this.showMobileMenu()
    },

    showMobileMenu() {
        $('#show_mobile_menu').click(function () {
            var mobileMenu = document.querySelector('.header-mobile_menu');
            var mask = document.querySelector('.mask');
            mobileMenu.classList.add('header-mobile_menu-active');
            mask.style.zIndex = 99;
            mask.style.opacity = 1;
            mask.addEventListener('click', function () {
                mobileMenu.classList.remove('header-mobile_menu-active');
                mask.style.zIndex = -1;
                mask.style.opacity = 0;
            })
        })
    },
}

export default HEADER_MOBILE;