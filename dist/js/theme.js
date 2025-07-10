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
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _components_MenuAccordion_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/MenuAccordion.js */ \"./assets/scripts/components/MenuAccordion.js\");\n/* harmony import */ var _components_AfficherPlus_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/AfficherPlus.js */ \"./assets/scripts/components/AfficherPlus.js\");\n/* harmony import */ var _components_BarreRecherche_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/BarreRecherche.js */ \"./assets/scripts/components/BarreRecherche.js\");\n/* harmony import */ var _components_ModalNotification_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/ModalNotification.js */ \"./assets/scripts/components/ModalNotification.js\");\n/* harmony import */ var _components_Menu_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/Menu.js */ \"./assets/scripts/components/Menu.js\");\n\n\n\n\n\n// Initialisation du menu sur site Version JS\n\n\nwindow.addEventListener('DOMContentLoaded', function () {\n  if (document.getElementById('menu-js')) {\n    var Navigation = new _components_Menu_js__WEBPACK_IMPORTED_MODULE_4__.Menu();\n    Navigation.renderMenu();\n    Navigation.renderMenuIcons();\n  } else {\n    var menuBurgerIcon = document.querySelector('.burger');\n    var $html = document.querySelector('html');\n    menuBurgerIcon.addEventListener('click', function () {\n      //    this.classList.toggle('burger-open');\n      //    MainNavigation.classList.toggle('mobileNav-open');\n\n      setTimeout(function () {\n        $html.classList.add('switch-menu');\n        $html.classList.toggle('has-menu');\n      }, 300);\n      $html.classList.remove('switch-menu');\n    });\n  }\n});\n\n//# sourceURL=webpack://Afec_Starter_kit/./assets/scripts/base.js?");

/***/ }),

/***/ "./assets/scripts/components/AfficherPlus.js":
/*!***************************************************!*\
  !*** ./assets/scripts/components/AfficherPlus.js ***!
  \***************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nvar myBtn = document.getElementById(\"myBtn\");\nvar dots = document.getElementById(\"dots\");\nvar moreText = document.getElementById(\"more\");\nif (myBtn && dots && moreText) {\n  myBtn.addEventListener('click', function () {\n    if (dots.style.display === \"none\") {\n      dots.style.display = \"inline\";\n      myBtn.innerHTML = \"Afficher plus\";\n      moreText.style.display = \"none\";\n    } else {\n      dots.style.display = \"none\";\n      myBtn.innerHTML = \"Afficher moins\";\n      moreText.style.display = \"inline\";\n    }\n  });\n}\n\n//# sourceURL=webpack://Afec_Starter_kit/./assets/scripts/components/AfficherPlus.js?");

/***/ }),

/***/ "./assets/scripts/components/BarreRecherche.js":
/*!*****************************************************!*\
  !*** ./assets/scripts/components/BarreRecherche.js ***!
  \*****************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\ndocument.addEventListener('DOMContentLoaded', function () {\n  var loupeElement = document.getElementById('loupe');\n  var searchBarForm = document.querySelector('.search-bar');\n\n  // Fonction pour basculer l'affichage de la barre de recherche\n  function toggleSearchBar() {\n    if (searchBarForm.style.display === 'none') {\n      searchBarForm.style.display = 'block'; // Affiche la barre de recherche\n      document.getElementById('plantSearchInput').focus(); // Met le focus sur le champ de recherche\n    } else {\n      searchBarForm.style.display = 'none'; // Masque la barre de recherche\n    }\n  }\n\n  // Ajoute un écouteur d'événement pour le clic sur la loupe\n  if (loupeElement) {\n    loupeElement.addEventListener('click', function (event) {\n      event.stopPropagation(); // Empêche le clic de se propager\n      toggleSearchBar();\n    });\n  }\n\n  // Gérer les clics en dehors de la barre de recherche pour la fermer\n  document.addEventListener('click', function (event) {\n    var isClickInsideSearchBar = searchBarForm.contains(event.target);\n    var isClickOnLoupe = loupeElement.contains(event.target);\n    if (!isClickInsideSearchBar && !isClickOnLoupe && searchBarForm.style.display === 'block') {\n      toggleSearchBar();\n    }\n  });\n\n  // Empêcher la fermeture quand on clique dans la barre de recherche elle-même\n  if (searchBarForm) {\n    searchBarForm.addEventListener('click', function (event) {\n      event.stopPropagation(); // Empêche le clic de se propager au document\n    });\n  }\n});\n\n//# sourceURL=webpack://Afec_Starter_kit/./assets/scripts/components/BarreRecherche.js?");

/***/ }),

