/* Modernizr 2.6.2 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-inlinesvg-svg-svgclippaths-touch-shiv-mq-cssclasses-teststyles-prefixes-ie8compat-load
 */
;window.Modernizr=function(a,b,c){function y(a){j.cssText=a}function z(a,b){return y(m.join(a+";")+(b||""))}function A(a,b){return typeof a===b}function B(a,b){return!!~(""+a).indexOf(b)}function C(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:A(f,"function")?f.bind(d||b):f}return!1}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n={svg:"http://www.w3.org/2000/svg"},o={},p={},q={},r=[],s=r.slice,t,u=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},v=function(b){var c=a.matchMedia||a.msMatchMedia;if(c)return c(b).matches;var d;return u("@media "+b+" { #"+h+" { position: absolute; } }",function(b){d=(a.getComputedStyle?getComputedStyle(b,null):b.currentStyle)["position"]=="absolute"}),d},w={}.hasOwnProperty,x;!A(w,"undefined")&&!A(w.call,"undefined")?x=function(a,b){return w.call(a,b)}:x=function(a,b){return b in a&&A(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=s.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(s.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(s.call(arguments)))};return e}),o.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:u(["@media (",m.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c},o.svg=function(){return!!b.createElementNS&&!!b.createElementNS(n.svg,"svg").createSVGRect},o.inlinesvg=function(){var a=b.createElement("div");return a.innerHTML="<svg/>",(a.firstChild&&a.firstChild.namespaceURI)==n.svg},o.svgclippaths=function(){return!!b.createElementNS&&/SVGClipPath/.test(l.call(b.createElementNS(n.svg,"clipPath")))};for(var D in o)x(o,D)&&(t=D.toLowerCase(),e[t]=o[D](),r.push((e[t]?"":"no-")+t));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)x(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},y(""),i=k=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,e._prefixes=m,e.mq=v,e.testStyles=u,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+r.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))},Modernizr.addTest("ie8compat",function(){return!window.addEventListener&&document.documentMode&&document.documentMode===7});
;
/*
 * In-Field Label jQuery Plugin
 * http://fuelyourcoding.com/scripts/infield.html
 *
 * Copyright (c) 2009 Doug Neiner
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://docs.jquery.com/License
 *
 * @version 0.1
 */
