const BACK_TO_TOP = {
    init() {
        this.backToTop();
    },
    backToTop() {
        window.addEventListener("scroll", (event) => {
            let scrollY = window.scrollY;
            if (scrollY >= 200) {
                document.getElementById('backtotop').style.visibility = 'unset';
            }

            if (scrollY < 200) {
                document.getElementById('backtotop').style.visibility = 'hidden';
            }
        });

        $('#backtotop').click(function () {
            var top = document.querySelector('.notification-sale');
            top.scrollIntoView();
        })
    }
}

export default BACK_TO_TOP