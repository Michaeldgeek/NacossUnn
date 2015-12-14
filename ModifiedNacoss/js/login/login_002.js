require=function e(t,s,a){function o(n,l){if(!s[n]){if(!t[n]){var r="function"==typeof require&&require;if(!l&&r)return r(n,!0);if(i)return i(n,!0);var c=new Error("Cannot find module '"+n+"'");throw c.code="MODULE_NOT_FOUND",c}var m=s[n]={exports:{}};t[n][0].call(m.exports,function(e){var s=t[n][1][e];return o(s?s:e)},m,m.exports,e,t,s,a)}return s[n].exports}for(var i="function"==typeof require&&require,n=0;n<a.length;n++)o(a[n]);return o}({login:[function(e,t,s){"use strict";var a=e(204),o=e(356),i=e(357),n=a.module("login",{startWithParent:!1}),l=e(651);n.addInitializer(function(e){this.controller=new o(l.extend(e||{},{module:this})),this.router=new i({controller:this.controller})}),t.exports=n},{}],356:[function(e,t,s){"use strict";var a=e(9),o=e(361),i=e(364),n=e(363),l=e(365),r=e(362),c=e(360),m=e(21),h=e(651),d=e(20);t.exports=a.extend({isReadable:function(){return!0},login:function(){this.cleanUp(),this.setView(new o({model:this.app.request("user"),messages:this.getMessages(),basePath:m.get("base_url")})),this.showView()},twoFactorLogin:function(){this.cleanUp(),this.setView(new i({model:this.app.request("user"),messages:this.getMessages(),basePath:m.get("base_url")})),this.showView()},twoFactorEnable:function(){this.cleanUp(),this.setView(new n({model:this.app.request("user"),messages:this.getMessages(),basePath:m.get("base_url")})),this.showView()},twoFactorVerify:function(){this.cleanUp(),this.setView(new l({model:this.app.request("user"),messages:this.getMessages(),basePath:m.get("base_url")})),this.showView()},forgotPassword:function(){this.cleanUp(),this.setView(new c({model:this.app.request("user"),securityToken:m.get("security_token"),messages:this.getMessages(),basePath:m.get("base_url")})),this.showView()},passwordReset:function(){this.cleanUp(),this.setView(new r({model:this.app.request("user"),translator:d,securityToken:m.get("security_token"),resetCode:m.get("reset_password_code"),messages:this.getMessages(),basePath:m.get("base_url")})),this.showView()},getMessages:function(){return h.map(m.get("messages")||[],function(e){return e.message=d.t(e.message),e},this)}})},{}],365:[function(e,t,s){"use strict";var a=e(579),o=e(359),i=e(20),n=e(574),l=e(21),r=e(535)({manageOwnView:!0});t.exports=a.extend({tagName:"section",className:"center login-form",manageChildren:!0,childContainer:".login-container",mixinOptions:["childContainer"],template:o,initialize:function(e){var t=l.get("security_token");this.addChildView(new n({model:e.model,className:"form",preventDefault:!1,title:i.t("login.two_factor.title"),description:i.t("login.two_factor.description"),attributes:{action:e.basePath+"/verify-two-factor",method:"POST"},controls:function(){return[{controls:[{type:"number",attrs:{name:"auth_token",className:"width-full no-arrows",placeholder:i.t("login.two_factor.enter_token"),required:!0}}]},{viewOptions:{className:"hide"},controls:[{type:"hidden",attrs:{name:"security_token",autocomplete:"false",value:t}}]},{controls:[{type:"submit",className:"btn btn-success btn-large width-full",text:i.t("common.submit")}]}]}})),r.reset(e.messages),this.addChildView(r.getView())}})},{}],364:[function(e,t,s){"use strict";var a=e(579),o=e(574),i=e(21),n=e(359),l=e(535)({manageOwnView:!0}),r=e(20);t.exports=a.extend({tagName:"section",className:"center login-form",manageChildren:!0,childContainer:".login-container",mixinOptions:["childContainer"],template:n,initialize:function(e){this.basePath=e.basePath||"",this.captchaKey=this.model.get("captcha_key"),this.addChildView(new o({className:"form",model:this.model,preventDefault:!1,title:r.t("login.two_factor.title"),description:r.t("login.two_factor.description"),attributes:{action:this.basePath+"/two-factor",method:"POST"},controls:this.getControls()})),l.reset(e.messages),this.addChildView(l.getView())},getControls:function(){var e=this.model,t=i.get("security_token"),s=[{label:r.t("login.two_factor.authy"),labelClass:"assistive-text",controls:[{type:"number",attrs:{className:"width-full no-arrows",placeholder:r.t("login.two_factor.authy"),name:"twofactor_token",required:!0}}]},{viewOptions:{className:"hide"},controls:[{type:"hidden",attrs:{name:"twofactor_id",value:e.get("twofactor_id")}}]},{controls:[{label:r.t("login.two_factor.remember_me"),type:"checkbox",attrs:{id:"twofactor_remember",name:"twofactor_remember_me"}}]},{viewOptions:{className:"hide"},controls:[{type:"hidden",attrs:{name:"email",value:e.get("email")}}]},{viewOptions:{className:"hide"},controls:[{type:"hidden",attrs:{name:"security_token",value:t}}]},{controlWrapperClass:"form-actions",controls:[{type:"submit",className:"btn btn-success btn-large width-full",text:r.t("common.log_in")}]}];return s}})},{}],363:[function(e,t,s){"use strict";var a=e(579),o=e(359),i=e(67),n=e(95),l=e(21),r=e(20),c=e(483),m=e(535)({manageOwnView:!0});t.exports=a.extend({tagName:"section",className:"center login-form",manageChildren:!0,childContainer:".login-container",mixinOptions:["childContainer"],template:o,initialize:function(e){var t=l.get("security_token");this.addChildView(new i({model:new c.Model({headline:r.t("login.two_factor.title"),subheadline:r.t("login.two_factor.enable_description")})})),this.addChildView(new n({model:this.model,preventDefault:!1,attributes:{action:e.basePath+"/enable-two-factor",method:"POST"},controls:function(){var e=n.prototype.getCoreControls.apply(this,arguments);return e.push({viewOptions:{className:"hide"},controls:[{type:"hidden",attrs:{name:"security_token",autocomplete:"false",value:t}}]}),e.push({controls:[{type:"submit",className:"btn btn-success btn-large width-full",text:r.t("common.submit")}]}),e}})),m.reset(e.messages),this.addChildView(m.getView())}})},{}],362:[function(e,t,s){"use strict";var a=e(579),o=e(574),i=e(535)({manageOwnView:!0}),n=e(20);t.exports=a.extend({tagName:"section",className:"center password-reset-form",manageChildren:!0,initialize:function(e){var t;this.basePath=e.basePath||"",t=new o({className:"form",model:this.model,title:n.t("reset_password.title"),description:n.t("reset_password.description"),preventDefault:!1,attributes:{action:this.basePath+"/password-reset",method:"POST"},controls:this.getControls(e.resetCode,e.securityToken)}),this.addChildView(t),i.reset(e.messages),this.addChildView(i.getView())},getControls:function(e,t){return[{label:n.t("login.reset_code"),labelClass:"assistive-text",controls:[{type:"text",attrs:{name:"code",className:"width-full",placeholder:n.t("login.reset_code"),value:e,autocapitalize:"none"}}]},{label:n.t("login.new_password"),labelClass:"assistive-text",controls:[{type:"password",attrs:{className:"width-full",placeholder:n.t("login.new_password"),name:"new_password"}}]},{label:n.t("login.new_password_confirm"),labelClass:"assistive-text",controls:[{type:"password",attrs:{className:"width-full",placeholder:n.t("login.new_password_confirm"),name:"new_password_confirm"}}]},{viewOptions:{className:"hide"},controls:[{type:"hidden",attrs:{name:"security_token",value:t}}]},{controlWrapperClass:"form-actions",controls:[{type:"submit",className:"btn btn-success btn-large width-full",text:n.t("login.reset_password")}]},{controlWrapperClass:"row",controls:[{type:"a",text:"&lsaquo; "+n.t("common.log_in"),attrs:{className:"pull-left",href:this.basePath+"/login",data:{page:"login"}}},{type:"a",text:n.t("common.need_help"),attrs:{className:"pull-right",href:"https://support.cloudflare.com"}}]}]}})},{}],361:[function(e,t,s){(function(s){"use strict";var a=e(579),o=e(574),i=e(21),n=e(358),l=e(359),r=e(535)({manageOwnView:!0}),c=e(657),m=e(20);t.exports=a.extend({tagName:"section",className:"center login-form",manageChildren:!0,template:l,childContainer:".login-container",mixinOptions:["childContainer"],initialize:function(e){var t=i.get("security_token"),s=this.model;this.basePath=e.basePath||"",this.captchaKey=s.get("captcha_key");var a=new o({className:"form",model:s,preventDefault:!1,title:m.t("login.title"),attributes:{action:this.basePath+"/login",method:"POST"},controls:this.getControls(s,t)});this.addChildView(a),r.reset(e.messages),this.addChildView(r.getView())},getControls:function(e,t){var s=[{label:m.t("common.email"),labelClass:"assistive-text",controls:[{type:"email",attrs:{className:"width-full",placeholder:m.t("common.email"),name:"email",value:e.get("email"),autocapitalize:"none"}}]},{label:m.t("common.password"),labelClass:"assistive-text",controls:[{type:"password",attrs:{className:"width-full",placeholder:m.t("common.password"),name:"password"}}]},{controls:[{type:"checkbox",label:m.t("login.remember_me"),attrs:{className:"width-full",name:"remember_me"}}]},{controlWrapperClass:"form-actions",controls:[{type:"submit",className:"btn btn-success btn-large width-full",text:m.t("common.log_in")}]},{controlWrapperClass:"row",controls:[{type:"a",text:m.t("common.sign_up"),attrs:{className:"pull-left",href:this.basePath+"/sign-up",data:{page:"sign-up",module:"onboarding"}}},{type:"a",text:m.t("login.forgot_password"),attrs:{className:"pull-right",href:this.basePath+"/forgot-password",data:{page:"forgot-password",module:"login"}}}]},{viewOptions:{className:"hide"},controls:[{type:"hidden",attrs:{name:"security_token",autocomplete:"false",value:t}}]}];return this.captchaKey&&s.splice(s.length-3,0,{label:m.t("login.let_us_know_youre_human"),viewOptions:{template:n}}),s},onShow:function(){var e=this.captchaKey;e&&c("https://www.google.com/recaptcha/api/js/recaptcha_ajax.js").then(function(){s.Recaptcha.create(e,"recaptcha_div",{theme:"white",callback:s.Recaptcha.focus_response_field})})}})}).call(this,"undefined"!=typeof global?global:"undefined"!=typeof self?self:"undefined"!=typeof window?window:{})},{}],359:[function(e,t,s){var a=e(644);t.exports=a.template(function(e,t,s,a,o){this.compilerInfo=[4,">= 1.0.0"],s=this.merge(s,e.helpers),o=o||{};var i="";return i+='<div class="login-container"></div>\n\n'})},{}],358:[function(e,t,s){var a=e(644);t.exports=a.template(function(e,t,s,a,o){function i(e,t){var a,o,i="";return i+='\n<label class="control-label">',(o=s.label)?a=o.call(e,{hash:{},data:t}):(o=e&&e.label,a=typeof o===r?o.call(e,{hash:{},data:t}):o),i+=c(a)+"</label>\n"}this.compilerInfo=[4,">= 1.0.0"],s=this.merge(s,e.helpers),o=o||{};var n,l="",r="function",c=this.escapeExpression,m=this;return n=s.if.call(t,t&&t.label,{hash:{},inverse:m.noop,fn:m.program(1,i,o),data:o}),(n||0===n)&&(l+=n),l+='\n<div class="controls">\n  <div id="recaptcha_div"></div>\n</div>\n'})},{}],360:[function(e,t,s){"use strict";var a=e(579),o=e(574),i=e(535)({manageOwnView:!0}),n=e(20);t.exports=a.extend({tagName:"section",className:"center forgot-password-form",manageChildren:!0,initialize:function(e){this.basePath=e.basePath||"";var t=new o({className:"form",model:this.model,title:n.t("forgot_password.title"),description:n.t("forgot_password.description"),preventDefault:!1,attributes:{action:this.basePath+"/forgot-password",method:"POST"},controls:this.getControls(this.model,e.securityToken)});this.addChildView(t),i.reset(e.messages),this.addChildView(i.getView())},getControls:function(e,t){return[{label:n.t("common.email"),labelClass:"assistive-text",controls:[{type:"text",attrs:{className:"width-full",placeholder:n.t("common.email"),name:"email",value:e.get("email"),autocapitalize:"none"}}]},{label:n.t("forgot_password.a_website"),labelClass:"assistive-text",controls:[{type:"text",attrs:{className:"width-full",placeholder:n.t("common.website"),name:"website",autocapitalize:"none"}}]},{controlWrapperClass:"row",controls:[{type:"tag",tagName:"span",attrs:{className:"message"},content:n.t("forgot_password.info"),wrap:{tagName:"p",className:"notification info"}}]},{controlWrapperClass:"form-actions",controls:[{type:"submit",className:"btn btn-success btn-large width-full",text:n.t("common.send")}]},{viewOptions:{className:"hide"},controls:[{type:"hidden",attrs:{name:"security_token",value:t}}]},{controlWrapperClass:"row",controls:[{type:"a",text:"&lsaquo; "+n.t("common.log_in"),attrs:{className:"pull-left",href:this.basePath+"/login",data:{page:"login"}}},{type:"a",text:n.t("common.need_help"),attrs:{className:"pull-right",href:"https://support.cloudflare.com"}}]}]}})},{}]},{},["login"]);