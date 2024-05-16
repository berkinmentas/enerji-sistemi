import _ from 'lodash';
import * as Popper from '@popperjs/core';
import * as bootstrap from 'bootstrap';
import axios from 'axios';
import jQuery from 'jquery';
import DataTable from 'datatables.net-bs5';
import Dropzone from "dropzone";


window._ = _;
window.$ = window.jQuery = jQuery;
window.bootstrap = bootstrap
window.Popper = Popper;
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.Dropzone = Dropzone;
window.DataTable = DataTable;

