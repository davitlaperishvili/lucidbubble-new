// import 'select2';
import "magnific-popup";

import hamburderMenu from "./libs/hamburger_menu.js";
import plugindParameters from "./libs/plugin_parameters.js";
//import treeMenu from './libs/tree_menu.js';

// import $ from 'jquery';
// window.jQuery = $;
// window.$ = $;

$(window).on("load", function () {
  //formFunctions();
  //additionalFunctions();
  plugindParameters();
  hamburderMenu();

  // Micromodal
  MicroModal.init({
    awaitCloseAnimation: true,
    disableScroll: true,
    disableFocus: true,
  });

  $(".show_popup").on("click", function (e) {
    e.preventDefault();
    MicroModal.show("sign_in_popup");
  });
});
