import "./bootstrap";

import { createApp } from "vue";
import App from "./vue/App.vue";
import "../css/index.css";
import router from "./routes/index";
/* import the fontawesome core */
import { library } from "@fortawesome/fontawesome-svg-core";

/* import font awesome icon component */
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

/* import specific icons */
import { faCubes } from "@fortawesome/free-solid-svg-icons";

/* add icons to the library */
library.add(faCubes);

const app = createApp(App);

app.component("font-awesome-icon", FontAwesomeIcon);

app.use(router);

app.mount("#app");
