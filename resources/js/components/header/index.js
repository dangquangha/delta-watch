import HEADER_PC from "./components/header"
import HEADER_MOBILE from "./components/header_mobile"

const HEADER = {
    init() {
        HEADER_PC.init();
        HEADER_MOBILE.init()
    }
}

export default HEADER;