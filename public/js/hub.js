/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/core.js":
/*!*************************************!*\
  !*** ./resources/assets/js/core.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/******************************************************
 * Core class is used throughout the site
 ******************************************************/
var Core =
/*#__PURE__*/
function () {
  /**
   * Class constructor, called when instantiating new class object
   */
  function Core() {
    _classCallCheck(this, Core);

    // declare our class properties
    // call init
    this.init();
  }
  /**
   * We run init when our class is first instantiated
   */


  _createClass(Core, [{
    key: "init",
    value: function init() {
      // various custom utilities
      this.utilities(); // initiate vendor plugins

      this.vendors(); // init some default ajax settings

      this.ajaxSettings();
    }
    /**
     * Setup some global utilities
     */

  }, {
    key: "utilities",
    value: function utilities(fromSidebar) {
      var self = this; // setup our Noty defaults

      Noty.overrideDefaults({
        layout: 'bottomRight',
        theme: 'nest',
        progressBar: true,
        closeWith: ['click', 'button']
      }); // confirm a click before following link

      $('body').on('click', '.confirm-click', function (e) {
        e.preventDefault();
        var $this = $(this);
        var n = new Noty({
          type: 'alert',
          layout: 'center',
          text: $this.attr('data-text') ? $this.attr('data-text') : 'Are you sure?',
          progressBar: false,
          closeWith: ['click'],
          animation: {
            open: 'animated fadeInDown',
            close: null
          },
          buttons: [Noty.button('Yes', 'button is-success', function () {
            if ($this.is('button') || $this.hasClass('submit-form')) {
              $this.closest('form').submit();
            } else if ($this.attr('href') !== undefined && $this.attr('href') !== '#' && $this.attr('href') !== '') {
              window.location = $this.attr('href');
            }
          }), Noty.button('No', 'button is-secondary', function () {
            n.close();
          })]
        }).show();
      }); // allow link to submit a form

      $('a.submit-form').not('.confirm-click').on('click', function (e) {
        e.preventDefault();
        $(this).closest('form').submit();
      }); // show/hide elements

      var $contentToggle, $contentHide, $contentShow;

      var toggleContent = function toggleContent($this) {
        if ($this.attr('data-toggle') !== undefined) {
          $contentToggle = $($this.attr('data-toggle'));
          $contentToggle.toggle();
        }

        if ($this.attr('data-hide') !== undefined) {
          $contentHide = $($this.attr('data-hide'));

          if ($contentHide.attr('data-ignore-validation') === 'true') {
            $contentHide.addClass('ignore-validation');
            $contentHide.find('[data-fv-field]').each(function (index, el) {
              $this.closest('form').data('formValidation').resetField($(el));
            });
          }

          if ($this.closest('.show-after-clone').length > 0) {
            $this.closest('.show-after-clone').find($this.attr('data-hide')).hide();
          } else {
            $contentHide.hide();
          }
        }

        if ($this.attr('data-show') !== undefined) {
          $contentShow = $($this.attr('data-show'));

          if ($this.closest('.show-after-clone').length > 0) {
            $this.closest('.show-after-clone').find($this.attr('data-show')).show();
          } else {
            $contentShow.show();
          }

          if ($contentShow.hasClass('ignore-validation')) {
            $contentShow.removeClass('ignore-validation');
            $contentShow.attr('data-ignore-validation', 'true');
          }

          $contentShow.find('input.toggle-content:checked').trigger('click');
        }
      };

      $('.toggle-content').on('click', function (e) {
        var $this = $(this);

        if ($this.is('a')) {
          e.preventDefault();
        }

        toggleContent($this);
      });
      $('select.toggle-content').on('change', function (e) {
        var $this = $(this).find('option:selected');
        toggleContent($this);
      }); // delete closest

      $('.delete-closest').on('click', function (e) {
        if ($(this).is('a')) {
          e.preventDefault();
        }

        $(this).closest($(this).attr('data-closest')).remove();
      });
    }
    /**
     * initiate vendor plugin functionality
     */

  }, {
    key: "vendors",
    value: function vendors() {
      // init our colorpicker library
      $('.colorpicker').colorPicker({
        animationSpeed: 0
      });
    }
    /**
     * setup form validation plugin
     */

  }, {
    key: "ajaxSettings",
    value: function ajaxSettings() {
      $.ajaxSetup({
        data: {
          _token: config._token
        }
      });
    }
    /**
     * Helper methods
     */

  }, {
    key: "url",
    value: function url(_url) {
      return "".concat(config.url, "/").concat(_url);
    }
  }]);

  return Core;
}();
/******************************************************
 * launch core, create instance
 ******************************************************/


$(function () {
  window.Core = new Core();
});

/***/ }),

/***/ "./resources/assets/js/theme.js":
/*!**************************************!*\
  !*** ./resources/assets/js/theme.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/******************************************************
 * Theme template class
 ******************************************************/
