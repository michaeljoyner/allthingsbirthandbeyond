import {throttle} from "lodash";
import scrollThing from "./components/scrolledNavbar";


window.addEventListener('scroll', throttle(scrollThing.set.bind(scrollThing), 200));