/***/ "./assets/scripts/components/Menu.js":
/*!*******************************************!*\
  !*** ./assets/scripts/components/Menu.js ***!
  \*******************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   Menu: () => (/* binding */ Menu)\n/* harmony export */ });\n/* harmony import */ var _data_menu_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../data/menu.js */ \"./assets/scripts/data/menu.js\");\nfunction _typeof(o) { \"@babel/helpers - typeof\"; return _typeof = \"function\" == typeof Symbol && \"symbol\" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && \"function\" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? \"symbol\" : typeof o; }, _typeof(o); }\nfunction _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError(\"Cannot call a class as a function\"); }\nfunction _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, \"value\" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }\nfunction _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, \"prototype\", { writable: !1 }), e; }\nfunction _toPropertyKey(t) { var i = _toPrimitive(t, \"string\"); return \"symbol\" == _typeof(i) ? i : i + \"\"; }\nfunction _toPrimitive(t, r) { if (\"object\" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || \"default\"); if (\"object\" != _typeof(i)) return i; throw new TypeError(\"@@toPrimitive must return a primitive value.\"); } return (\"string\" === r ? String : Number)(t); }\n\nvar Menu = /*#__PURE__*/function () {\n  function Menu() {\n    _classCallCheck(this, Menu);\n    this.menuContainer = document.getElementById('menu-js');\n    this.menuIconsContainer = document.getElementById('menu-icons-js');\n    this.$html = document.querySelector('html');\n  }\n  return _createClass(Menu, [{\n    key: \"renderMenu\",\n    value: function renderMenu() {\n      var menuHtml = '<ul>';\n      _data_menu_js__WEBPACK_IMPORTED_MODULE_0__.links.forEach(function (element) {\n        menuHtml += \"<li class=\\\"menu-item\\\"><a href=\\\"\".concat(element.url, \"\\\" title=\\\"\").concat(element.title, \"\\\">\").concat(element.title, \"</a></li>\");\n      });\n      menuHtml += '</ul>';\n      this.appendMenu(menuHtml);\n    }\n  }, {\n    key: \"appendMenu\",\n    value: function appendMenu(menu) {\n      this.menuContainer.innerHTML = menu;\n    }\n  }, {\n    key: \"renderMenuIcons\",\n    value: function renderMenuIcons() {\n      var menuHtml = '<ul>';\n      _data_menu_js__WEBPACK_IMPORTED_MODULE_0__.linksIcons.forEach(function (element) {\n        menuHtml += \"<li><a class=\\\"\".concat(element[\"class\"], \"\\\" href=\\\"\").concat(element.url, \"\\\"><img src=\\\"images/icones/\").concat(element.img, \"\\\" alt=\\\"\").concat(element.title, \"\\\"/></a></li>\");\n      });\n      menuHtml += '</ul>';\n      this.appendMenuIcons(menuHtml);\n\n      // Ajouter l'événement après le rendu\n      this.addBurgerClickEvent();\n    }\n  }, {\n    key: \"appendMenuIcons\",\n    value: function appendMenuIcons(menu) {\n      this.menuIconsContainer.innerHTML = menu;\n    }\n  }, {\n    key: \"addBurgerClickEvent\",\n    value: function addBurgerClickEvent() {\n      var _this = this;\n      var burgers = this.menuIconsContainer.querySelectorAll('.burger');\n      burgers.forEach(function (burger) {\n        burger.addEventListener('click', function (event) {\n          event.preventDefault();\n          setTimeout(function () {\n            _this.$html.classList.add('switch-menu');\n            _this.$html.classList.toggle('has-menu');\n          }, 300);\n          _this.$html.classList.remove('switch-menu');\n        });\n      });\n    }\n  }]);\n}();\n\n//# sourceURL=webpack://Afec_Starter_kit/./assets/scripts/components/Menu.js?");