(function($){

    $.InFieldLabels = function(label,field, options){
        // To avoid scope issues, use 'base' instead of 'this'
        // to reference this class from internal events and functions.
        var base = this;

        // Access to jQuery and DOM versions of each element
        base.$label = $(label);
        base.label = label;

 		base.$field = $(field);
		base.field = field;

		base.$label.data("InFieldLabels", base);
		base.showing = true;

        base.init = function(){
			// Merge supplied options with default options
            base.options = $.extend({},$.InFieldLabels.defaultOptions, options);

			// Check if the field is already filled in
			if(base.$field.val() != ""){
				base.$label.hide();
				base.showing = false;
			};

			base.$field.focus(function(){
				base.fadeOnFocus();
			}).blur(function(){
				base.checkForEmpty(true);
			}).bind('keydown.infieldlabel',function(e){
				// Use of a namespace (.infieldlabel) allows us to
				// unbind just this method later
				base.hideOnChange(e);
			}).change(function(e){
				base.checkForEmpty();
			}).bind('onPropertyChange', function(){
				base.checkForEmpty();
			});
        };

		// If the label is currently showing
		// then fade it down to the amount
		// specified in the settings
		base.fadeOnFocus = function(){
			if(base.showing){
				base.setOpacity(base.options.fadeOpacity);
			};
		};

		base.setOpacity = function(opacity){
			base.$label.stop().animate({ opacity: opacity }, base.options.fadeDuration);
			base.showing = (opacity > 0.0);
		};

		// Checks for empty as a fail safe
		// set blur to true when passing from
		// the blur event
		base.checkForEmpty = function(blur){
			if(base.$field.val() == ""){
				base.prepForShow();
				base.setOpacity( blur ? 1.0 : base.options.fadeOpacity );
			} else {
				base.setOpacity(0.0);
			};
		};

		base.prepForShow = function(e){
			if(!base.showing) {
				// Prepare for a animate in...
				base.$label.css({opacity: 0.0}).show();

				// Reattach the keydown event
				base.$field.bind('keydown.infieldlabel',function(e){
					base.hideOnChange(e);
				});
			};
		};

		base.hideOnChange = function(e){
			if(
				(e.keyCode == 16) || // Skip Shift
				(e.keyCode == 9) // Skip Tab
			  ) return;

			if(base.showing){
				base.$label.hide();
				base.showing = false;
			};

			// Remove keydown event to save on CPU processing
			base.$field.unbind('keydown.infieldlabel');
		};

		// Run the initialization method
        base.init();
    };

    $.InFieldLabels.defaultOptions = {
        fadeOpacity: 0.5, // Once a field has focus, how transparent should the label be
		fadeDuration: 300 // How long should it take to animate from 1.0 opacity to the fadeOpacity
    };


    $.fn.inFieldLabels = function(options){
        return this.each(function(){
			// Find input or textarea based on for= attribute
			// The for attribute on the label must contain the ID
			// of the input or textarea element
			var for_attr = $(this).attr('for');
			if( !for_attr ) return; // Nothing to attach, since the for field wasn't used


			// Find the referenced input or textarea element
			var $field = $(
				"input#" + for_attr + "," +
				"textarea#" + for_attr
				);

			if( $field.length == 0) return; // Again, nothing to attach

			// Only create object for input[text], input[password], or textarea
            (new $.InFieldLabels(this, $field[0], options));
        });
    };

})(jQuery);;
/*! Stellar.js v0.6.2 | Copyright 2013, Mark Dalgleish | http://markdalgleish.com/projects/stellar.js | http://markdalgleish.mit-license.org */
(function(e,t,n,r){function d(t,n){this.element=t,this.options=e.extend({},s,n),this._defaults=s,this._name=i,this.init()}var i="stellar",s={scrollProperty:"scroll",positionProperty:"position",horizontalScrolling:!0,verticalScrolling:!0,horizontalOffset:0,verticalOffset:0,responsive:!1,parallaxBackgrounds:!0,parallaxElements:!0,hideDistantElements:!0,hideElement:function(e){e.hide()},showElement:function(e){e.show()}},o={scroll:{getLeft:function(e){return e.scrollLeft()},setLeft:function(e,t){e.scrollLeft(t)},getTop:function(e){return e.scrollTop()},setTop:function(e,t){e.scrollTop(t)}},position:{getLeft:function(e){return parseInt(e.css("left"),10)*-1},getTop:function(e){return parseInt(e.css("top"),10)*-1}},margin:{getLeft:function(e){return parseInt(e.css("margin-left"),10)*-1},getTop:function(e){return parseInt(e.css("margin-top"),10)*-1}},transform:{getLeft:function(e){var t=getComputedStyle(e[0])[f];return t!=="none"?parseInt(t.match(/(-?[0-9]+)/g)[4],10)*-1:0},getTop:function(e){var t=getComputedStyle(e[0])[f];return t!=="none"?parseInt(t.match(/(-?[0-9]+)/g)[5],10)*-1:0}}},u={position:{setLeft:function(e,t){e.css("left",t)},setTop:function(e,t){e.css("top",t)}},transform:{setPosition:function(e,t,n,r,i){e[0].style[f]="translate3d("+(t-n)+"px, "+(r-i)+"px, 0)"}}},a=function(){var t=/^(Moz|Webkit|Khtml|O|ms|Icab)(?=[A-Z])/,n=e("script")[0].style,r="",i;for(i in n)if(t.test(i)){r=i.match(t)[0];break}return"WebkitOpacity"in n&&(r="Webkit"),"KhtmlOpacity"in n&&(r="Khtml"),function(e){return r+(r.length>0?e.charAt(0).toUpperCase()+e.slice(1):e)}}(),f=a("transform"),l=e("<div />",{style:"background:#fff"}).css("background-position-x")!==r,c=l?function(e,t,n){e.css({"background-position-x":t,"background-position-y":n})}:function(e,t,n){e.css("background-position",t+" "+n)},h=l?function(e){return[e.css("background-position-x"),e.css("background-position-y")]}:function(e){return e.css("background-position").split(" ")},p=t.requestAnimationFrame||t.webkitRequestAnimationFrame||t.mozRequestAnimationFrame||t.oRequestAnimationFrame||t.msRequestAnimationFrame||function(e){setTimeout(e,1e3/60)};d.prototype={init:function(){this.options.name=i+"_"+Math.floor(Math.random()*1e9),this._defineElements(),this._defineGetters(),this._defineSetters(),this._handleWindowLoadAndResize(),this._detectViewport(),this.refresh({firstLoad:!0}),this.options.scrollProperty==="scroll"?this._handleScrollEvent():this._startAnimationLoop()},_defineElements:function(){this.element===n.body&&(this.element=t),this.$scrollElement=e(this.element),this.$element=this.element===t?e("body"):this.$scrollElement,this.$viewportElement=this.options.viewportElement!==r?e(this.options.viewportElement):this.$scrollElement[0]===t||this.options.scrollProperty==="scroll"?this.$scrollElement:this.$scrollElement.parent()},_defineGetters:function(){var e=this,t=o[e.options.scrollProperty];this._getScrollLeft=function(){return t.getLeft(e.$scrollElement)},this._getScrollTop=function(){return t.getTop(e.$scrollElement)}},_defineSetters:function(){var t=this,n=o[t.options.scrollProperty],r=u[t.options.positionProperty],i=n.setLeft,s=n.setTop;this._setScrollLeft=typeof i=="function"?function(e){i(t.$scrollElement,e)}:e.noop,this._setScrollTop=typeof s=="function"?function(e){s(t.$scrollElement,e)}:e.noop,this._setPosition=r.setPosition||function(e,n,i,s,o){t.options.horizontalScrolling&&r.setLeft(e,n,i),t.options.verticalScrolling&&r.setTop(e,s,o)}},_handleWindowLoadAndResize:function(){var n=this,r=e(t);n.options.responsive&&r.bind("load."+this.name,function(){n.refresh()}),r.bind("resize."+this.name,function(){n._detectViewport(),n.options.responsive&&n.refresh()})},refresh:function(n){var r=this,i=r._getScrollLeft(),s=r._getScrollTop();(!n||!n.firstLoad)&&this._reset(),this._setScrollLeft(0),this._setScrollTop(0),this._setOffsets(),this._findParticles(),this._findBackgrounds(),n&&n.firstLoad&&/WebKit/.test(navigator.userAgent)&&e(t).load(function(){var e=r._getScrollLeft(),t=r._getScrollTop();r._setScrollLeft(e+1),r._setScrollTop(t+1),r._setScrollLeft(e),r._setScrollTop(t)}),this._setScrollLeft(i),this._setScrollTop(s)},_detectViewport:function(){var e=this.$viewportElement.offset(),t=e!==null&&e!==r;this.viewportWidth=this.$viewportElement.width(),this.viewportHeight=this.$viewportElement.height(),this.viewportOffsetTop=t?e.top:0,this.viewportOffsetLeft=t?e.left:0},_findParticles:function(){var t=this,n=this._getScrollLeft(),i=this._getScrollTop();if(this.particles!==r)for(var s=this.particles.length-1;s>=0;s--)this.particles[s].$element.data("stellar-elementIsActive",r);this.particles=[];if(!this.options.parallaxElements)return;this.$element.find("[data-stellar-ratio]").each(function(n){var i=e(this),s,o,u,a,f,l,c,h,p,d=0,v=0,m=0,g=0;if(!i.data("stellar-elementIsActive"))i.data("stellar-elementIsActive",this);else if(i.data("stellar-elementIsActive")!==this)return;t.options.showElement(i),i.data("stellar-startingLeft")?(i.css("left",i.data("stellar-startingLeft")),i.css("top",i.data("stellar-startingTop"))):(i.data("stellar-startingLeft",i.css("left")),i.data("stellar-startingTop",i.css("top"))),u=i.position().left,a=i.position().top,f=i.css("margin-left")==="auto"?0:parseInt(i.css("margin-left"),10),l=i.css("margin-top")==="auto"?0:parseInt(i.css("margin-top"),10),h=i.offset().left-f,p=i.offset().top-l,i.parents().each(function(){var t=e(this);if(t.data("stellar-offset-parent")===!0)return d=m,v=g,c=t,!1;m+=t.position().left,g+=t.position().top}),s=i.data("stellar-horizontal-offset")!==r?i.data("stellar-horizontal-offset"):c!==r&&c.data("stellar-horizontal-offset")!==r?c.data("stellar-horizontal-offset"):t.horizontalOffset,o=i.data("stellar-vertical-offset")!==r?i.data("stellar-vertical-offset"):c!==r&&c.data("stellar-vertical-offset")!==r?c.data("stellar-vertical-offset"):t.verticalOffset,t.particles.push({$element:i,$offsetParent:c,isFixed:i.css("position")==="fixed",horizontalOffset:s,verticalOffset:o,startingPositionLeft:u,startingPositionTop:a,startingOffsetLeft:h,startingOffsetTop:p,parentOffsetLeft:d,parentOffsetTop:v,stellarRatio:i.data("stellar-ratio")!==r?i.data("stellar-ratio"):1,width:i.outerWidth(!0),height:i.outerHeight(!0),isHidden:!1})})},_findBackgrounds:function(){var t=this,n=this._getScrollLeft(),i=this._getScrollTop(),s;this.backgrounds=[];if(!this.options.parallaxBackgrounds)return;s=this.$element.find("[data-stellar-background-ratio]"),this.$element.data("stellar-background-ratio")&&(s=s.add(this.$element)),s.each(function(){var s=e(this),o=h(s),u,a,f,l,p,d,v,m,g,y=0,b=0,w=0,E=0;if(!s.data("stellar-backgroundIsActive"))s.data("stellar-backgroundIsActive",this);else if(s.data("stellar-backgroundIsActive")!==this)return;s.data("stellar-backgroundStartingLeft")?c(s,s.data("stellar-backgroundStartingLeft"),s.data("stellar-backgroundStartingTop")):(s.data("stellar-backgroundStartingLeft",o[0]),s.data("stellar-backgroundStartingTop",o[1])),p=s.css("margin-left")==="auto"?0:parseInt(s.css("margin-left"),10),d=s.css("margin-top")==="auto"?0:parseInt(s.css("margin-top"),10),v=s.offset().left-p-n,m=s.offset().top-d-i,s.parents().each(function(){var t=e(this);if(t.data("stellar-offset-parent")===!0)return y=w,b=E,g=t,!1;w+=t.position().left,E+=t.position().top}),u=s.data("stellar-horizontal-offset")!==r?s.data("stellar-horizontal-offset"):g!==r&&g.data("stellar-horizontal-offset")!==r?g.data("stellar-horizontal-offset"):t.horizontalOffset,a=s.data("stellar-vertical-offset")!==r?s.data("stellar-vertical-offset"):g!==r&&g.data("stellar-vertical-offset")!==r?g.data("stellar-vertical-offset"):t.verticalOffset,t.backgrounds.push({$element:s,$offsetParent:g,isFixed:s.css("background-attachment")==="fixed",horizontalOffset:u,verticalOffset:a,startingValueLeft:o[0],startingValueTop:o[1],startingBackgroundPositionLeft:isNaN(parseInt(o[0],10))?0:parseInt(o[0],10),startingBackgroundPositionTop:isNaN(parseInt(o[1],10))?0:parseInt(o[1],10),startingPositionLeft:s.position().left,startingPositionTop:s.position().top,startingOffsetLeft:v,startingOffsetTop:m,parentOffsetLeft:y,parentOffsetTop:b,stellarRatio:s.data("stellar-background-ratio")===r?1:s.data("stellar-background-ratio")})})},_reset:function(){var e,t,n,r,i;for(i=this.particles.length-1;i>=0;i--)e=this.particles[i],t=e.$element.data("stellar-startingLeft"),n=e.$element.data("stellar-startingTop"),this._setPosition(e.$element,t,t,n,n),this.options.showElement(e.$element),e.$element.data("stellar-startingLeft",null).data("stellar-elementIsActive",null).data("stellar-backgroundIsActive",null);for(i=this.backgrounds.length-1;i>=0;i--)r=this.backgrounds[i],r.$element.data("stellar-backgroundStartingLeft",null).data("stellar-backgroundStartingTop",null),c(r.$element,r.startingValueLeft,r.startingValueTop)},destroy:function(){this._reset(),this.$scrollElement.unbind("resize."+this.name).unbind("scroll."+this.name),this._animationLoop=e.noop,e(t).unbind("load."+this.name).unbind("resize."+this.name)},_setOffsets:function(){var n=this,r=e(t);r.unbind("resize.horizontal-"+this.name).unbind("resize.vertical-"+this.name),typeof this.options.horizontalOffset=="function"?(this.horizontalOffset=this.options.horizontalOffset(),r.bind("resize.horizontal-"+this.name,function(){n.horizontalOffset=n.options.horizontalOffset()})):this.horizontalOffset=this.options.horizontalOffset,typeof this.options.verticalOffset=="function"?(this.verticalOffset=this.options.verticalOffset(),r.bind("resize.vertical-"+this.name,function(){n.verticalOffset=n.options.verticalOffset()})):this.verticalOffset=this.options.verticalOffset},_repositionElements:function(){var e=this._getScrollLeft(),t=this._getScrollTop(),n,r,i,s,o,u,a,f=!0,l=!0,h,p,d,v,m;if(this.currentScrollLeft===e&&this.currentScrollTop===t&&this.currentWidth===this.viewportWidth&&this.currentHeight===this.viewportHeight)return;this.currentScrollLeft=e,this.currentScrollTop=t,this.currentWidth=this.viewportWidth,this.currentHeight=this.viewportHeight;for(m=this.particles.length-1;m>=0;m--)i=this.particles[m],s=i.isFixed?1:0,this.options.horizontalScrolling?(h=(e+i.horizontalOffset+this.viewportOffsetLeft+i.startingPositionLeft-i.startingOffsetLeft+i.parentOffsetLeft)*-(i.stellarRatio+s-1)+i.startingPositionLeft,d=h-i.startingPositionLeft+i.startingOffsetLeft):(h=i.startingPositionLeft,d=i.startingOffsetLeft),this.options.verticalScrolling?(p=(t+i.verticalOffset+this.viewportOffsetTop+i.startingPositionTop-i.startingOffsetTop+i.parentOffsetTop)*-(i.stellarRatio+s-1)+i.startingPositionTop,v=p-i.startingPositionTop+i.startingOffsetTop):(p=i.startingPositionTop,v=i.startingOffsetTop),this.options.hideDistantElements&&(l=!this.options.horizontalScrolling||d+i.width>(i.isFixed?0:e)&&d<(i.isFixed?0:e)+this.viewportWidth+this.viewportOffsetLeft,f=!this.options.verticalScrolling||v+i.height>(i.isFixed?0:t)&&v<(i.isFixed?0:t)+this.viewportHeight+this.viewportOffsetTop),l&&f?(i.isHidden&&(this.options.showElement(i.$element),i.isHidden=!1),this._setPosition(i.$element,h,i.startingPositionLeft,p,i.startingPositionTop)):i.isHidden||(this.options.hideElement(i.$element),i.isHidden=!0);for(m=this.backgrounds.length-1;m>=0;m--)o=this.backgrounds[m],s=o.isFixed?0:1,u=this.options.horizontalScrolling?(e+o.horizontalOffset-this.viewportOffsetLeft-o.startingOffsetLeft+o.parentOffsetLeft-o.startingBackgroundPositionLeft)*(s-o.stellarRatio)+"px":o.startingValueLeft,a=this.options.verticalScrolling?(t+o.verticalOffset-this.viewportOffsetTop-o.startingOffsetTop+o.parentOffsetTop-o.startingBackgroundPositionTop)*(s-o.stellarRatio)+"px":o.startingValueTop,c(o.$element,u,a)},_handleScrollEvent:function(){var e=this,t=!1,n=function(){e._repositionElements(),t=!1},r=function(){t||(p(n),t=!0)};this.$scrollElement.bind("scroll."+this.name,r),r()},_startAnimationLoop:function(){var e=this;this._animationLoop=function(){p(e._animationLoop),e._repositionElements()},this._animationLoop()}},e.fn[i]=function(t){var n=arguments;if(t===r||typeof t=="object")return this.each(function(){e.data(this,"plugin_"+i)||e.data(this,"plugin_"+i,new d(this,t))});if(typeof t=="string"&&t[0]!=="_"&&t!=="init")return this.each(function(){var r=e.data(this,"plugin_"+i);r instanceof d&&typeof r[t]=="function"&&r[t].apply(r,Array.prototype.slice.call(n,1)),t==="destroy"&&e.data(this,"plugin_"+i,null)})},e[i]=function(n){var r=e(t);return r.stellar.apply(r,Array.prototype.slice.call(arguments,0))},e[i].scrollProperty=o,e[i].positionProperty=u,t.Stellar=d})(jQuery,this,document);;
/*  CUSTOM IS MOBILE FUNCTION
------------------------------------*/
(function($){
	$(function(){
		if ($('body').hasClass('news-center')) {
			$('.view-display-id-campus_news .view-header ul li a').live('click', function(event){
				event.preventDefault();
				$('#edit-date-filter-value-date').val($(this).data('date'));
				$('#edit-submit-news-center').click();
			});
		}
	});
})(jQuery);