var Theme =
/*#__PURE__*/
function () {
  /**
   * Class constructor, called when instantiating new class object
   */
  function Theme() {
    _classCallCheck(this, Theme);

    if ($('body.theme').length) {
      // declare our class properties
      // call init
      this.init();
    }
  }
  /**
   * init is always called upon class load
   */


  _createClass(Theme, [{
    key: "init",
    value: function init() {
      if ($('body').hasClass('sidebar-collapsed')) {
        $('.has-submenu').removeClass('open');
      } // bind events


      this.bindEvents(); // show output

      this.showOutput();
    }
    /**
     * bind all necessary events
     */

  }, {
    key: "bindEvents",
    value: function bindEvents() {
      var self = this; // show/hide header dropdowns on click

      $('.header-wrapper .is-clickable > a').on('click', function (e) {
        self.toggleHeaderDropdown(e, $(this));
      }); // toggle our sidebar width

      $('.toggle-sidebar').on('click', function (e) {
        self.toggleSidebar(e, $(this));
      }); // show/hide submenu on top level menu item click

      $('.has-submenu > a').on('click', function (e) {
        self.toggleSubmenu(e, $(this));
      }); // toggle object sidebar menu

      $('.toggle-object-sidebar').on('click', function (e) {
        self.toggleObjectSidebar(e, $(this));
      }); // show our help modal

      $('.help-wrapper a').on('click', function (e) {
        self.showHelpModal(e);
      }); // hide our help modal

      $('.help-modal .modal-background, .help-modal .modal-close').on('click', function (e) {
        self.hideHelpModal();
      }); // toggle our header menu when in reponsive mode

      $('.header-wrapper .navbar-burger.right').on('click', function (e) {
        self.toggleHeaderMenu();
      }); // toggle our left sidebar menu when in responsive mode

      $('.header-wrapper .navbar-burger.left').on('click', function (e) {
        self.toggleSidebarMenu();
      }); // hide expanded menus on body click

      $(document).on('click', function (e) {
        self.hideAllExpanded(e, $(this));
      });
    }
    /**
     * show our output text if it's set
     */

  }, {
    key: "showOutput",
    value: function showOutput() {
      if (config.output) {
        var output = JSON.parse(config.output);

        if (output.type && output.text) {
          var n = new Noty({
            type: output.type === 'danger' ? 'error' : output.type,
            text: output.text,
            timeout: 5000
          }).show();
        }
      }
    }
    /******************************************************
     * Begin individual methods
     ******************************************************/

    /**
     * toggle our header menu on responsive design
     */

  }, {
    key: "toggleHeaderMenu",
    value: function toggleHeaderMenu() {
      $('.header-wrapper .navbar-burger, .header-wrapper .navbar-menu').toggleClass('is-active');
    }
    /**
     * toggle our sidebar menu on responsive design
     */

  }, {
    key: "toggleSidebarMenu",
    value: function toggleSidebarMenu() {
      $('.sidebar-wrapper').toggleClass('is-active');
    }
    /**
     * toggle a header dropdown
     */

  }, {
    key: "toggleHeaderDropdown",
    value: function toggleHeaderDropdown(e, $this) {
      e.preventDefault();
      var $parent = $this.parent();
      $('.header-wrapper .has-dropdown.is-clickable').not($parent).removeClass('is-active');
      $parent.toggleClass('is-active');
    }
    /**
     * toggle our sidebar width
     */

  }, {
    key: "toggleSidebar",
    value: function toggleSidebar(e, $this) {
      e.preventDefault();

      if (!$('body').hasClass('sidebar-collapsed')) {
        $('.has-submenu').removeClass('open');
        $('.submenu').attr('style', '');
      } else {
        $('.has-submenu.active').addClass('open');
      }

      $('body').toggleClass('sidebar-collapsed');
    }
    /**
     * show/hide a submenu
     */

  }, {
    key: "toggleSubmenu",
    value: function toggleSubmenu(e, $this) {
      e.preventDefault();
      var $li = $this.parent('li');
      $('.has-submenu').not($li).removeClass('expanded');

      if ($('body').hasClass('sidebar-collapsed')) {
        if (!$(e.target).is('span')) {
          $li.toggleClass('expanded');
        }
      } else {
        $this.next('.submenu').slideToggle('fast', function () {
          $li.toggleClass('open');
        });
      }
    }
    /**
     * toggle the object sidebar menu
     */

  }, {
    key: "toggleObjectSidebar",
    value: function toggleObjectSidebar(e, $this) {
      e.preventDefault();
      $this.closest('.object-wrapper').toggleClass('sidebar-collapsed');
    }
    /**
     * hide all expanded submenus
     */

  }, {
    key: "hideAllExpanded",
    value: function hideAllExpanded(e, $this) {
      if ($(e.target).closest('.navbar-item').length === 0) {
        $('.header-wrapper .has-dropdown.is-active').removeClass('is-active');
      }

      if ($(e.target).closest('.has-submenu').length === 0) {
        $('.has-submenu').removeClass('expanded');
      }
    }
    /**
     * Show our help modal
     */

  }, {
    key: "showHelpModal",
    value: function showHelpModal(e) {
      e.preventDefault();
      $('.help-modal').addClass('is-active');
    }
    /**
     * Hide our help modal
     */

  }, {
    key: "hideHelpModal",
    value: function hideHelpModal() {
      $('.help-modal').removeClass('is-active');
    }
  }]);

  return Theme;
}();
/******************************************************
 * Instantiate new class
 ******************************************************/


$(function () {
  new Theme();
});

/***/ }),

/***/ "./resources/assets/scss/theme.scss":
/*!******************************************!*\
  !*** ./resources/assets/scss/theme.scss ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************************************************************!*\
  !*** multi ./resources/assets/js/core.js ./resources/assets/js/theme.js ./resources/assets/scss/theme.scss ***!
  \*************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/devin/Sites/SimpleHub2/laravel/resources/assets/js/core.js */"./resources/assets/js/core.js");
__webpack_require__(/*! /Users/devin/Sites/SimpleHub2/laravel/resources/assets/js/theme.js */"./resources/assets/js/theme.js");
module.exports = __webpack_require__(/*! /Users/devin/Sites/SimpleHub2/laravel/resources/assets/scss/theme.scss */"./resources/assets/scss/theme.scss");


/***/ })

/******/ });