/***/ }),

/***/ "./assets/scripts/components/MenuAccordion.js":
/*!****************************************************!*\
  !*** ./assets/scripts/components/MenuAccordion.js ***!
  \****************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nvar titles = document.querySelectorAll('.accordion__title');\nconsole.log(titles);\ntitles.forEach(function (item) {\n  item.addEventListener(\"click\", function () {\n    var block = item.parentElement;\n    console.log(block);\n    var wrapper = block.querySelector(\".accordion__answer-bloc\");\n    var reponse = block.querySelector(\".accordion__answer\");\n    console.log(wrapper, reponse);\n    var estOuvert = block.classList.contains(\"active\");\n    document.querySelectorAll(\".accordion__bloc\").forEach(function (bloc) {\n      bloc.classList.remove(\"active\");\n      bloc.querySelector(\".accordion__answer-bloc\").style.height = 0;\n    });\n    if (!estOuvert) {\n      wrapper.style.height = reponse.clientHeight + \"px\";\n      console.log(reponse.clientHeight);\n      block.classList.add(\"active\");\n    }\n  });\n});\n\n//# sourceURL=webpack://Afec_Starter_kit/./assets/scripts/components/MenuAccordion.js?");

/***/ }),

/***/ "./assets/scripts/components/ModalNotification.js":
/*!********************************************************!*\
  !*** ./assets/scripts/components/ModalNotification.js ***!
  \********************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\ndocument.addEventListener('DOMContentLoaded', function () {\n  var modal = document.getElementById(\"notificationModal\");\n  var bellIcon = document.getElementById(\"bell-icon\");\n  var span = document.querySelector(\".modal .close\");\n  bellIcon.onclick = function () {\n    modal.style.display = \"block\";\n  };\n  span.onclick = function () {\n    modal.style.display = \"none\";\n  };\n  window.onclick = function (event) {\n    if (event.target == modal) {\n      modal.style.display = \"none\";\n    }\n  };\n});\n\n//# sourceURL=webpack://Afec_Starter_kit/./assets/scripts/components/ModalNotification.js?");

/***/ }),

/***/ "./assets/scripts/data/menu.js":
/*!*************************************!*\
  !*** ./assets/scripts/data/menu.js ***!
  \*************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   links: () => (/* binding */ links),\n/* harmony export */   linksIcons: () => (/* binding */ linksIcons)\n/* harmony export */ });\nvar links = [{\n  title: \"Accueil\",\n  url: \"index.php\"\n}, {\n  title: \"Herbier\",\n  url: \"herbier.php\"\n}, {\n  title: \"Repertoire\",\n  url: \"repertoire.php\"\n}, {\n  title: \"Conseil\",\n  url: \"\"\n}, {\n  title: \"Forum\",\n  url: \"\"\n}, {\n  title: \"Musique des plantes\",\n  url: \"musiqueDesPlantes.php\"\n}, {\n  title: \"Soin des plantes\",\n  url: \"soinDesPlantes.php\"\n}, {\n  title: \"Se connecter\",\n  url: \"connexion.php\"\n}];\nvar linksIcons = [{\n  title: 'logo recherche',\n  img: 'search.svg',\n  url: '',\n  \"class\": ''\n}, {\n  title: 'logo user',\n  img: 'user.svg',\n  url: 'connexion.php',\n  \"class\": ''\n}, {\n  title: 'logo notification',\n  img: 'bell.svg',\n  url: '',\n  \"class\": ''\n}, {\n  title: 'logo burger',\n  img: 'menu.svg',\n  url: '',\n  \"class\": 'burger'\n}];\n\n//# sourceURL=webpack://Afec_Starter_kit/./assets/scripts/data/menu.js?");

/***/ }),