/*  CUSTOM IS MOBILE FUNCTION
------------------------------------*/
(function($){
	$(function(){
		$window = $(window);
		window.isMobile = function() {
			return ($window.width() < 768) ? true : false;
		}
		window.getDimensions = function(item) {
			var img = new Image();
			img.src = item.css('background-image').replace(/url\(|\)$/ig, '');
			return {width: img.width, height: img.height};
		}
	});
})(jQuery);


/*  PARALLAX
------------------------------------*/
(function($){
	$(function(){
		if (!isMobile()) {
			$('body.not-front').css({'background-attachment': 'fixed'});
			return;
			if($.isFunction($.fn.rellax) && $('html').hasClass('no-touch')) {
				$('body.not-front').delay(100).rellax({axis: 'y', speed: .5});
			} else if($.isFunction($.fn.stellar) && $('html').hasClass('no-touch')) {
				$('body.not-front').stellar({
					// Set scrolling to be in either one or both directions
					horizontalScrolling: false,
					verticalScrolling: true,

					// Refreshes parallax content on window load and resize
					responsive: false,

					// Select which property is used to calculate scroll.
					// Choose 'scroll', 'position', 'margin' or 'transform',
					// or write your own 'scrollProperty' plugin.
					scrollProperty: 'scroll',

					// Enable or disable the two types of parallax
					parallaxBackgrounds: true,
					parallaxElements: false,

					// Hide parallax elements that move outside the viewport
					hideDistantElements: false,
				});
			}
		} else {
				// var $pageInfo = $('.pageInfo');
				// var _height = $pageInfo.outerHeight() + $pageInfo.offset().top;
				// var _width = 0;
				// $('body').css({'background-size': _width + ' ' + _height + 'px'});
				// console.log(getDimensions($('body')));
				// $('body').css({'background-size': 'auto'});
		}
	});
})(jQuery);

