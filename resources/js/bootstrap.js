import * as Popper from '@popperjs/core';
import * as Bootstrap from 'bootstrap';
import axios from 'axios';
import jQuery from 'jquery';
import _ from 'lodash';

window._ = _;
window.$ = window.jQuery = jQuery;
window.bootstrap = Bootstrap;
window.Popper = Popper;
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
