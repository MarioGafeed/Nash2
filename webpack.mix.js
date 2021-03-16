let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.styles([
//     // BEGIN GLOBAL MANDATORY STYLES
//     'public/backend/assets/global/plugins/font-awesome/css/font-awesome.min.css',
//     'public/backend/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
//     'public/backend/assets/global/plugins/bootstrap/css/bootstrap.min.css',
//     'public/backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
//     // END GLOBAL MANDATORY STYLES
//
//     // BEGIN THEME GLOBAL STYLES
//     'public/backend/assets/global/css/components-rounded.min.css',
//     'public/backend/assets/global/css/plugins.min.css',
//     // END THEME GLOBAL STYLES
//
//     // BEGIN THEME LAYOUT STYLES
//     'public/backend/assets/layouts/layout4/css/layout.min.css',
//     'public/backend/assets/layouts/layout4/css/themes/default.min.css',
//     'public/backend/assets/layouts/layout4/css/custom.min.css',
//     // END THEME LAYOUT STYLES
//
// ], 'public/backend/base/css/main-ltr.min.css');
//
//
// mix.styles([
//     // BEGIN GLOBAL MANDATORY STYLES
//     'public/backend/assets/global/plugins/font-awesome/css/font-awesome.min.css',
//     'public/backend/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
//     'public/backend/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css',
//     'public/backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css',
//     // END GLOBAL MANDATORY STYLES
//
//     // BEGIN THEME GLOBAL STYLES
//     'public/backend/assets/global/css-rtl/components-rounded-rtl.min.css',
//     'public/backend/assets/global/css-rtl/plugins-rtl.min.css',
//     // END THEME GLOBAL STYLES
//
//     // BEGIN THEME LAYOUT STYLES
//     'public/backend/assets/layouts/layout4/css-rtl/layout-rtl.min.css',
//     'public/backend/assets/layouts/layout4/css-rtl/themes/default-rtl.min.css',
//     'public/backend/assets/layouts/layout4/css-rtl/custom-rtl.min.css',
//     // END THEME LAYOUT STYLES
//
// ], 'public/backend/base/css/main-rtl.min.css');
//
// mix.scripts([
//     // BEGIN CORE PLUGINS
//     'public/backend/assets/global/plugins/jquery.min.js',
//     'public/backend/assets/global/plugins/bootstrap/js/bootstrap.min.js',
//     'public/backend/assets/global/plugins/js.cookie.min.js',
//     'public/backend/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
//     'public/backend/assets/global/plugins/jquery.blockui.min.js',
//     'public/backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
//      // END CORE PLUGINS
//
//      // BEGIN THEME GLOBAL SCRIPTS
//     'public/backend/assets/global/scripts/app.min.js',
//     // END THEME GLOBAL SCRIPTS
//
//     // BEGIN THEME LAYOUT SCRIPTS
//     'public/backend/assets/layouts/layout4/scripts/layout.min.js',
//     'public/backend/assets/layouts/layout4/scripts/demo.min.js',
//     'public/backend/assets/layouts/global/scripts/quick-sidebar.min.js',
//     'public/backend/assets/layouts/global/scripts/quick-nav.min.js',
//     // END THEME LAYOUT SCRIPTS
//
// ], 'public/backend/base/js/main.min.js');
//
// // DataTables
// mix.styles([
//     'public/backend/datatables/dataTables.bootstrap.css',
// ], 'public/backend/datatables/dataTables.bootstrap-ltr.min.css');
//
// // DataTables RTL
// mix.styles([
//     'public/backend/datatables/dataTables.bootstrap-rtl.css',
// ], 'public/backend/datatables/dataTables.bootstrap-rtl.min.css');
//
// mix.scripts([
//     'public/backend/datatables/jquery.dataTables.min.js',
//     'public/backend/datatables/dataTables.bootstrap.min.js',
//     'public/backend/datatables/dataTables.buttons.min.js',
//     'public/backend/datatables/buttons.server-side.js',
// ], 'public/backend/datatables/dataTables.min.js');

// mix.js('resources/js/app.js', 'public/backend/base/js/vue.min.js');

mix.styles([
    'public/frontend/style.css',
], 'public/frontend/style.ltr.min.css');