/*  TOP NAVIGATION
------------------------------------*/
(function($){
	$(function(){
		var $header = $('header');
		var $notificationsBar = $('.notificationsBar');
		var globalNavHeight = 36;
		var init = $header.height() - globalNavHeight;
		var docked = false;
		var $departmentsNav = $('.departmentsNav');
		var $departmentsLink = $('.allDepartments');
		var $headerContent = $('.headerContent');
		var $globalNav = $('.globalNav');
		var loggedIn = ($('body').hasClass('logged-in')) ? true : false;
		var adminHeaderHeight = (loggedIn) ? parseInt($('body').css('margin-top')) : 0;
		var speed = 250;

		$(window).bind('scroll', function(){
			if (!isMobile()) {
				if (!docked && scrollTop() > getInit()){
					docked = true;
					$header.addClass('docked');
                                        $('.header-logo').hide();
					$header.css('top', '-12px');
					$header.animate({top: adminHeaderHeight+globalNavHeight || globalNavHeight}, speed);
				} else if (docked && scrollTop() <= init) {
					docked = false;
					$header.removeClass('docked');
                                        $('.header-logo').show();
					$header.css('top', 0);
				}
			}
		});

		function getInit() {
			return $header.height() - (globalNavHeight + $notificationsBar.outerHeight());
		}

		function scrollTop() {
			return document.body.scrollTop || document.documentElement.scrollTop;
		}

		$('.allDepartments, .departmentsNav .closeBtn').click(function(){
			if (!isMobile()) {
				//$headerContent.css('margin-top', $departmentsNav.height());
				$headerContent.animate({'margin-top': ($departmentsNav.is(':visible')) ? 0 : $departmentsNav.height()}, speed);
				$departmentsNav.slideToggle(speed);
				$departmentsLink.toggleClass('active');
				return false;
			}
		});

		$('.touch .audienceNav').click(function(){
			$('.audienceNav ul').toggleClass('visible');
		});

		if ($('body').hasClass('notifications')) {
			if (!isMobile()) {
				setNotifications();
			}
			$(window).bind('resize', function(){
				if (!isMobile()) {
					setNotifications();
				} else {
					removeNotifications();
				}
			});
		}

		$('.notificationsBar .closeBtn').click(function(event){
			$('body').removeClass('notifications');
			$('.notificationsBar').remove();
			removeNotifications();
		});

		function setNotifications() {
			var _height = $notificationsBar.outerHeight() + adminHeaderHeight;
			$('body').css({'background-position': 'center ' + parseInt(_height) + 'px'});
			$globalNav.css({'top': _height});
			$headerContent.css({'margin-top': _height-adminHeaderHeight});
			$('.pageInfo').css({'padding-top': _height+200-adminHeaderHeight});
		}

		function removeNotifications() {
			$('body').removeAttr('style');
			$globalNav.removeAttr('style');
			$headerContent.removeAttr('style');
			$('.pageInfo').removeAttr('style');
		}
	});
})(jQuery);


