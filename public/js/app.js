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

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nTypeError: /home/adri/laravel/proba/resources/js/app.js: Duplicate declaration \"app\"\n\u001b[0m \u001b[90m 39 | \u001b[39m\u001b[90m */\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 40 | \u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 41 | \u001b[39m\u001b[36mconst\u001b[39m app \u001b[33m=\u001b[39m \u001b[36mnew\u001b[39m \u001b[33mVue\u001b[39m({\u001b[0m\n\u001b[0m \u001b[90m    | \u001b[39m      \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 42 | \u001b[39m    el\u001b[33m:\u001b[39m \u001b[32m'#app'\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 43 | \u001b[39m})\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 44 | \u001b[39m\u001b[0m\n    at File.buildCodeFrameError (/home/adri/laravel/proba/node_modules/@babel/core/lib/transformation/file/file.js:261:12)\n    at Scope.checkBlockScopedCollisions (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/scope/index.js:346:22)\n    at Scope.registerBinding (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/scope/index.js:503:16)\n    at Scope.registerDeclaration (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/scope/index.js:443:14)\n    at Object.BlockScoped (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/scope/index.js:189:28)\n    at Object.newFn (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/visitors.js:230:17)\n    at NodePath._call (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/path/context.js:53:20)\n    at NodePath.call (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/path/context.js:36:14)\n    at NodePath.visit (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/path/context.js:88:12)\n    at TraversalContext.visitQueue (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/context.js:118:16)\n    at TraversalContext.visitMultiple (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/context.js:85:17)\n    at TraversalContext.visit (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/context.js:144:19)\n    at Function.traverse.node (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/index.js:94:17)\n    at traverse (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/index.js:76:12)\n    at NodePath.traverse (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/path/index.js:161:24)\n    at Scope.crawl (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/scope/index.js:683:10)\n    at Scope.init (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/scope/index.js:633:32)\n    at NodePath.setScope (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/path/context.js:126:30)\n    at NodePath.setContext (/home/adri/laravel/proba/node_modules/@babel/traverse/lib/path/context.js:141:8)\n    at new File (/home/adri/laravel/proba/node_modules/@babel/core/lib/transformation/file/file.js:104:8)\n    at normalizeFile (/home/adri/laravel/proba/node_modules/@babel/core/lib/transformation/normalize-file.js:141:10)\n    at runSync (/home/adri/laravel/proba/node_modules/@babel/core/lib/transformation/index.js:44:43)\n    at runAsync (/home/adri/laravel/proba/node_modules/@babel/core/lib/transformation/index.js:35:14)\n    at process.nextTick (/home/adri/laravel/proba/node_modules/@babel/core/lib/transform.js:34:34)\n    at _combinedTickCallback (internal/process/next_tick.js:132:7)\n    at process._tickCallback (internal/process/next_tick.js:181:9)");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/adri/laravel/proba/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /home/adri/laravel/proba/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });