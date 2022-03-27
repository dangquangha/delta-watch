import HEADER from "../../components/header";
import BACK_TO_TOP from "../../components/backtotop";

const REGISTER = {
    init() {
        HEADER.init();
        BACK_TO_TOP.init();
    }
}

$(window).on('load', function () {
    REGISTER.init();
});