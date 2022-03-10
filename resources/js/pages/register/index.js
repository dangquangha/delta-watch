import HEADER from "../../components/header";
import BACKTOTOP from "../../components/backtotop";

const REGISTER = {
    init() {
        HEADER.init();
        BACKTOTOP.init();
    }
}

$(window).on('load', function () {
    REGISTER.init();
});