/*	SMOOTH SCROLLING
------------------------------------*/
(function($){
	$(function(){
		if ($('body').hasClass('front')) {
			var $departmentsNav = $('.departmentsNav');
			var $mobileNav = $('.mobileNav');
			$('.primaryNav a').click(function(event){
				event.preventDefault();
				var $anchor = $(this);
				var $header = $('header');
				var _headerOffset = 84;
				if ($departmentsNav.is(':visible')){
					_headerOffset = 84 + $departmentsNav.innerHeight();
				}
				if ($mobileNav.is(':visible')){
					_headerOffset = 40;
				}
				var _anchorLink = $anchor.attr('href').split('#');
				_anchorLink = _anchorLink[_anchorLink.length-1].replace(/\/|#/gi, '');
				$('html, body').stop().animate({
					scrollTop: Math.ceil($('#' + _anchorLink).offset().top - _headerOffset)
				}, 1100);
				$('.headerContent').addClass('hidden').css('top', 'auto');
			});
		}
	});
})(jQuery);


/*	BACK TO TOP
------------------------------------*/
(function($){
	$(function(){
		var $backTop = $('.backToTop');
		$(window).bind('scroll', function(){
			if (!isMobile()){
				if (scrollTop() > $(window).height()){
					$backTop.fadeIn();
				} else {
					$backTop.hide();
				}
			}
		});

		function scrollTop() {
			return document.body.scrollTop || document.documentElement.scrollTop;
		}

		$('.backToTop a').click(function(event){
			event.preventDefault();
			$('html, body').stop().animate({scrollTop: 0}, 750);
		});
	});
})(jQuery);


/*	MOBILE NAV
------------------------------------*/
(function($){
	$(function(){
		$mobileNav = $('.headerContent');
		//$mobileNav.css('top', -$mobileNav.height() + 30);
		$mobileNav.addClass('hidden');
		$('.mobileMenu').click(function(){
			if ($mobileNav.hasClass('hidden')) {
				$mobileNav.removeClass('hidden').css('top', -$mobileNav.height()).animate({top: 0}, 250);
			} else {
				$mobileNav.addClass('hidden').css('top', 'auto');
			}
			return false;
		});
	});
})(jQuery);


/*	INFIELD LABELS
------------------------------------*/
(function($){
	$(function(){
		$('.stayInformed label').inFieldLabels();
		$('.stayInformed').ajaxSuccess(function(){
			$('label').inFieldLabels();
		});
	});
})(jQuery);


/*  TOGGLE LIST DISPLAYS
------------------------------------*/
(function($) {
	$(function() {
		$('.list-majorsMinors li h4').click(function(){
			$(this).parent().toggleClass('expanded');
		});
	});
})(jQuery);


/*  jqueryUI RADIO BUTTONS
------------------------------------*/
(function($) {
	$(function() {
		if($('form input[type="radio"]').length) {
			$('form input[type="radio"]').button();
		}
	});
})(jQuery);


/*  TABS
------------------------------------*/
(function($){
	$(function(){
		$('.tabContentContainer').each(function(index){
			$self = $(this);
			$tabContents = $('.tabContent', $self);

			// Create navigation
			$nav = $().add('<div>');
			$self.parent().prepend($nav);
			$nav.addClass('tabNav tabs' + $tabContents.length + ' clr');

			$list = $().add('<ul>');
			$nav.append($list);
			$tabContents.each(function(){
				_self = $(this);
				_h2 = $('h2', _self).hide();
				$list.append('<li><a href="#">' + _h2.html() + '</a><span></span></li>');
			});

			if ($tabContents.length > 1) {
				$tabContents.addClass('hidden').removeClass('active');
				$tabContents.first().removeClass('hidden').addClass('active');
				$('li', $list).first().addClass('active');
			}
		});

		$('.tabNav a').click(function(){
			var $currentSection = $(this).parents('.tabNav').parent();
			var $tabParent = $(this).parent();
			var selectedTab = $tabParent.index();
			// update active tab
			$('.tabNav li', $currentSection).removeClass('active');
			$tabParent.addClass('active');
			// update active content
			$('.tabContent', $currentSection).removeClass('active').addClass('hidden');
			$('.tabContent', $currentSection).eq(selectedTab).removeClass('hidden').addClass('active');
			return false;
		});
	});
})(jQuery);


/*  NEWS SLIDESHOW
------------------------------------*/
(function($){
	window.nextNewsCenterItem = function () {
		$('.news-nav div.next').click();
	}

	$(function(){
		if ($('body').hasClass('news-center')) {
			var _height = 0, _index = 0;
			$container = $('.view-display-id-featured');
			// Create navigation
			$slides = $('ul li', $container);
			if ($slides.length > 1) {
				$navContainer = $().add('<div>');
				$nav = $().add('<ul>');
				$navContainer.append($nav);
				$container.append($navContainer);
				$navContainer.addClass('news-nav');
				$slides.each(function(index){
					$nav.append('<li><a>' + index + '</a></li>');
				});
				$navContainer.append('<div class="prev"></div><div class="next"></div>');
				$slides.first().addClass('active');
				$navLinks = $('.news-nav li');
				$navLinks.first().addClass('active');
				$navLinks.click(function(event){
					event.preventDefault();
					_index = $(this).index();
					$navLinks.removeClass('active');
					$(this).addClass('active');
					$slides.fadeOut(500);
					$slides.eq(_index).delay(510).fadeIn(500);
				});
				$('div', $navContainer).click(function(){
					$this = $(this);
					if ($this.hasClass('next')) {
						$navLinks.eq((_index < $slides.length-1) ? _index+1 : 0).click();
					} else {
						$navLinks.eq((_index > 0) ? _index-1 : $slides.length-1).click();
					}
				});
				/* set the timer */
				var slideTimer;
				$(function(){
					slideTimer = setInterval('nextNewsCenterItem()', 5000);
					$('.block.news-featured').mouseenter(function(){
						clearInterval(slideTimer);
					});
					$('.block.news-featured').mouseleave(function(){
						clearInterval(slideTimer);
						slideTimer = setInterval('nextNewsCenterItem()', 5000);
					});
				});
			}
		}
	});
})(jQuery);


/*  APPLY NOW TOGGLE
------------------------------------*/
(function($){
	$(function(){
		// variables
		$applynow = $('.apply-now-block');
		$graditems = $('.grad', $applynow);
		$ugraditems = $('.ugrad', $applynow);
		$discoveritems = $('.discoverMore', $applynow);
		$applysteplinks = $('.applyStepLinks', $applynow);
		$step1 = $('#enrollType', $applynow);
		$step2 = $('#statusSelect', $applynow);
		$step3 = $('#applyStep', $applynow);

		// hide all items
		$graditems.hide();
		$ugraditems.hide();
		$discoveritems.hide();
		$applysteplinks.hide();

		// step 1
		$step1.change(function(){
			_step1selection = $('input:checked', $step1).val();
			$('h3', $step2).removeClass('inactive');
			$('.default', $step2).hide();
			// reset step 3
			$('.default', $step3).show();
			$('h3', $step3).addClass('inactive');
			$applysteplinks.hide();
			$('input', $step2).attr("checked", false).button("refresh");
			// show undergrad or grad links
			if (_step1selection == "Undergraduate"){
				$graditems.hide();
				$ugraditems.show();
			} else if (_step1selection == "Graduate"){
				$ugraditems.hide();
				$graditems.show();
			}
		});

		// step 2
		$step2.change(function(){
			_step2selection = $('input:checked', $step2).val();
			$('h3', $step3).removeClass('inactive');
			$('.default', $step3).hide();
			// show applyl now links
			$applysteplinks.show();
			// show selected discover links
			$discoveritems.hide();
			$('.'+_step2selection).show();
			// show proper apply buttons
			if (_step2selection == 'FirstYear'){
				$('.apply-commonapp, .apply-applytx').show();
				$('.apply-other').hide();
			} else if (_step2selection == 'TransferStudent'){
				$('.apply-commonapp').show();
				$('.apply-applytx, .apply-other').hide();
			} else if (_step2selection == 'InternationalStudent'){
				$('.apply-commonapp').show();
				$('.apply-applytx, .apply-other').hide();
			} else if (_step2selection == 'Non-DegreeStudent'){
				$('.apply-other').show();
				$('.apply-commonapp, .apply-applytx').hide();
			}
		});
	});
})(jQuery);


/*  AUDIENCE PAGE BLOCK HEIGHTS
------------------------------------*/
(function($){
	$(function(){
		if ($('body').hasClass('audience-landing')) {
			_height = 0;
			$lists = $('.audience-landing #content .leftNav, .audience-landing #content .important-dates .content');
			$lists.each(function(){
				$this = $(this);
				if ($this.outerHeight() > _height) _height = $this.outerHeight();
			});
			$lists.height(_height);
		}
	});
})(jQuery);


/*  IMAGE CAPTIONS
------------------------------------*/
(function($){
	$(function(){
		$('img.caption').each(function(){
			$this = $(this);
			_title = $this.attr('title');
			if (_title) {
				$container = $().add('<span>');
				$this.after($container);
				$container.attr({'class': $this.attr('class')});
				$this.removeAttr('class');
				$container.append($this);
				$container.append('<blockquote>');
				$caption = $().add('<p>');
				$('blockquote', $container).append($caption);
				$caption.html(_title);
			}
		});
	});
})(jQuery);

/*  LANDING PAGE VIDEOS
------------------------------------*/
(function($){
	$(function(){
		var _open = false, $video = undefined, $parent = undefined;
		$('section.withVideo').each(function(){
			$close = $().add('<div>');
			$close.attr({'class': 'close-video'});
			$(this).find('.fluid-width-video-wrapper').first().append($close);
		});
		$('section.withVideo img').click(function(event){
			_open = true;
			$this = $(this);
			$section = $this.closest('section');
			$video = ($video != undefined) ? $video : $section.find('iframe').first();
			$parent = ($parent != undefined) ? $parent : $video.parent();
			if (!$('iframe', $parent).length) {
				$parent.prepend($video);
			}
			$row = $section.find('.row').first();
			$section.animate({'height': $video.height(), 'padding-top': $video.height()});
		});
		$('section.withVideo .close-video').click(function(event){
			_open = false;
			$section.animate({'height': $section.find('.row').first().height(), 'padding-top': 0}, {'complete': function(){
				$section.removeAttr('style');
				$video.detach();
			}});
		});
		if ($('section.withVideo').length) {
			$(window).bind('resize', function(){
				if (_open) {
					$section.css({'height': $video.height(), 'padding-top': $video.height()});
				}
			});
		}
	});
})(jQuery);;