/***/ "./assets/styles/base.scss":
/*!*********************************!*\
  !*** ./assets/styles/base.scss ***!
  \*********************************/
/***/ (() => {

eval("throw new Error(\"Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\\nHookWebpackError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\\nUndefined variable.\\n\\u001b[34m   ╷\\u001b[0m\\n\\u001b[34m10 │\\u001b[0m     background-color: rgba(\\u001b[31m$color-black\\u001b[0m, 1);\\r\\n\\u001b[34m   │\\u001b[0m \\u001b[31m                           ^^^^^^^^^^^^\\u001b[0m\\n\\u001b[34m   ╵\\u001b[0m\\n  assets\\\\styles\\\\settings\\\\_variable.scss 10:28  @import\\n  assets\\\\styles\\\\base.scss 2:9                  root stylesheet\\n    at tryRunOrWebpackError (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\HookWebpackError.js:86:9)\\n    at __webpack_require_module__ (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5301:12)\\n    at __webpack_require__ (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5258:18)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5330:20\\n    at symbolIterator (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3485:9)\\n    at done (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3527:9)\\n    at Hook.eval [as callAsync] (eval at create (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:15:1)\\n    at Hook.CALL_ASYNC_DELEGATE [as _callAsync] (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\tapable\\\\lib\\\\Hook.js:18:14)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5236:43\\n    at symbolIterator (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3482:9)\\n    at timesSync (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:2297:7)\\n    at Object.eachLimit (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3463:5)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5198:16\\n    at symbolIterator (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3485:9)\\n    at timesSync (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:2297:7)\\n    at Object.eachLimit (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3463:5)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5166:15\\n    at symbolIterator (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3485:9)\\n    at done (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3527:9)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5112:8\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:3531:6\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\HookWebpackError.js:67:2\\n    at Hook.eval [as callAsync] (eval at create (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:15:1)\\n    at Cache.store (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Cache.js:111:20)\\n    at ItemCacheFacade.store (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\CacheFacade.js:141:15)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:3530:11\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Cache.js:95:34\\n    at Array.<anonymous> (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\cache\\\\MemoryCachePlugin.js:45:13)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Cache.js:95:19\\n    at Hook.eval [as callAsync] (eval at create (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:19:1)\\n    at Cache.get (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Cache.js:79:18)\\n    at ItemCacheFacade.get (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\CacheFacade.js:115:15)\\n    at Compilation._codeGenerationModule (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:3498:9)\\n    at codeGen (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5100:11)\\n    at symbolIterator (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3482:9)\\n    at timesSync (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:2297:7)\\n    at Object.eachLimit (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3463:5)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5130:14\\n    at processQueue (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\util\\\\processAsyncTree.js:61:4)\\n    at process.processTicksAndRejections (node:internal/process/task_queues:85:11)\\n-- inner error --\\nError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\\nUndefined variable.\\n\\u001b[34m   ╷\\u001b[0m\\n\\u001b[34m10 │\\u001b[0m     background-color: rgba(\\u001b[31m$color-black\\u001b[0m, 1);\\r\\n\\u001b[34m   │\\u001b[0m \\u001b[31m                           ^^^^^^^^^^^^\\u001b[0m\\n\\u001b[34m   ╵\\u001b[0m\\n  assets\\\\styles\\\\settings\\\\_variable.scss 10:28  @import\\n  assets\\\\styles\\\\base.scss 2:9                  root stylesheet\\n    at Object.<anonymous> (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\css-loader\\\\dist\\\\cjs.js??ruleSet[1].rules[1].use[1]!C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\postcss-loader\\\\dist\\\\cjs.js??ruleSet[1].rules[1].use[2]!C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\sass-loader\\\\dist\\\\cjs.js??ruleSet[1].rules[1].use[3]!C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\assets\\\\styles\\\\base.scss:1:7)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\javascript\\\\JavascriptModulesPlugin.js:494:10\\n    at Hook.eval [as call] (eval at create (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:19:10), <anonymous>:7:1)\\n    at Hook.CALL_DELEGATE [as _call] (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\tapable\\\\lib\\\\Hook.js:14:14)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5303:39\\n    at tryRunOrWebpackError (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\HookWebpackError.js:81:7)\\n    at __webpack_require_module__ (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5301:12)\\n    at __webpack_require__ (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5258:18)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5330:20\\n    at symbolIterator (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3485:9)\\n    at done (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3527:9)\\n    at Hook.eval [as callAsync] (eval at create (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:15:1)\\n    at Hook.CALL_ASYNC_DELEGATE [as _callAsync] (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\tapable\\\\lib\\\\Hook.js:18:14)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5236:43\\n    at symbolIterator (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3482:9)\\n    at timesSync (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:2297:7)\\n    at Object.eachLimit (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3463:5)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5198:16\\n    at symbolIterator (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3485:9)\\n    at timesSync (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:2297:7)\\n    at Object.eachLimit (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3463:5)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5166:15\\n    at symbolIterator (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3485:9)\\n    at done (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3527:9)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5112:8\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:3531:6\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\HookWebpackError.js:67:2\\n    at Hook.eval [as callAsync] (eval at create (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:15:1)\\n    at Cache.store (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Cache.js:111:20)\\n    at ItemCacheFacade.store (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\CacheFacade.js:141:15)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:3530:11\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Cache.js:95:34\\n    at Array.<anonymous> (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\cache\\\\MemoryCachePlugin.js:45:13)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Cache.js:95:19\\n    at Hook.eval [as callAsync] (eval at create (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:19:1)\\n    at Cache.get (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Cache.js:79:18)\\n    at ItemCacheFacade.get (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\CacheFacade.js:115:15)\\n    at Compilation._codeGenerationModule (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:3498:9)\\n    at codeGen (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5100:11)\\n    at symbolIterator (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3482:9)\\n    at timesSync (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:2297:7)\\n    at Object.eachLimit (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\neo-async\\\\async.js:3463:5)\\n    at C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:5130:14\\n    at processQueue (C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\webpack\\\\lib\\\\util\\\\processAsyncTree.js:61:4)\\n    at process.processTicksAndRejections (node:internal/process/task_queues:85:11)\\n\\nGenerated code for C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\css-loader\\\\dist\\\\cjs.js??ruleSet[1].rules[1].use[1]!C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\postcss-loader\\\\dist\\\\cjs.js??ruleSet[1].rules[1].use[2]!C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\node_modules\\\\sass-loader\\\\dist\\\\cjs.js??ruleSet[1].rules[1].use[3]!C:\\\\Users\\\\ademo\\\\OneDrive\\\\Bureau\\\\projetafec\\\\assets\\\\styles\\\\base.scss\\n1 | throw new Error(\\\"Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\\\\nUndefined variable.\\\\n\\\\u001b[34m   ╷\\\\u001b[0m\\\\n\\\\u001b[34m10 │\\\\u001b[0m     background-color: rgba(\\\\u001b[31m$color-black\\\\u001b[0m, 1);\\\\r\\\\n\\\\u001b[34m   │\\\\u001b[0m \\\\u001b[31m                           ^^^^^^^^^^^^\\\\u001b[0m\\\\n\\\\u001b[34m   ╵\\\\u001b[0m\\\\n  assets\\\\\\\\styles\\\\\\\\settings\\\\\\\\_variable.scss 10:28  @import\\\\n  assets\\\\\\\\styles\\\\\\\\base.scss 2:9                  root stylesheet\\\");\");\n\n//# sourceURL=webpack://Afec_Starter_kit/./assets/styles/base.scss?");

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