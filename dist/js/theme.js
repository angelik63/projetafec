/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/scripts/base.js":
/*!********************************!*\
  !*** ./assets/scripts/base.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _components_Menu__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/Menu */ \"./assets/scripts/components/Menu.js\");\n/* harmony import */ var _components_MenuAccordion__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/MenuAccordion */ \"./assets/scripts/components/MenuAccordion.js\");\n/* harmony import */ var _components_MenuAccordion__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_components_MenuAccordion__WEBPACK_IMPORTED_MODULE_1__);\n\n\nwindow.addEventListener(\"DOMContentLoaded\", function() {\n  let Navigation = new _components_Menu__WEBPACK_IMPORTED_MODULE_0__.Menu();\n  Navigation.renderMenu();\n  Navigation.renderMenuIcons();\n});\n\n\n//# sourceURL=webpack://Afec_starter_kit/./assets/scripts/base.js?");

/***/ }),

/***/ "./assets/scripts/components/Menu.js":
/*!*******************************************!*\
  !*** ./assets/scripts/components/Menu.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   Menu: () => (/* binding */ Menu)\n/* harmony export */ });\n/* harmony import */ var _data_menu__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../data/menu */ \"./assets/scripts/data/menu.js\");\n\nclass Menu {\n  constructor() {\n    this.menuContainer = document.getElementById(\"menu-js\");\n    this.menuIconsContainer = document.getElementById(\"menu-icons-js\");\n    this.$html = document.querySelector(\"html\");\n  }\n  renderMenu() {\n    let menuHtml = \"<ul>\";\n    _data_menu__WEBPACK_IMPORTED_MODULE_0__.links.forEach((element) => {\n      menuHtml += `<li class=\"menu-item\"><a href=\"${element.url}\" title=\"${element.title}\">${element.title}</a></li>`;\n    });\n    menuHtml += \"</ul>\";\n    this.appendMenu(menuHtml);\n  }\n  appendMenu(menu) {\n    this.menuContainer.innerHTML = menu;\n  }\n  renderMenuIcons() {\n    let menuHtml = \"<ul>\";\n    _data_menu__WEBPACK_IMPORTED_MODULE_0__.linksIcons.forEach((element) => {\n      menuHtml += `<li><a class=\"${element.class}\" href=\"${element.url}\"><img src=\"images/icones/${element.img}\" alt=\"${element.title}\"/></a></li>`;\n    });\n    menuHtml += \"</ul>\";\n    this.appendMenuIcons(menuHtml);\n    this.addBurgerClickEvent();\n  }\n  appendMenuIcons(menu) {\n    this.menuIconsContainer.innerHTML = menu;\n  }\n  addBurgerClickEvent() {\n    const burgers = this.menuIconsContainer.querySelectorAll(\".burger\");\n    burgers.forEach((burger) => {\n      burger.addEventListener(\"click\", (event) => {\n        event.preventDefault();\n        setTimeout(() => {\n          this.$html.classList.add(\"switch-menu\");\n          this.$html.classList.toggle(\"has-menu\");\n        }, 300);\n        this.$html.classList.remove(\"switch-menu\");\n      });\n    });\n  }\n}\n\n\n//# sourceURL=webpack://Afec_starter_kit/./assets/scripts/components/Menu.js?");

/***/ }),

/***/ "./assets/scripts/components/MenuAccordion.js":
/*!****************************************************!*\
  !*** ./assets/scripts/components/MenuAccordion.js ***!
  \****************************************************/
/***/ (() => {

eval("\n\n//# sourceURL=webpack://Afec_starter_kit/./assets/scripts/components/MenuAccordion.js?");

/***/ }),

/***/ "./assets/scripts/data/menu.js":
/*!*************************************!*\
  !*** ./assets/scripts/data/menu.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   links: () => (/* binding */ links),\n/* harmony export */   linksIcons: () => (/* binding */ linksIcons)\n/* harmony export */ });\nconst links = [\n  {\n    title: \"Se connecter\",\n    url: \"connexion.html\"\n  },\n  {\n    title: \"Accueil\",\n    url: \"index.html\"\n  },\n  {\n    title: \"Herbier\",\n    url: \"herbier.html\"\n  },\n  {\n    title: \"Repertoire\",\n    url: \"repertoire.html\"\n  },\n  {\n    title: \"Conseil\",\n    url: \"\"\n  },\n  {\n    title: \"Forum\",\n    url: \"\"\n  },\n  {\n    title: \"Musique des plantes\",\n    url: \"musiqueDesPlantes.html\"\n  },\n  {\n    title: \"Soin des plantes\",\n    url: \"soinDesPlantes.html\"\n  }\n];\nconst linksIcons = [\n  {\n    title: \"logo recherche\",\n    img: \"search.svg\",\n    url: \"\",\n    class: \"\"\n  },\n  {\n    title: \"logo user\",\n    img: \"user.svg\",\n    url: \"connexion.html\",\n    class: \"\"\n  },\n  {\n    title: \"logo notification\",\n    img: \"bell.svg\",\n    url: \"\",\n    class: \"\"\n  },\n  {\n    title: \"logo burger\",\n    img: \"menu.svg\",\n    url: \"\",\n    class: \"burger\"\n  }\n];\n\n\n//# sourceURL=webpack://Afec_starter_kit/./assets/scripts/data/menu.js?");

/***/ }),

/***/ "./assets/styles/base.scss":
/*!*********************************!*\
  !*** ./assets/styles/base.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://Afec_starter_kit/./assets/styles/base.scss?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	__webpack_require__("./assets/scripts/base.js");
/******/ 	var __webpack_exports__ = __webpack_require__("./assets/styles/base.scss");
/******/ 	
/******/ })()
;