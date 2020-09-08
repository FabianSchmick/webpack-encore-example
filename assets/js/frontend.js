import $ from 'jquery';
global.$ = global.jQuery = $;
import 'bootstrap';

import { registerSW } from './util/sw';

$(document).ready(function() {
    registerSW();
});
