import HEADER from "../../components/header";
import BACKTOTOP from "../../components/backtotop";

const LOGIN = {
    init() {
        HEADER.init();
        BACKTOTOP.init();
    }
}

$(window).on('load', function () {
    LOGIN.init();
});