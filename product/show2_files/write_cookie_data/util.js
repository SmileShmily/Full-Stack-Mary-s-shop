var mediav=window.mediav||{};mediav.cookie={};mediav.cookie._isValidKey=function(a){return(new RegExp('^[^\\x00-\\x20\\x7f\\(\\)<>@,;:\\\\\\"\\[\\]\\?=\\{\\}\\/\\u0080-\\uffff]+\x24')).test(a)};mediav.cookie.getRaw=function(b){if(mediav.cookie._isValidKey(b)){var c=new RegExp("(^| )"+b+"=([^;]*)(;|\x24)"),a=c.exec(document.cookie);if(a){return a[2]||null}}return null};mediav.cookie.get=function(a){var b=mediav.cookie.getRaw(a);if("string"==typeof b){b=decodeURIComponent(b);return b}return null};mediav.cookie.setRaw=function(c,d,b){if(!mediav.cookie._isValidKey(c)){return}b=b||{};var a=b.expires;if("number"==typeof b.expires){a=new Date();a.setTime(a.getTime()+b.expires)}document.cookie=c+"="+d+(b.path?"; path="+b.path:"")+(a?"; expires="+a.toGMTString():"")+(b.domain?"; domain="+b.domain:"")+(b.secure?"; secure":"")};mediav.cookie.remove=function(b,a){a=a||{};a.expires=new Date(0);mediav.cookie.setRaw(b,"",a)};mediav.cookie.set=function(b,c,a){mediav.cookie.setRaw(b,encodeURIComponent(c),a)};mediav.browser=mediav.browser||{};(function(){var a=navigator.userAgent;if(/(\d+\.\d)?(?:\.\d)?\s+safari\/?(\d+\.\d+)?/i.test(a)&&!/chrome/i.test(a)){mediav.browser.safari=+(RegExp["\x241"]||RegExp["\x242"])}})();if(/msie (\d+\.\d)/i.test(navigator.userAgent)){mediav.browser.ie=mediav.ie=document.documentMode||+RegExp["\x241"]}if(/opera\/(\d+\.\d)/i.test(navigator.userAgent)){mediav.browser.opera=+RegExp["\x241"]}mediav.dom=mediav.dom||{};(function(){var a=mediav.dom.ready=function(){var g=false,f=[],c;if(document.addEventListener){c=function(){document.removeEventListener("DOMContentLoaded",c,false);d()}}else{if(document.attachEvent){c=function(){if(document.readyState==="complete"){document.detachEvent("onreadystatechange",c);d()}}}}function d(){if(!d.isReady){d.isReady=true;for(var k=0,h=f.length;k<h;k++){f[k]()}}}function b(){try{document.documentElement.doScroll("left")}catch(h){setTimeout(b,1);return}d()}function e(){if(g){return}g=true;if(document.addEventListener){document.addEventListener("DOMContentLoaded",c,false);window.addEventListener("load",d,false)}else{if(document.attachEvent){document.attachEvent("onreadystatechange",c);window.attachEvent("onload",d);var h=false;try{h=window.frameElement==null}catch(i){}if(document.documentElement.doScroll&&h){b()}}}}e();return function(h){d.isReady?h():f.push(h)}}();a.isReady=false})();mediav.url=mediav.url||{};mediav.lang=mediav.lang||{};mediav.lang.isArray=function(a){return"[object Array]"==Object.prototype.toString.call(a)};mediav.url.queryToJson=function(a){var f=a.substr(a.lastIndexOf("?")+1),c=f.split("&"),e=c.length,k={},d=0,h,g,j,b;for(;d<e;d++){if(!c[d]){continue}b=c[d].split("=");h=b[0];g=decodeURIComponent(b[1]);j=k[h];if("undefined"==typeof j){k[h]=g}else{if(mediav.lang.isArray(j)){j.push(g)}else{k[h]=[j,g]}}}return k};mediav.url.escapeSymbol=function(a){return String(a).replace(/\%/g,"%25").replace(/&/g,"%26").replace(/\+/g,"%2B").replace(/\ /g,"%20").replace(/\//g,"%2F").replace(/\#/g,"%23").replace(/\=/g,"%3D").replace(/\?/g,"%3F")};mediav.object=mediav.object||{};mediav.object.each=function(e,c){var b,a,d;if("function"==typeof c){for(a in e){if(e.hasOwnProperty(a)){d=e[a];b=c.call(e,d,a);if(b===false){break}}}}return e};mediav.lang=mediav.lang||{};mediav.lang.isArray=function(a){return"[object Array]"==Object.prototype.toString.call(a)};mediav.url.jsonToQuery=function(c,e){var a=[],d,b=e||function(f){return mediav.url.escapeSymbol(f)};mediav.object.each(c,function(g,f){if(mediav.lang.isArray(g)){d=g.length;while(d--){a.push(f+"="+b(g[d],f))}}else{a.push(f+"="+b(g,f))}});return a.join("&")};mediav.url.queryJson=mediav.url.queryToJson(window.location.href);mediav.json=mediav.json||{};mediav.json.parse=function(a){return(new Function("return ("+a+")"))()};mediav.json.decode=mediav.json.parse;mediav.json.stringify=(function(){var b={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"};function a(f){if(/["\\\x00-\x1f]/.test(f)){f=f.replace(/["\\\x00-\x1f]/g,function(g){var h=b[g];if(h){return h}h=g.charCodeAt();return"\\u00"+Math.floor(h/16).toString(16)+(h%16).toString(16)})}return'"'+f+'"'}function d(m){var g=["["],h=m.length,f,j,k;for(j=0;j<h;j++){k=m[j];switch(typeof k){case"undefined":case"function":case"unknown":break;default:if(f){g.push(",")}g.push(mediav.json.stringify(k));f=1}}g.push("]");return g.join("")}function c(f){return f<10?"0"+f:f}function e(f){return'"'+f.getFullYear()+"-"+c(f.getMonth()+1)+"-"+c(f.getDate())+"T"+c(f.getHours())+":"+c(f.getMinutes())+":"+c(f.getSeconds())+'"'}return function(k){switch(typeof k){case"undefined":return"undefined";case"number":return isFinite(k)?String(k):"null";case"string":return a(k);case"boolean":return String(k);default:if(k===null){return"null"}else{if(k instanceof Array){return d(k)}else{if(k instanceof Date){return e(k)}else{var g=["{"],j=mediav.json.stringify,f,i;for(var h in k){if(Object.prototype.hasOwnProperty.call(k,h)){i=k[h];switch(typeof i){case"undefined":case"unknown":case"function":break;default:if(f){g.push(",")}f=1;g.push(j(h)+":"+j(i))}}}g.push("}");return g.join("")}}}}}})();mediav.json.encode=mediav.json.stringify;mediav.array=mediav.array||{};mediav.array.indexOf=function(e,b,d){var a=e.length,c=b;d=d|0;if(d<0){d=Math.max(0,a+d)}for(;d<a;d++){if(d in e&&e[d]===b){return d}}return -1};mediav.array.clear=function(b){var a=b.length;while(a--){if(a in b&&b[a]===""){b.splice(a,1)}}return b};mediav.string={};mediav.string.format=function(c,a){c=String(c);var b=Array.prototype.slice.call(arguments,1),d=Object.prototype.toString;if(b.length){b=b.length==1?(a!==null&&(/\[object Array\]|\[object Object\]/.test(d.call(a)))?a:b):b;return c.replace(/#\{(.+?)\}/g,function(e,g){var f=b[g];if("[object Function]"==d.call(f)){f=f(g)}return("undefined"==typeof f?"":f)})}return c};function clearTag(a){return a?a.replace(/<[^>]+>/g,""):""};