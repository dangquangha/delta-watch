const BACKTOTOP = {
    init() {
        this.backtotop();
    },
    backtotop() {
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

export default BACKTOTOP