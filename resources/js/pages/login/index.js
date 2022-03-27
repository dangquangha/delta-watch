import HEADER from "../../components/header";
import BACK_TO_TOP from "../../components/backtotop";

const LOGIN = {
    init() {
        HEADER.init();
        BACK_TO_TOP.init();
    }
}

$(window).on('load', function () {
    LOGIN.init();
});