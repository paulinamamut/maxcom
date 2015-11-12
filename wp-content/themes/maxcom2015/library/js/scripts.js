/*
 * Scripts File
 * Author: Clau Carrillo
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/

/*! jQuery Validation Plugin - v1.12.0 - 4/1/2014
 * http://jqueryvalidation.org/
 * Copyright (c) 2014 Jörn Zaefferer; Licensed MIT */
!function(a){a.extend(a.fn,{validate:function(b){if(!this.length)return void(b&&b.debug&&window.console&&console.warn("Nothing selected, can't validate, returning nothing."));var c=a.data(this[0],"validator");return c?c:(this.attr("novalidate","novalidate"),c=new a.validator(b,this[0]),a.data(this[0],"validator",c),c.settings.onsubmit&&(this.validateDelegate(":submit","click",function(b){c.settings.submitHandler&&(c.submitButton=b.target),a(b.target).hasClass("cancel")&&(c.cancelSubmit=!0),void 0!==a(b.target).attr("formnovalidate")&&(c.cancelSubmit=!0)}),this.submit(function(b){function d(){var d;return c.settings.submitHandler?(c.submitButton&&(d=a("<input type='hidden'/>").attr("name",c.submitButton.name).val(a(c.submitButton).val()).appendTo(c.currentForm)),c.settings.submitHandler.call(c,c.currentForm,b),c.submitButton&&d.remove(),!1):!0}return c.settings.debug&&b.preventDefault(),c.cancelSubmit?(c.cancelSubmit=!1,d()):c.form()?c.pendingRequest?(c.formSubmitted=!0,!1):d():(c.focusInvalid(),!1)})),c)},valid:function(){var b,c;return a(this[0]).is("form")?b=this.validate().form():(b=!0,c=a(this[0].form).validate(),this.each(function(){b=c.element(this)&&b})),b},removeAttrs:function(b){var c={},d=this;return a.each(b.split(/\s/),function(a,b){c[b]=d.attr(b),d.removeAttr(b)}),c},rules:function(b,c){var d,e,f,g,h,i,j=this[0];if(b)switch(d=a.data(j.form,"validator").settings,e=d.rules,f=a.validator.staticRules(j),b){case"add":a.extend(f,a.validator.normalizeRule(c)),delete f.messages,e[j.name]=f,c.messages&&(d.messages[j.name]=a.extend(d.messages[j.name],c.messages));break;case"remove":return c?(i={},a.each(c.split(/\s/),function(b,c){i[c]=f[c],delete f[c],"required"===c&&a(j).removeAttr("aria-required")}),i):(delete e[j.name],f)}return g=a.validator.normalizeRules(a.extend({},a.validator.classRules(j),a.validator.attributeRules(j),a.validator.dataRules(j),a.validator.staticRules(j)),j),g.required&&(h=g.required,delete g.required,g=a.extend({required:h},g),a(j).attr("aria-required","true")),g.remote&&(h=g.remote,delete g.remote,g=a.extend(g,{remote:h})),g}}),a.extend(a.expr[":"],{blank:function(b){return!a.trim(""+a(b).val())},filled:function(b){return!!a.trim(""+a(b).val())},unchecked:function(b){return!a(b).prop("checked")}}),a.validator=function(b,c){this.settings=a.extend(!0,{},a.validator.defaults,b),this.currentForm=c,this.init()},a.validator.format=function(b,c){return 1===arguments.length?function(){var c=a.makeArray(arguments);return c.unshift(b),a.validator.format.apply(this,c)}:(arguments.length>2&&c.constructor!==Array&&(c=a.makeArray(arguments).slice(1)),c.constructor!==Array&&(c=[c]),a.each(c,function(a,c){b=b.replace(new RegExp("\\{"+a+"\\}","g"),function(){return c})}),b)},a.extend(a.validator,{defaults:{messages:{},groups:{},rules:{},errorClass:"error",validClass:"valid",errorElement:"label",focusInvalid:!0,errorContainer:a([]),errorLabelContainer:a([]),onsubmit:!0,ignore:":hidden",ignoreTitle:!1,onfocusin:function(a){this.lastActive=a,this.settings.focusCleanup&&!this.blockFocusCleanup&&(this.settings.unhighlight&&this.settings.unhighlight.call(this,a,this.settings.errorClass,this.settings.validClass),this.addWrapper(this.errorsFor(a)).hide())},onfocusout:function(a){this.checkable(a)||!(a.name in this.submitted)&&this.optional(a)||this.element(a)},onkeyup:function(a,b){(9!==b.which||""!==this.elementValue(a))&&(a.name in this.submitted||a===this.lastElement)&&this.element(a)},onclick:function(a){a.name in this.submitted?this.element(a):a.parentNode.name in this.submitted&&this.element(a.parentNode)},highlight:function(b,c,d){"radio"===b.type?this.findByName(b.name).addClass(c).removeClass(d):a(b).addClass(c).removeClass(d)},unhighlight:function(b,c,d){"radio"===b.type?this.findByName(b.name).removeClass(c).addClass(d):a(b).removeClass(c).addClass(d)}},setDefaults:function(b){a.extend(a.validator.defaults,b)},messages:{required:"This field is required.",remote:"Please fix this field.",email:"Please enter a valid email address.",url:"Please enter a valid URL.",date:"Please enter a valid date.",dateISO:"Please enter a valid date (ISO).",number:"Please enter a valid number.",digits:"Please enter only digits.",creditcard:"Please enter a valid credit card number.",equalTo:"Please enter the same value again.",maxlength:a.validator.format("Please enter no more than {0} characters."),minlength:a.validator.format("Please enter at least {0} characters."),rangelength:a.validator.format("Please enter a value between {0} and {1} characters long."),range:a.validator.format("Please enter a value between {0} and {1}."),max:a.validator.format("Please enter a value less than or equal to {0}."),min:a.validator.format("Please enter a value greater than or equal to {0}.")},autoCreateRanges:!1,prototype:{init:function(){function b(b){var c=a.data(this[0].form,"validator"),d="on"+b.type.replace(/^validate/,""),e=c.settings;e[d]&&!this.is(e.ignore)&&e[d].call(c,this[0],b)}this.labelContainer=a(this.settings.errorLabelContainer),this.errorContext=this.labelContainer.length&&this.labelContainer||a(this.currentForm),this.containers=a(this.settings.errorContainer).add(this.settings.errorLabelContainer),this.submitted={},this.valueCache={},this.pendingRequest=0,this.pending={},this.invalid={},this.reset();var c,d=this.groups={};a.each(this.settings.groups,function(b,c){"string"==typeof c&&(c=c.split(/\s/)),a.each(c,function(a,c){d[c]=b})}),c=this.settings.rules,a.each(c,function(b,d){c[b]=a.validator.normalizeRule(d)}),a(this.currentForm).validateDelegate(":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'] ,[type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'] ","focusin focusout keyup",b).validateDelegate("[type='radio'], [type='checkbox'], select, option","click",b),this.settings.invalidHandler&&a(this.currentForm).bind("invalid-form.validate",this.settings.invalidHandler),a(this.currentForm).find("[required], [data-rule-required], .required").attr("aria-required","true")},form:function(){return this.checkForm(),a.extend(this.submitted,this.errorMap),this.invalid=a.extend({},this.errorMap),this.valid()||a(this.currentForm).triggerHandler("invalid-form",[this]),this.showErrors(),this.valid()},checkForm:function(){this.prepareForm();for(var a=0,b=this.currentElements=this.elements();b[a];a++)this.check(b[a]);return this.valid()},element:function(b){var c=this.clean(b),d=this.validationTargetFor(c),e=!0;return this.lastElement=d,void 0===d?delete this.invalid[c.name]:(this.prepareElement(d),this.currentElements=a(d),e=this.check(d)!==!1,e?delete this.invalid[d.name]:this.invalid[d.name]=!0),a(b).attr("aria-invalid",!e),this.numberOfInvalids()||(this.toHide=this.toHide.add(this.containers)),this.showErrors(),e},showErrors:function(b){if(b){a.extend(this.errorMap,b),this.errorList=[];for(var c in b)this.errorList.push({message:b[c],element:this.findByName(c)[0]});this.successList=a.grep(this.successList,function(a){return!(a.name in b)})}this.settings.showErrors?this.settings.showErrors.call(this,this.errorMap,this.errorList):this.defaultShowErrors()},resetForm:function(){a.fn.resetForm&&a(this.currentForm).resetForm(),this.submitted={},this.lastElement=null,this.prepareForm(),this.hideErrors(),this.elements().removeClass(this.settings.errorClass).removeData("previousValue").removeAttr("aria-invalid")},numberOfInvalids:function(){return this.objectLength(this.invalid)},objectLength:function(a){var b,c=0;for(b in a)c++;return c},hideErrors:function(){this.addWrapper(this.toHide).hide()},valid:function(){return 0===this.size()},size:function(){return this.errorList.length},focusInvalid:function(){if(this.settings.focusInvalid)try{a(this.findLastActive()||this.errorList.length&&this.errorList[0].element||[]).filter(":visible").focus().trigger("focusin")}catch(b){}},findLastActive:function(){var b=this.lastActive;return b&&1===a.grep(this.errorList,function(a){return a.element.name===b.name}).length&&b},elements:function(){var b=this,c={};return a(this.currentForm).find("input, select, textarea").not(":submit, :reset, :image, [disabled]").not(this.settings.ignore).filter(function(){return!this.name&&b.settings.debug&&window.console&&console.error("%o has no name assigned",this),this.name in c||!b.objectLength(a(this).rules())?!1:(c[this.name]=!0,!0)})},clean:function(b){return a(b)[0]},errors:function(){var b=this.settings.errorClass.split(" ").join(".");return a(this.settings.errorElement+"."+b,this.errorContext)},reset:function(){this.successList=[],this.errorList=[],this.errorMap={},this.toShow=a([]),this.toHide=a([]),this.currentElements=a([])},prepareForm:function(){this.reset(),this.toHide=this.errors().add(this.containers)},prepareElement:function(a){this.reset(),this.toHide=this.errorsFor(a)},elementValue:function(b){var c,d=a(b),e=d.attr("type");return"radio"===e||"checkbox"===e?a("input[name='"+d.attr("name")+"']:checked").val():(c=d.val(),"string"==typeof c?c.replace(/\r/g,""):c)},check:function(b){b=this.validationTargetFor(this.clean(b));var c,d,e,f=a(b).rules(),g=a.map(f,function(a,b){return b}).length,h=!1,i=this.elementValue(b);for(d in f){e={method:d,parameters:f[d]};try{if(c=a.validator.methods[d].call(this,i,b,e.parameters),"dependency-mismatch"===c&&1===g){h=!0;continue}if(h=!1,"pending"===c)return void(this.toHide=this.toHide.not(this.errorsFor(b)));if(!c)return this.formatAndAdd(b,e),!1}catch(j){throw this.settings.debug&&window.console&&console.log("Exception occurred when checking element "+b.id+", check the '"+e.method+"' method.",j),j}}if(!h)return this.objectLength(f)&&this.successList.push(b),!0},customDataMessage:function(b,c){return a(b).data("msg"+c[0].toUpperCase()+c.substring(1).toLowerCase())||a(b).data("msg")},customMessage:function(a,b){var c=this.settings.messages[a];return c&&(c.constructor===String?c:c[b])},findDefined:function(){for(var a=0;a<arguments.length;a++)if(void 0!==arguments[a])return arguments[a];return void 0},defaultMessage:function(b,c){return this.findDefined(this.customMessage(b.name,c),this.customDataMessage(b,c),!this.settings.ignoreTitle&&b.title||void 0,a.validator.messages[c],"<strong>Warning: No message defined for "+b.name+"</strong>")},formatAndAdd:function(b,c){var d=this.defaultMessage(b,c.method),e=/\$?\{(\d+)\}/g;"function"==typeof d?d=d.call(this,c.parameters,b):e.test(d)&&(d=a.validator.format(d.replace(e,"{$1}"),c.parameters)),this.errorList.push({message:d,element:b,method:c.method}),this.errorMap[b.name]=d,this.submitted[b.name]=d},addWrapper:function(a){return this.settings.wrapper&&(a=a.add(a.parent(this.settings.wrapper))),a},defaultShowErrors:function(){var a,b,c;for(a=0;this.errorList[a];a++)c=this.errorList[a],this.settings.highlight&&this.settings.highlight.call(this,c.element,this.settings.errorClass,this.settings.validClass),this.showLabel(c.element,c.message);if(this.errorList.length&&(this.toShow=this.toShow.add(this.containers)),this.settings.success)for(a=0;this.successList[a];a++)this.showLabel(this.successList[a]);if(this.settings.unhighlight)for(a=0,b=this.validElements();b[a];a++)this.settings.unhighlight.call(this,b[a],this.settings.errorClass,this.settings.validClass);this.toHide=this.toHide.not(this.toShow),this.hideErrors(),this.addWrapper(this.toShow).show()},validElements:function(){return this.currentElements.not(this.invalidElements())},invalidElements:function(){return a(this.errorList).map(function(){return this.element})},showLabel:function(b,c){var d=this.errorsFor(b);d.length?(d.removeClass(this.settings.validClass).addClass(this.settings.errorClass),d.html(c)):(d=a("<"+this.settings.errorElement+">").attr("for",this.idOrName(b)).addClass(this.settings.errorClass).html(c||""),this.settings.wrapper&&(d=d.hide().show().wrap("<"+this.settings.wrapper+"/>").parent()),this.labelContainer.append(d).length||(this.settings.errorPlacement?this.settings.errorPlacement(d,a(b)):d.insertAfter(b))),!c&&this.settings.success&&(d.text(""),"string"==typeof this.settings.success?d.addClass(this.settings.success):this.settings.success(d,b)),this.toShow=this.toShow.add(d)},errorsFor:function(b){var c=this.idOrName(b);return this.errors().filter(function(){return a(this).attr("for")===c})},idOrName:function(a){return this.groups[a.name]||(this.checkable(a)?a.name:a.id||a.name)},validationTargetFor:function(a){return this.checkable(a)&&(a=this.findByName(a.name).not(this.settings.ignore)[0]),a},checkable:function(a){return/radio|checkbox/i.test(a.type)},findByName:function(b){return a(this.currentForm).find("[name='"+b+"']")},getLength:function(b,c){switch(c.nodeName.toLowerCase()){case"select":return a("option:selected",c).length;case"input":if(this.checkable(c))return this.findByName(c.name).filter(":checked").length}return b.length},depend:function(a,b){return this.dependTypes[typeof a]?this.dependTypes[typeof a](a,b):!0},dependTypes:{"boolean":function(a){return a},string:function(b,c){return!!a(b,c.form).length},"function":function(a,b){return a(b)}},optional:function(b){var c=this.elementValue(b);return!a.validator.methods.required.call(this,c,b)&&"dependency-mismatch"},startRequest:function(a){this.pending[a.name]||(this.pendingRequest++,this.pending[a.name]=!0)},stopRequest:function(b,c){this.pendingRequest--,this.pendingRequest<0&&(this.pendingRequest=0),delete this.pending[b.name],c&&0===this.pendingRequest&&this.formSubmitted&&this.form()?(a(this.currentForm).submit(),this.formSubmitted=!1):!c&&0===this.pendingRequest&&this.formSubmitted&&(a(this.currentForm).triggerHandler("invalid-form",[this]),this.formSubmitted=!1)},previousValue:function(b){return a.data(b,"previousValue")||a.data(b,"previousValue",{old:null,valid:!0,message:this.defaultMessage(b,"remote")})}},classRuleSettings:{required:{required:!0},email:{email:!0},url:{url:!0},date:{date:!0},dateISO:{dateISO:!0},number:{number:!0},digits:{digits:!0},creditcard:{creditcard:!0}},addClassRules:function(b,c){b.constructor===String?this.classRuleSettings[b]=c:a.extend(this.classRuleSettings,b)},classRules:function(b){var c={},d=a(b).attr("class");return d&&a.each(d.split(" "),function(){this in a.validator.classRuleSettings&&a.extend(c,a.validator.classRuleSettings[this])}),c},attributeRules:function(b){var c,d,e={},f=a(b),g=b.getAttribute("type");for(c in a.validator.methods)"required"===c?(d=b.getAttribute(c),""===d&&(d=!0),d=!!d):d=f.attr(c),/min|max/.test(c)&&(null===g||/number|range|text/.test(g))&&(d=Number(d)),d||0===d?e[c]=d:g===c&&"range"!==g&&(e[c]=!0);return e.maxlength&&/-1|2147483647|524288/.test(e.maxlength)&&delete e.maxlength,e},dataRules:function(b){var c,d,e={},f=a(b);for(c in a.validator.methods)d=f.data("rule"+c[0].toUpperCase()+c.substring(1).toLowerCase()),void 0!==d&&(e[c]=d);return e},staticRules:function(b){var c={},d=a.data(b.form,"validator");return d.settings.rules&&(c=a.validator.normalizeRule(d.settings.rules[b.name])||{}),c},normalizeRules:function(b,c){return a.each(b,function(d,e){if(e===!1)return void delete b[d];if(e.param||e.depends){var f=!0;switch(typeof e.depends){case"string":f=!!a(e.depends,c.form).length;break;case"function":f=e.depends.call(c,c)}f?b[d]=void 0!==e.param?e.param:!0:delete b[d]}}),a.each(b,function(d,e){b[d]=a.isFunction(e)?e(c):e}),a.each(["minlength","maxlength"],function(){b[this]&&(b[this]=Number(b[this]))}),a.each(["rangelength","range"],function(){var c;b[this]&&(a.isArray(b[this])?b[this]=[Number(b[this][0]),Number(b[this][1])]:"string"==typeof b[this]&&(c=b[this].split(/[\s,]+/),b[this]=[Number(c[0]),Number(c[1])]))}),a.validator.autoCreateRanges&&(b.min&&b.max&&(b.range=[b.min,b.max],delete b.min,delete b.max),b.minlength&&b.maxlength&&(b.rangelength=[b.minlength,b.maxlength],delete b.minlength,delete b.maxlength)),b},normalizeRule:function(b){if("string"==typeof b){var c={};a.each(b.split(/\s/),function(){c[this]=!0}),b=c}return b},addMethod:function(b,c,d){a.validator.methods[b]=c,a.validator.messages[b]=void 0!==d?d:a.validator.messages[b],c.length<3&&a.validator.addClassRules(b,a.validator.normalizeRule(b))},methods:{required:function(b,c,d){if(!this.depend(d,c))return"dependency-mismatch";if("select"===c.nodeName.toLowerCase()){var e=a(c).val();return e&&e.length>0}return this.checkable(c)?this.getLength(b,c)>0:a.trim(b).length>0},email:function(a,b){return this.optional(b)||/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(a)},url:function(a,b){return this.optional(b)||/^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(a)},date:function(a,b){return this.optional(b)||!/Invalid|NaN/.test(new Date(a).toString())},dateISO:function(a,b){return this.optional(b)||/^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/.test(a)},number:function(a,b){return this.optional(b)||/^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(a)},digits:function(a,b){return this.optional(b)||/^\d+$/.test(a)},creditcard:function(a,b){if(this.optional(b))return"dependency-mismatch";if(/[^0-9 \-]+/.test(a))return!1;var c,d,e=0,f=0,g=!1;if(a=a.replace(/\D/g,""),a.length<13||a.length>19)return!1;for(c=a.length-1;c>=0;c--)d=a.charAt(c),f=parseInt(d,10),g&&(f*=2)>9&&(f-=9),e+=f,g=!g;return e%10===0},minlength:function(b,c,d){var e=a.isArray(b)?b.length:this.getLength(a.trim(b),c);return this.optional(c)||e>=d},maxlength:function(b,c,d){var e=a.isArray(b)?b.length:this.getLength(a.trim(b),c);return this.optional(c)||d>=e},rangelength:function(b,c,d){var e=a.isArray(b)?b.length:this.getLength(a.trim(b),c);return this.optional(c)||e>=d[0]&&e<=d[1]},min:function(a,b,c){return this.optional(b)||a>=c},max:function(a,b,c){return this.optional(b)||c>=a},range:function(a,b,c){return this.optional(b)||a>=c[0]&&a<=c[1]},equalTo:function(b,c,d){var e=a(d);return this.settings.onfocusout&&e.unbind(".validate-equalTo").bind("blur.validate-equalTo",function(){a(c).valid()}),b===e.val()},remote:function(b,c,d){if(this.optional(c))return"dependency-mismatch";var e,f,g=this.previousValue(c);return this.settings.messages[c.name]||(this.settings.messages[c.name]={}),g.originalMessage=this.settings.messages[c.name].remote,this.settings.messages[c.name].remote=g.message,d="string"==typeof d&&{url:d}||d,g.old===b?g.valid:(g.old=b,e=this,this.startRequest(c),f={},f[c.name]=b,a.ajax(a.extend(!0,{url:d,mode:"abort",port:"validate"+c.name,dataType:"json",data:f,context:e.currentForm,success:function(d){var f,h,i,j=d===!0||"true"===d;e.settings.messages[c.name].remote=g.originalMessage,j?(i=e.formSubmitted,e.prepareElement(c),e.formSubmitted=i,e.successList.push(c),delete e.invalid[c.name],e.showErrors()):(f={},h=d||e.defaultMessage(c,"remote"),f[c.name]=g.message=a.isFunction(h)?h(b):h,e.invalid[c.name]=!0,e.showErrors(f)),g.valid=j,e.stopRequest(c,j)}},d)),"pending")}}}),a.format=function(){throw"$.format has been deprecated. Please use $.validator.format instead."}}(jQuery),function(a){var b,c={};a.ajaxPrefilter?a.ajaxPrefilter(function(a,b,d){var e=a.port;"abort"===a.mode&&(c[e]&&c[e].abort(),c[e]=d)}):(b=a.ajax,a.ajax=function(d){var e=("mode"in d?d:a.ajaxSettings).mode,f=("port"in d?d:a.ajaxSettings).port;return"abort"===e?(c[f]&&c[f].abort(),c[f]=b.apply(this,arguments),c[f]):b.apply(this,arguments)})}(jQuery),function(a){a.extend(a.fn,{validateDelegate:function(b,c,d){return this.bind(c,function(c){var e=a(c.target);return e.is(b)?d.apply(e,arguments):void 0})}})}(jQuery);

/*! jQuery validator es */
(function($) {$.extend($.validator.messages, {required: "Este campo es obligatorio.", remote: "Por favor, rellena este campo.", email: "Por favor, escribe una dirección de correo válida.", url: "Por favor, escribe una URL válida.", date: "Por favor, escribe una fecha válida.", dateISO: "Por favor, escribe una fecha (ISO) válida.", number: "Por favor, escribe un número entero válido.", digits: "Por favor, escribe sólo dígitos.", creditcard: "Por favor, escribe un número de tarjeta válido.", equalTo: "Por favor, escribe el mismo valor de nuevo.", extension: "Por favor, escribe un valor con una extensión aceptada.", maxlength: $.validator.format("Por favor, no escribas más de {0} caracteres."), minlength: $.validator.format("Por favor, no escribas menos de {0} caracteres."), rangelength: $.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."), range: $.validator.format("Por favor, escribe un valor entre {0} y {1}."), max: $.validator.format("Por favor, escribe un valor menor o igual a {0}."), min: $.validator.format("Por favor, escribe un valor mayor o igual a {0}."), nifES: "Por favor, escribe un NIF válido.", nieES: "Por favor, escribe un NIE válido.", cifES: "Por favor, escribe un CIF válido."}); }(jQuery));

/**
 * Module: rem - v1.3.2
 * Description: A polyfill to parse CSS links and rewrite pixel equivalents into head for non supporting browsers
 * Date Built: 2014-07-02
 * Copyright (c) 2014  | Chuck Carpenter <chuck.carpenter@me.com>,Lucas Serven <lserven@gmail.com>;
**/
!function(e){"use strict";var t=function(){var e=document.createElement("div");return e.style.cssText="font-size: 1rem;",/rem/.test(e.style.fontSize)},n=function(){for(var e=document.getElementsByTagName("link"),t=[],n=0;n<e.length;n++)"stylesheet"===e[n].rel.toLowerCase()&&null===e[n].getAttribute("data-norem")&&t.push(e[n].href);return t},r=function(){for(var e=0;e<h.length;e++)l(h[e],o)},o=function(e,t){if(p.push(e.responseText),v.push(t),v.length===h.length){for(var n=0;n<v.length;n++)a(p[n],v[n]);(h=m.slice(0)).length>0?(v=[],p=[],m=[],r()):i()}},a=function(e,t){for(var n,r=d(e).replace(/\/\*[\s\S]*?\*\//g,""),o=/[\w\d\s\-\/\\\[\]:,.'"*()<>+~%#^$_=|@]+\{[\w\d\s\-\/\\%#:!;,.'"*()]+\d*\.?\d+rem[\w\d\s\-\/\\%#:!;,.'"*()]*\}/g,a=r.match(o),i=/\d*\.?\d+rem/g,s=r.match(i),c=/(.*\/)/,l=c.exec(t)[0],u=/@import (?:url\()?['"]?([^'\)"]*)['"]?\)?[^;]*/gm;null!==(n=u.exec(e));)m.push(0===n[1].indexOf("/")?n[1]:l+n[1]);null!==a&&0!==a.length&&(f=f.concat(a),g=g.concat(s))},i=function(){for(var e=/[\w\d\s\-\/\\%#:,.'"*()]+\d*\.?\d+rem[\w\d\s\-\/\\%#:!,.'"*()]*[;}]/g,t=0;t<f.length;t++){u+=f[t].substr(0,f[t].indexOf("{")+1);for(var n=f[t].match(e),r=0;r<n.length;r++)u+=n[r],r===n.length-1&&"}"!==u[u.length-1]&&(u+="\n}")}s()},s=function(){for(var e=0;e<g.length;e++)y[e]=Math.round(parseFloat(g[e].substr(0,g[e].length-3)*w))+"px";c()},c=function(){for(var e=0;e<y.length;e++)y[e]&&(u=u.replace(g[e],y[e]));var t=document.createElement("style");t.setAttribute("type","text/css"),t.id="remReplace",document.getElementsByTagName("head")[0].appendChild(t),t.styleSheet?t.styleSheet.cssText=u:t.appendChild(document.createTextNode(u))},l=function(t,n){try{var r=e.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP")||new ActiveXObject("Msxml2.XMLHTTP"):new XMLHttpRequest;r.open("GET",t,!0),r.onreadystatechange=function(){4===r.readyState&&n(r,t)},r.send(null)}catch(o){if(e.XDomainRequest){var a=new XDomainRequest;a.open("get",t),a.onload=function(){n(a,t)},a.onerror=function(){return!1},a.send()}}},d=function(t){return e.matchMedia||e.msMatchMedia||(t=t.replace(/@media[\s\S]*?\}\s*\}/g,"")),t};if(!t()){var u="",h=n(),m=[],f=[],g=[],p=[],v=[],y=[],w="";w=function(){var e,t=document,n=t.documentElement,r=t.body||t.createElement("body"),o=!t.body,a=t.createElement("div"),i=r.style.fontSize;return o&&n.appendChild(r),a.style.cssText="width:1em; position:absolute; visibility:hidden; padding: 0;",r.style.fontSize="1em",r.appendChild(a),e=a.offsetWidth,o?n.removeChild(r):(r.removeChild(a),r.style.fontSize=i),e}(),r()}}(window);


/*END OF PLUGINS*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();

if(location.hash){
	console.log(location.hash);
	 jQuery('html, body').animate({
	        scrollTop: jQuery(location.hash).offset().top-108
	  }, 1000);
}
/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *	// update the viewport, in case the window size has changed
 *	viewport = updateViewportDimensions();
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
	}
} // end function


/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

}); /* end of as page load scripts */

(function($) {

	if(!$("html").hasClass("touch")){
    /* background fix */
    $(".parallax-window").css("background-attachment", "fixed");
}

/* fix vertical when not overflow
call fullscreenFix() if .fullscreen content changes */
function fullscreenFix(){
    var h = $('body').height();
    // set .fullscreen height
    $(".content-b").each(function(i){
        if($(this).innerHeight() <= h){
            $(this).closest(".fullscreen").addClass("not-overflow");
        }
    });
}
$(window).resize(fullscreenFix);
	fullscreenFix();

/* resize background images */
function backgroundResize(){
    var windowH = $(window).height();
    // var windowW = $(window).width();

    $(".background").each(function(i){
        var path = $(this);
        // variables
        var contW = path.width();
        var contH = path.height();
        var imgW = path.attr("data-img-width");
        var imgH = path.attr("data-img-height");
        var ratio = imgW / imgH;
        // overflowing difference
        var diff = parseFloat(path.attr("data-diff"));
        diff = diff ? diff : 0;
        // remaining height to have fullscreen image only on parallax
        var remainingH = 0;
        if(path.hasClass("parallax-window") && !$("html").hasClass("touch")){
            var maxH = contH > windowH ? contH : windowH;
            remainingH = windowH - contH;
        }
        // set img values depending on cont
        imgH = contH + remainingH + diff;
        imgW = imgH * ratio;
        // fix when too large
        if(contW > imgW){
            imgW = contW;
            imgH = imgW / ratio;
        }
        //
        // if(windowW<800){
        // 	imgW = imgW/2;
        // 	imgH = imgH/2;
        // }
        // var newimageH = (windowW*imgH)/imgW;
       	// path.css("min-height", imgH);
        path.data("resized-imgW", imgW);
        path.data("resized-imgH", imgH);

        path.css("background-size", imgW + "px " + imgH + "px");
        // path.css("background-size", '100%');
    });
}
	$(window).resize(backgroundResize);
	$(window).focus(backgroundResize);
	backgroundResize();

	/* set parallax background-position */
	function parallaxPosition(e){
	    var heightWindow = $(window).height();
	    var widthWindow = $(window).width();
	    var topWindow = $(window).scrollTop();
	    var bottomWindow = topWindow + heightWindow;
	    var currentWindow = (topWindow + bottomWindow) / 2;
	    $(".parallax-window").each(function(i){
	        var path = $(this);
	        var height = path.height();
	        var top = path.offset().top;
	        var bottom = top + height;
	        // only when in range
	        if(bottomWindow > top && topWindow < bottom){
	            var imgW = path.data("resized-imgW");
	            var imgH = path.data("resized-imgH");
	            // min when image touch top of window
	            var min = 0;
	            // max when image touch bottom of window
	            var max = - imgH + heightWindow;
	            // overflow changes parallax
	            var overflowH = height < heightWindow ? imgH - height : imgH - heightWindow; // fix height on overflow
	            top = top - overflowH;
	            bottom = bottom + overflowH;
	            // value with linear interpolation
	            var value = min + (max - min) * (currentWindow - top) / (bottom - top);
	            var value='30%';
	            if($('.parallax-window.maxcom-business-header').hasClass('inner-head')){
	            	value='-120px';
	            }

	            if($('.parallax-window.maxcom-header').hasClass('small-header')){
	            	
	            	if(widthWindow>1200){
	            		value='24px';
	            	}
	            	else if(widthWindow>940){
	            		value='124px';
	            	}
	            	else{
	            		value='135px';
	            	}
	            		
	            	
	            }
	            // if(windowW<800){
	            // 	value= value/2;
	            // }
	            // set background-position
	            var orizontalPosition = path.attr("data-oriz-pos");
	            orizontalPosition = orizontalPosition ? orizontalPosition : "50%";

	            // orizontalPosition = orizontalPosition ? orizontalPosition : "top";
	            $(this).css("background-position", orizontalPosition + " " + value);
	        }
	    });
	}
	if(!$("html").hasClass("touch")){
	    $(window).resize(parallaxPosition);
	    //$(window).focus(parallaxPosition);
	    $(window).scroll(parallaxPosition);
	    parallaxPosition();
	}

	$(window).scroll(function(){
        if($('#maxcom-general-header #tostick').length>0){
        	$(this).scrollTop()>1?($('#tostick').addClass('wbackground')):($('#tostick').removeClass('wbackground'));

        }  
    })

	/*Init GOOGLE MAPS*/
	var mapaMaxcom = (function () {
	 	var markers = [];
	 	var lastinfowindow = null;
		var map = null;
		var elements = {
			'mapcontainer' : $("#map-canvas"),
			'dependant' : $(".banner-promocion")
		};

		var regiones_name ={
			'distrito-federal'  : 'Distrito Federal',
			'puebla' : 'Puebla',
			'queretaro':'Querétaro',
			'san-luis-potosi':'San Luis Potosí',
			'estado-de-mexico':'Estado de México',
			'toluca':'Toluca',
			'monterrey':'Monterrey',
			'leon':'León',
			'guadalajara':'Guadalajara'
		};

		var regiones_kml = {
			'fo':{
				'distrito-federal'  : 'FO_DF-EDOMEX',
				'puebla' : 'FO_PUEBLA',
				'guadalajara':'FO_GUADALAJARA',
				'leon':'FO_LEON',
				'monterrey':'FO_MONTERREY',
				'queretaro':'FO_QUERETARO',
				'san-luis-potosi':'FO_SAN-LUIS-POTOSI',
				'estado-de-mexico':'FO_ESTADO-DE-MEXICO',
				'toluca':'FO_TOLUCA'
			},
			'cobre':{
				'distrito-federal'  : 'DF',
				'puebla' : 'PUEBLA',
				'queretaro':'QUERETARO',
				'san-luis-potosi':'SAN-LUIS-POTOSI',
				'estado-de-mexico':'EDOMEX'
			}
		};
		// {'D.F.':'df', 'Puebla, Pue.':'puebla', 'Tehuacán':'puebla', 'Querétaro':'queretaro', 'San Luis Potosí':'sanluis', 'Méx., Mexico':'edomex'};

		return {
			initialize : function () {
				var myLatlng = new google.maps.LatLng(21.5121499,-109.8253327);

				var mapOptions = {
				    zoom: 4,
				    center: myLatlng
				  }
				map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
				map.setOptions({ minZoom: 3 });
				mapaMaxcom.responsivemap();

				if(!elements.mapcontainer.hasClass('other-map')){

					setTimeout(function(){
						var marker = new google.maps.Marker({
							position: myLatlng,
							map: map,
							title: 'Maxcom Cerca de ti',
							animation: google.maps.Animation.DROP,
							icon:image_path+'marker.png'
						});
					},800);
				}

				google.maps.event.addDomListener(window, "resize", function() {
					var center = map.getCenter();
					google.maps.event.trigger(map, "resize");
					map.setCenter(center); 
				});
			},
			responsivemap : function(){
				elements.mapcontainer.css("height", elements.dependant.height()).css("overflow", "hidden");
				google.maps.event.trigger(map, 'resize');
				map.setZoom(map.getZoom());		    
			},
			getSucursales : function(region){

				var count = 0;
				var bounds = new google.maps.LatLngBounds();
				var newcenter; 
				var zoomval = 4;
				var infowindow;
				   $.ajax({ 
			         data: { action : 'getMarkersMap', region : region},
			         type: 'post',
			         url: ajax_url,
			         success: function(data) {
			            data = $.parseJSON( data );

			            if(region!=''){
			            	zoomval = 10;
			            }

			             $.each(data, function( index, suc ) {
			                    count++;
			                    var marker = 'marker.png';
			                    if(suc.tipo == 'casas-maxcom'){
			                    	marker = 'marker_gris.png';
			                    }
			                    var myLatlng = new google.maps.LatLng(suc.lat,suc.lon);
			                    time = 800*count;
		                        var marker = new google.maps.Marker({
		                        position: myLatlng,
		                        map: map,
		                        title:suc.title,
		                        animation: google.maps.Animation.DROP,
		                        icon:image_path+marker
		                      });


		                        var info= '<div class="map-window '+suc.tipo+'">'
		                        +'<h1>'+suc.title+'</h1>'
		                        +'<p>'+suc.content+'</p>'
		                        +'</div>';

		                       

		                        google.maps.event.addListener(marker, 'click', function() {
		                        	if (infowindow) infowindow.close();
		                        	 infowindow = new google.maps.InfoWindow({
									      content: info
									  });
		                        	 
								    infowindow.open(map,marker);
								  });

								markers[index] = marker;  

								bounds.extend(myLatlng);

								if(count==1){
				                    newcenter =  myLatlng;
				                }

			              }); //should print out the name since you sent it along

			        }


			    })	    
				.done(function() {
					mapaMaxcom.setCenterMapM(newcenter, zoomval);
					
				});
			},
			getCobertura : function(region, tipo){
				// {'D.F.':'df', 'Puebla, Pue.':'puebla', 'Tehuacán':'puebla', 'Querétaro':'queretaro', 'San Luis Potosí':'sanluis', 'Méx., Mexico':'edomex'};
				console.log('http://23.253.99.79/desarrollo/maxcom/kml/'+tipo+'/'+regiones_kml[tipo][region]+'.kml');
				var ctaLayer = new google.maps.KmlLayer({
					// url: 'http://200.66.100.209/kml/'+regiones_kml[region]+'.kml',
					url : 'http://23.253.99.79/desarrollo/maxcom/kml/'+tipo+'/'+regiones_kml[tipo][region]+'.kml',
					map: map
				});

				//http://googlemaps.github.io/js-v2-samples/ggeoxml/cta.kml
				//
				//

			},
			onRegionCoberturaChange : function(){

				$( "select#cobertura-regiones" ).change(function () {
					var region = $( "select#cobertura-regiones option:selected" ).val();
					var tipo = $( "select#tipo-cobertura option:selected" ).val();
					mapaMaxcom.getCobertura(region, tipo);
					
					// mapaMaxcom.getCobertura(region);

			 	});
			},
			onTypeCoberturaChange : function(){

				$( "select#tipo-cobertura" ).change(function () {
					var tipo = $( "select#tipo-cobertura option:selected" ).val();

					if(tipo!=''){

						$("select#cobertura-regiones").html('<option value="">Selecciona una Región</option>');

						$.each( regiones_kml[tipo], function( i, val ) {
						  	$("select#cobertura-regiones").append('<option value="'+i+'">'+regiones_name[i]+'</option>');		  
						});

						$("select#cobertura-regiones").show();
					}
					else{
						$("select#cobertura-regiones").hide();
					}
			 	});
			},
			onRegionSucursalesChange : function(){

				$( "select#sucursales-regiones" ).change(function () {
					var region = $( "select#sucursales-regiones option:selected" ).val();
					mapaMaxcom.deleteMarkers();
					if(region!=''){
						mapaMaxcom.getSucursales(region);
					}
					else{
						var myLatlng = new google.maps.LatLng(21.5121499,-109.8253327);
						mapaMaxcom.setCenterMapM(myLatlng, 4);
					}
					// mapaMaxcom.getCobertura(region);

			 	});
			},
			clearMarkers : function() {
			  mapaMaxcom.setAllMap(null);
			},
			deleteMarkers: function() {
			  mapaMaxcom.clearMarkers();
			  markers = [];
			},
			setAllMap: function(map) {
				markers.forEach(function (marker, i) {
				     markers[i].setMap(map);
				});
			},
			setCenterMapM : function(center, zoom){
				map.setCenter(center);
				zoomChangeBoundsListener = 
				google.maps.event.addListenerOnce(map, 'bounds_changed', function(event) {
					if (this.getZoom()){
						this.setZoom(zoom);
					}
				});

				setTimeout(function(){google.maps.event.removeListener(zoomChangeBoundsListener); }, 2000);
			}

		}; // end of the return
	}());
	

	var Maxcom = (function(){

		return {

			init : function(){
				Maxcom.validateForms();
			},
			encode_base64: function(what) {
		        var base64_encodetable = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
		        var result = "";
		        var len = what.length;
		        var x, y;
		        var ptr = 0;
		        while (len-- > 0) {
		            x = what.charCodeAt(ptr++);
		            result += base64_encodetable.charAt((x >> 2) & 63);
		            if (len-- <= 0) {
		                result += base64_encodetable.charAt((x << 4) & 63);
		                result += "==";
		                break;
		            }
		            y = what.charCodeAt(ptr++);
		            result += base64_encodetable.charAt(((x << 4) | ((y >> 4) & 15)) & 63);
		            if (len-- <= 0) {
		                result += base64_encodetable.charAt((y << 2) & 63);
		                result += "=";
		                break;
		            }
		            x = what.charCodeAt(ptr++);
		            result += base64_encodetable.charAt(((y << 2) | ((x >> 6) & 3)) & 63);
		            result += base64_encodetable.charAt(x & 63);
		        }
		        return result;
		    },
		    agreed_terms : function() {
		       var valid_terms;

				if($("#first-step-form #terms").is(':checked')){
				  $(".checkbox-container .error-check").hide();
				  valid_terms = true;
				}
				else{
				  $(".checkbox-container .error-check").html('PARA REGISTRARTE DEBES ACEPTAR TERMINOS Y CONDICIONES').show();
				  valid_terms = false;
				}

		      console.log('Terms', valid_terms);
		      return valid_terms;

		    },
		    onTermsChange : function(){
		        var valid = false;

		         $('#first-step-form #terms').change(function() {
		          if($("#first-step-form #terms").is(':checked')){
		              $(".checkbox-container .error-check").hide();
		              valid = true;
		            }
		            else{
		              $(".checkbox-container .error-check").html('PARA REGISTRARTE DEBES ACEPTAR TERMINOS Y CONDICIONES').show();
		              valid = false;
		            }
		         });
		    },
			validateForms : function() {
				$("#form-mi-cuenta").validate({
					lang: 'es',
					rules: {
						pass: {
							required: true
						},
						uname: {
							required:true
						}
					},
					submitHandler: function(form) {
						
						var uname = Maxcom.encode_base64($("#form-mi-cuenta #uname").val());
						var pass = Maxcom.encode_base64($("#form-mi-cuenta #pass").val());
						
			            var url = document.domain;
			            if (url == "www.maxcom.com.mx" || url == "www.maxcom.com" || url == "200.66.100.209") {
			                window.location = "http://www.admon.maxcom.com/Portal/MaxcomBillingBridge.aspx?cta=" + uname + "&pass=" + pass;
			            }
			            else {
			                window.location = '';
			            }


					}
					
				});

				$("#form-b-contacto-comercial").submit(function(e) {
				    e.preventDefault();
				    
				    if($("#form-b-contacto-comercial #terms").is(':checked')){
				    	$("#form-b-contacto-comercial .checkbox-container .error-check").hide();
				    	valid = true;
				    }
				    else{
				    	$("#form-b-contacto-comercial .checkbox-container .error-check").html('Para continuar debes aceptar el aviso de privacidad.').show();
				    	valid = false;
				    	return false;
				  }

				  $('.message-fail.nospace').hide();

				}).validate({
					lang: 'es',
					rules: {
						email: {
							required: true,
							email: true
						},
						nombre: {
							required:true
						},
						mensaje: {
							required: true
						},
						lada: {
							digits: true
						},
						telefono: {
							digits: true
						},
						direccion: {
							required: true
						},
						puesto: {
							required: true
						},
						empresa: {
							required: true
						},
						n_empleados: {
							required: true
						},
						asunto: {
							required: true
						},
						mensaje : {
							required: true
						}
					},
					submitHandler: function(form) {

						if (!grecaptcha.getResponse()){
				           console.log("Google reCAPTCHA not complete");//Display error here e.g. jQuery('#targetID').html("Please check the 'I'm not a robot' checkbox!")
				            return;//End the processing
				        }
						var self = $("#form-quiero-ser-cliente").serialize();

						// $.ajax({ 
					 //         data: self+'&action=getFormData&type='+type,
					 //         type: 'post',
					 //         url: ajax_url,
					 //         success: function(data) {
					 //         	if(data.success){
					 //         		$('#cotizacionForm .s-message.success').fadeIn(800, function(){
					 //         			$('#cotizacionForm input["text"], #cotizacionForm textarea').val();
					 //         		});
					 //         	}
					 //         	else{
					 //         		$('#cotizacionForm .s-message.fail').fadeIn(800);
					 //         	}
					 //              console.log(data); //should print out the name since you sent it along

					 //        }
					 //    });

					}
					
				});

				$("#form-quiero-ser-cliente").submit(function(e) {
				    e.preventDefault();
				    
				    if($("#form-quiero-ser-cliente #quiero-terms").is(':checked')){
				    	$("#form-quiero-ser-cliente .checkbox-container .error-check").hide();
				    	valid = true;
				    }
				    else{
				    	$("#form-quiero-ser-cliente .checkbox-container .error-check").html('Para continuar debes aceptar el aviso de privacidad.').show();
				    	valid = false;
				    	return false;
				  }

				  $('.message-fail.nospace').hide();

				}).validate({
					lang: 'es',
					rules: {
						email: {
							required: true,
							email: true
						},
						nombre: {
							required:true
						},
						mensaje: {
							required: true
						},
						lada: {
							digits: true
						},
						telefono: {
							digits: true
						},
						calle: {
							required: true
						},
						ext: {
							required: true
						},
						colonia: {
							required: true
						},
						cp: {
							required: true
						},
						delegacion: {
							required: true
						},
						entidad: {
							required: true
						},
						mensaje : {
							required: true
						}
					},
					submitHandler: function(form) {
						if(Maxcom.agreed_terms() === false){
							console.log('noterms');
						}
						if (!grecaptcha.getResponse()){
				           console.log("Google reCAPTCHA not complete");//Display error here e.g. jQuery('#targetID').html("Please check the 'I'm not a robot' checkbox!")
				            return;//End the processing
				        }
						var self = $("#form-quiero-ser-cliente").serialize();

						// $.ajax({ 
					 //         data: self+'&action=getFormData&type='+type,
					 //         type: 'post',
					 //         url: ajax_url,
					 //         success: function(data) {
					 //         	if(data.success){
					 //         		$('#cotizacionForm .s-message.success').fadeIn(800, function(){
					 //         			$('#cotizacionForm input["text"], #cotizacionForm textarea').val();
					 //         		});
					 //         	}
					 //         	else{
					 //         		$('#cotizacionForm .s-message.fail').fadeIn(800);
					 //         	}
					 //              console.log(data); //should print out the name since you sent it along

					 //        }
					 //    });

					}
					
				});

				$("#form-ya-soy-cliente").submit(function(e) {
				    e.preventDefault();
				    
				    if($("#form-ya-soy-cliente #ya-terms").is(':checked')){
				    	$("#form-ya-soy-cliente .checkbox-container .error-check").hide();
				    	valid = true;
				    }
				    else{
				    	$("#form-ya-soy-cliente .checkbox-container .error-check").html('Para continuar debes aceptar el aviso de privacidad.').show();
				    	valid = false;
				    	return false;
				  }

				  $('.message-fail.nospace').hide();

				}).validate({
					lang: 'es',
					rules: {
						email: {
							required: true,
							email: true
						},
						nombre: {
							required:true
						},
						mensaje: {
							required: true
						},
						lada: {
							digits: true
						},
						telefono: {
							digits: true
						},
						no_cuenta: {
							required: true
						},
						asunto: {
							required: true
						},
						mensaje : {
							required: true
						}
					},
					submitHandler: function(form) {
						if (!grecaptcha.getResponse()){
				           console.log("Google reCAPTCHA not complete");//Display error here e.g. jQuery('#targetID').html("Please check the 'I'm not a robot' checkbox!")
				            return;//End the processing
				        }
						var self = $("#form-ya-soy-cliente").serialize();

						// $.ajax({ 
					 //         data: self+'&action=getFormData&type='+type,
					 //         type: 'post',
					 //         url: ajax_url,
					 //         success: function(data) {
					 //         	if(data.success){
					 //         		$('#cotizacionForm .s-message.success').fadeIn(800, function(){
					 //         			$('#cotizacionForm input["text"], #cotizacionForm textarea').val();
					 //         		});
					 //         	}
					 //         	else{
					 //         		$('#cotizacionForm .s-message.fail').fadeIn(800);
					 //         	}
					 //              console.log(data); //should print out the name since you sent it along

					 //        }
					 //    });

					}
					
				});
			}

		}; // end of the return
	}());
	
	var paquete1 = '';
	var paquete2 = '';
	var paquete3 = '';

	var cotizadorMaxcom = (function() {
	
		var paquetes = new Array();
		var paquete  = '';
		return {
			puntosp1 : function(){

				var puntos = 0;
				var puntosval = [1,1,3,2,3,0];

				$("#pregunta-1 input[type='text']").each(function( i ) {
					
					puntos+= parseInt($(this).val()*puntosval[i]);

				});

				return puntos;

			},
			puntosp2 : function(){

				var puntos = parseInt($("#pregunta-2 input[type='text']").val());
				return puntos;

			},
			puntosp3 : function(){

				var puntos = 0;

				$("#pregunta-3 input[type='checkbox']").each(function( i, element) {

					if($(this).is(":checked")){
						 puntos+= parseInt($(this).val());
					}
				});
				return puntos;

			},

			getpuntos : function(){
				return cotizadorMaxcom.puntosp1() + cotizadorMaxcom.puntosp2() + cotizadorMaxcom.puntosp3();
			},

			setpaquete : function(){
				var total = cotizadorMaxcom.getpuntos();
				console.log(total);
				paquete = '';
				if(total<=13){
					paquete = 'paquete-elemental';
					$('.change-paquete-resultado.prev').addClass('inactive');
					$('.change-paquete-resultado.next').removeClass('inactive');
				}
				else if(total>13 && total<=16){
					paquete='paquete-recargado';
					$('.change-paquete-resultado.prev').removeClass('inactive');
					$('.change-paquete-resultado.next').addClass('inactive');
				}
				else{
					paquete='paquete-intenso';
					$('.change-paquete-resultado.prev').removeClass('inactive');
					$('.change-paquete-resultado.next').removeClass('inactive');
				}

				return paquete;
			},
			showP : function(toshow){

				if(toshow>1){$('.nav-button.prev').show(); $('.next.nav-button').show(); }else{$('.nav-button.prev').hide(); }
				if(toshow==4) {$('.next.nav-button').hide(); $('.prev.nav-button').hide(); $('.pregunta-container').addClass('done');}
					
				$('.pregunta-container .pregunta').hide();
				$('.pregunta-'+toshow).fadeIn(400); 
				$('html, body').animate({
		        	scrollTop: $('.pregunta-'+toshow).offset().top-128
		    	}, 400);
				$('.pagination-container span').removeClass('active');
				$('.pagination-container span').eq( toshow-1 ).addClass('active');
			},
			validateP: function(tovalidate){
				var pass = false;

				$('.pregunta .instrucciones').removeClass('error');

				if(tovalidate==1){
					pass=true;
				}
				else if(tovalidate==2){
					pass = validateP1();
				}
				else if(tovalidate == 3){
					pass = validateP2();
				}
				else if(tovalidate == 4){
					pass = validateP3();
					var paquete = cotizadorMaxcom.setpaquete();
					paquete1 = paquete;
					$('.paquete-resultado .'+paquete).fadeIn();

				}

				if(pass==false) {$('.pregunta .instrucciones').addClass('error');}
				return pass;
			},
			getPaqueteConexion: function(){
				return paquete;
			},
			setPaqueteConexion: function(p){
				paquete = p;

				return paquete;
			}

		}

	})();

	/*****INITIALIZE MAP*****/
	if($('#map-canvas').length>0){
		google.maps.event.addDomListener(window, 'load', mapaMaxcom.initialize());

		window.onresize = function(event) {
			mapaMaxcom.responsivemap();
		}

		if($('#map-canvas').hasClass('sucursales-map')){
			mapaMaxcom.onRegionSucursalesChange();
		}
		else if($('#map-canvas').hasClass('cobertura-map')){
			mapaMaxcom.onRegionCoberturaChange();
			mapaMaxcom.onTypeCoberturaChange();
		}
	}

	$('.formstoshow').on('click', '.showform', function(){
		var form = $(this).data('show');
		grecaptcha.reset();
		if(!$('#'+form).is(':visible')){
			$('.banner-head').hide();
			$('.form-container').hide();
			$('.'+form).show();
			$('#'+form).show();
		}
		else{
			$('.banner-head.main').show();
			$('.'+form).hide();
			$('#'+form).hide();
		}
		
	});

	$('#content').on('click', '#ver-requisitos', function(){
		if(!$('#requisitos').is(':visible')){
			$('#requisitos').fadeIn(400);
		}
		else{
			$('#requisitos').fadeOut(400);
		}
		
	});

	$('#content').on('click', '.veroferta', function(){
		var data = $(this).data('show');

		if($(this).hasClass('tarifa')){
			$('.canales-container').hide();
		}

		if($(this).hasClass('beneficio')){
			$('.beneficio').removeClass('active');
			$('.beneficio-descripcion').hide();
			$(this).addClass('active');
			
		}

		if(!$('.'+data).is(':visible')){
			$('.'+data).fadeIn(400);
		}
		else{
			$('.'+data).fadeOut(400);
		}
		
	});
	$('#content').on('click', '#bg-popup', function(){
		$('.canales-container').fadeOut(
			400, function(){
			$('#bg-popup').hide();
		});
		
	});
	$('#content').on('click', '.vercanales-pop', function(){
		var data = $(this).data('show');

		if(!$('.canales-container.'+data).is(':visible')){
			$('#bg-popup').show();
			$('.canales-container.'+data).fadeIn(400);
		}
		else{
			$('.canales-container.'+data).fadeOut(400);
		}
		
	});
	

	$('#inner-header').on('click', '#menuh', function(){
		if(!$('#inner-header .menu').is(':visible')){
			$('#inner-header .menu').show();
		}
		else{
			$('#inner-header .menu').hide();
		}
		
	});

	$('#mfb-single').on('click', 'span.vermas', function(){

		var data = $(this).data('service');

		if(!$('.mfb-info-container .'+data+'-container').is(':visible')){
			$('.mfb-info-container >div').hide();
			$(this).addClass('open');
			$('.mfb-info-container .'+data+'-container').fadeIn(400);
			$('html, body').animate({
		        scrollTop: $('.mfb-info-container .'+data+'-container').offset().top-108
		    }, 400);
		}
		else{
			$(this).removeClass('open');
			$('.mfb-info-container >div').hide();
		}
		
	});


	// LIMPIAR
	$(".elements-container").on('click', '.element', function(e) {
		console.log($(this).data('href'));
		if($(this).data('href')){
			window.location = $(this).data('href');
		}
	});
	$(".ofertas-container .oferta").on('click', '.vermas', function(e) {
			e.preventDefault();

			if($(this).hasClass('close')){
				$(this).siblings('.info-hvr').hide();
				$('.ofertas-container .col').removeClass('open');
				$(this).removeClass('close');

				$('.cotizador-oferta').show();
				
			}
			else{
				$('.cotizador-oferta').hide();
				$(this).siblings('.info-hvr').show();
				$('.ofertas-container .col').addClass('open');
				$(this).addClass('close');
			}
			
		});


		$(".pregunta-container").on('click', '.setpaquete', function() {
			console.log(cotizadorMaxcom.setpaquete());
		});



		$(".paquete-resultado .buttons-container").on('click', '#gocombo', function() {
			$(".change-paquete-resultado").hide();
			$(".paquete-resultado .buttons-container").hide();
			$(".paquete-resultado .info-paquete").addClass('simplify');
			$(".paquete-resultado .combo-buttons-container").show();

		});

		var totalComboMax = {'maxConexion' : 0 ,'maxDiversion': 0, 'maxMovil' : 0};

		var sumCotizadorMax = function(){
		  	var total= 0;
		  	var precio; 
		  	$.each(totalComboMax, function(index, value){
		  			total+=value;
			});
		  	
		  	$('.combo-costo .costo-total').html('$'+total+'.<span>00</span>');

		  	return total;
		};

		$(".combo-max").on('click', 'button', function() {
			if($('.info-paquete.simplify').is(':visible')){

				var conexion =	cotizadorMaxcom.getPaqueteConexion();
				$('.info-paquete.simplify').hide();
				$('.combos').fadeIn();
				var price = $('.'+conexion+' .info-paquete').data('price');
				totalComboMax['maxConexion'] = price;

				$('.combo-container .maxConexion .titulo').html($('.'+conexion+' .info-paquete .titulo').html());
				$('.combo-container .maxConexion .subtitulo').html($('.'+conexion+ '.info-paquete .subtitulo').html());
				$('.combo-container .maxConexion').fadeIn();

				// Agregar el paquete simplificado
			}

			var grupo = $(this).parent().data('group');
			var paquete = $(this).data('paquete');
			var price = $(this).data('price');

			totalComboMax[grupo] = price;
			console.log(price, grupo, totalComboMax);
			$('.combo-buttons-container button').removeClass('active');
			$('#add'+grupo).addClass('nodisplay');

			$(this).parent().hide();

			$('.combo-container .'+grupo+' .titulo').html($(this).find('span.titulo').text());
			$('.combo-container .'+grupo+' .subtitulo').html($(this).find('span.subtitulo').text());
			$('.combo-container .'+grupo).fadeIn();

			if(!$('.combo-buttons-container button').is(':visible')){
				$('.buttons-container #gocombo').hide();
				$('.buttons-container').fadeIn();
				
			}

			sumCotizadorMax();

		});

		$(".buttons-container").on('click', '#go-cotiza-form', function(e) {
			e.preventDefault();
			var parameters = '?precio='+$('.total .price').text();

			console.log(totalComboMax);
			
			var total = 0;
			$.each(totalComboMax, function(index, value){
		  			total+=value;

		  			if(value!=0){
		  				parameters+='&'+index+'='+$('.'+index+' .titulo').text() +' '+$('.'+index+' .subtitulo').text();
		  			}
			});

			if(total==0){
				parameters = '?maxDiversion='+paquete1;
			}
			else{

			}
			
			if($('#check-maxConexion').is(':checked')){
				parameters+='&maxConexion='+$('.p-maxConexion >p').html();
			}

			if($('#check-maxDiversion').is(':checked')){
				parameters+='&maxDiversion='+$('.p-maxDiversion >p').html();
			}

			if($('#check-maxMovil').is(':checked')){
				parameters+='&maxMovil='+$('.p-maxMovil >p').html();
			}

			window.location = $(this).data('href')+parameters;

		});

		$(".cotizador-combo").on('click', '.go-paquete-cotiza', function(e) {
			e.preventDefault();
			var parameters = '?precio='+$('.total .price').text();
			if($('#check-maxConexion').is(':checked')){
				parameters+='&maxConexion='+$('.p-maxConexion >p').html();
			}

			if($('#check-maxDiversion').is(':checked')){
				parameters+='&maxDiversion='+$('.p-maxDiversion >p').html();
			}

			if($('#check-maxMovil').is(':checked')){
				parameters+='&maxMovil='+$('.p-maxMovil >p').html();
			}

			window.location = $(this).prop('href')+parameters;

		});

		$(".combo-container").on('click', '.returnCombo span', function() {
			
			$(".paquete-resultado .buttons-container").hide();
			$(".combo-max").hide();

			$('#'+$(this).data('return')).removeClass('nodisplay').show();


			$('#'+$(this).data('return')).addClass('active');

			if($(this).data('return')=='addmaxMovil'){
				
				$('.combo-max-movil').show();
			}
			else{
				$('.combo-max-diversion').show();
			}

		});

		$(".paquete-resultado .combo-buttons-container").on('click', '#addmaxDiversion', function() {
			$(".paquete-resultado .combo-max-movil").hide();

			$('.combo-buttons-container button').removeClass('active');

			$(this).addClass('active');
			$(".paquete-resultado .combo-max-diversion").fadeIn();

		});

		$(".paquete-resultado .combo-buttons-container").on('click', '#addmaxMovil', function() {

			$(".paquete-resultado .combo-max-diversion").hide();

			$('.combo-buttons-container button').removeClass('active');

			$(this).addClass('active');
			$(".paquete-resultado .combo-max-movil").fadeIn();

		});


		$("#maxConexion-container").on('click', '.product', function() {
			if($('#products-container-info').hasClass('open')){
				$('#products-container-info').removeClass('open');
				$('#products-container-info >div').fadeOut(400);

			}
			else{
				$('#products-container-info').addClass('open');
				$('#products-container-info >div').fadeIn(400);
				// $('html, body').animate({
		  //       	scrollTop: $("#products-container-info >div").offset().top-108
		  //   	}, 400);
			}
			

			
			 

		});

		$( "<div class='inc button'>+</div><label id='personas-count'>1-3 personas</label>" ).insertBefore( ".pregunta-2 .item input[type='text']" );
		$( "<div class='dec button'>-</div>" ).insertAfter( ".pregunta-2 .item input[type='text']" );



		$( "<div class='dec button'>-</div>" ).insertAfter( ".pregunta-1 .item input[type='text']" );
		$( "<div class='inc button'>+</div>" ).insertBefore( ".pregunta-1 .item input[type='text']" );



		function cleanCotizador(){

			$("#pregunta-1 input[type='text']").each(function( i ) {
				$(this).val(0);
			});

			$("#pregunta-2 input[type='text']").val(1);
			$('#personas-count').html('1-3 personas');

			$(".pregunta-2 .item-2, .pregunta-2 .item-3, .pregunta-2 .item-4").fadeOut(400);

			$("#pregunta-3 input[type='checkbox']").each(function( i ) {
				$(this).prop('checked', false);
			});

			$(".nav-button.prev").hide();
			$(".nav-button.next").show();
			cotizador_currentvisible = 1;
			$('.pagination-container span').removeClass('active');
			$('.pagination-container span').eq( cotizador_currentvisible-1 ).addClass('active');

			$(".pregunta-container .pregunta").hide();
			$(".pregunta-container").removeClass('done');
			$(".pregunta-container .pregunta-1").fadeIn();

			$(".paquete-resultado .combos").hide();
			$(".paquete-resultado .combo-container >div").hide();
			$(".paquete-resultado .combo-buttons-container").hide();
			$(".paquete-resultado .info-paquete").removeClass('simplify');
			$(".paquete-resultado .info-paquete").show();
			$("#gocombo").show();

			$(".combo-buttons-container buttons").removeClass('nodisplay');

			$(".paquete-resultado div.paquete").hide();


		}	
		// Validaciones
		function validateP1(){

			var pass = false;
			$("#pregunta-1 input[type='text']").each(function( i ) {

				if($(this).val()>0){
					pass = true;
					return false;
				}

			});

			return pass; 

		}

		function validateP2(){

			var pass = false;
			if($("#pregunta-2 input[type='text']").val()>0){
				pass = true;
			}
				
			return pass; 

		}

		function validateP3(){

			var pass = false;
			
			$("#pregunta-3 input[type='checkbox']").each(function( i ) {

				if($(this).is(":checked")){
					pass = true;
					return false;
				}

			});

			return pass; 

		}

		var cotizador_currentvisible = 1;

		$(".pregunta-container").on('click', '.nav-button', function() {

			var change = false;

			if($(this).hasClass('prev')){
				
				if($('.pregunta-'+(cotizador_currentvisible-1)).length>0 && cotizadorMaxcom.validateP(cotizador_currentvisible-1) ){
					cotizador_currentvisible-=1;
					change = true;
				}


			}
			else{

				if($('.pregunta-'+(cotizador_currentvisible+1)).length>0 && cotizadorMaxcom.validateP(cotizador_currentvisible+1)){
					cotizador_currentvisible+=1;
					change = true;
				}

			}

			if(change){
				cotizadorMaxcom.showP(cotizador_currentvisible);
			}
		});

		
		$(".paquete-resultado").on('click', '.change-paquete-resultado', function() {

			var change = false;
			var conexion =	cotizadorMaxcom.getPaqueteConexion();
			var paquetesT = { 'paquete-elemental' : 0, 'paquete-recargado':1, 'paquete-intenso': 2};
			var paquetesM =	[ 'paquete-elemental', 'paquete-recargado', 'paquete-intenso'];

			var index = paquetesT[conexion];
			
			if($(this).hasClass('prev')){

				if( paquetesM[index-1] ){
					conexion = cotizadorMaxcom.setPaqueteConexion(paquetesM[index-1]);
					$('.paquete').hide();
					$('.paquete.'+paquetesM[index-1]).fadeIn(400);
					change = true;
				}


			}
			else{
				if(paquetesM[index+1]){
					conexion = cotizadorMaxcom.setPaqueteConexion(paquetesM[index+1]);
					$('.paquete').hide();
					$('.paquete.'+paquetesM[index+1]).fadeIn(400);
					change = true;
				}


			}


			if(conexion==='paquete-elemental'){
				$('.change-paquete-resultado.prev').addClass('inactive');
				$('.change-paquete-resultado.next').removeClass('inactive');
			}
			else if(conexion==='paquete-intenso'){
				$('.change-paquete-resultado.prev').removeClass('inactive');
				$('.change-paquete-resultado.next').addClass('inactive');
			}
			else{
				$('.change-paquete-resultado.prev').removeClass('inactive');
				$('.change-paquete-resultado.next').removeClass('inactive');
			}
		});

		function init_scroll(){
			var $maxConexion = $('#p-maxConexion .oferta'),
			$maxDiversion = $('#p-maxDiversion .oferta'),
			$maxMovil = $('#p-maxMovil .oferta'),
		    $document = $(document),
		    numSections = {'p-maxConexion' : $maxConexion.length, 'p-maxDiversion' : $maxDiversion.length, 'p-maxMovil' : $maxMovil.length},
		    currSection = 0,
		    isAnimating = false,
		    totalCombo = 0;

		   var current_paquetes = {'p-maxConexion': 0, 'p-maxDiversion' : 0, 'p-maxMovil' : 0};
		  // Animate to a specific index.
		  // 
		  var setCotizador = function(element){
		  	var titulo = $('#'+element+' .oferta').eq(current_paquetes[element]).find('h5 b').html();

		  	if($('.cotizador-combo').is(':visible')){
		  		sumCotizador();
		  	}
		  	
		  	$('.cotizador-combo .'+element+' p').html(titulo);
		  }

		  var sumCotizador = function(){
		  	totalCombo = 0;
		  	var precio; 
		  	$.each(current_paquetes, function(index, value){

		  		if($('.cotizador-combo .'+index+' input[type="checkbox"]').is(':checked')){
		  			precio = $('#'+index+' .oferta').eq(value).find('.price').html();
		  			precio = Number(precio.replace("$", "").replace("*", ""));
		  			totalCombo+=precio;
		  		}
			});
		  	
		  		$('.cotizador-combo .total .price').html('$'+totalCombo+'.<span>00</span>');

		  		return sumCotizador;
		  }

		  var gotoSection = function(index, element) {

		  	current_paquetes[element] = index;

		    isAnimating = true;
		    $('.ofertas-container #'+element).animate({
		      scrollTop: (384*index)
		    }, 600, function () {
		      isAnimating = false;
		    });

		    setCotizador(element);

		  };
		  
		  // Advance to next or previous section.
		  var handleAction = function(direction, element) {
		    if (isAnimating) { return false; }
		    
		    if (direction === 'prev' && currSection > 0) { currSection--; }
		    else if (direction === 'next' && currSection < numSections[element] - 1) { currSection++; }
		    else { return false; } // This shouldn't happen.
		    
		   	gotoSection(currSection, element);
		  };

		  	$('.ofertas-container .col').bind('mousewheel DOMMouseScroll', function(e) {
				e.preventDefault();
				
				$('.ofertas-container .col .info-hvr').hide();
				$('.ofertas-container .col').removeClass('open');
				$('.ofertas-container .col .vermas').removeClass('close');
				$('.cotizador-oferta').show();

				if(e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0 ) {
			         //scroll down
			         handleAction('next', e.currentTarget.id);
			     }else {
			         //scroll up
			        handleAction('prev', e.currentTarget.id);
			     }

			});


		  	$('.ofertas-container').on('click', '.control', function(e){
				
				$('.ofertas-container .col .info-hvr').hide();
				$('.ofertas-container .col').removeClass('open');
				$('.ofertas-container .col .vermas').removeClass('close');
				$('.cotizador-oferta').show();

				var product = $(this).data('product');

				if( $(this).hasClass('next')) {
			         //scroll down
			         handleAction('next', product);
			     }else {
			         //scroll up
			        handleAction('prev', product);
			     }

			});

		  	$('.cotizador-combo >div input[type="checkbox"]').change(function() {
				sumCotizador();
         	});

		  $('.cotizador-oferta button').on('click', function(){

		  	if($('.cotizador-combo').is(':visible')){
		  		$('.cotizador-combo').hide();
		  		$(this).removeClass('open');
		  		$('.cotizador-combo').removeClass('wasopen');
		  		$('.control.next').removeClass('bottomofbox');
		  	}
		  	else{
		  		sumCotizador();
		  		$('.cotizador-combo').show();
		  		$(this).addClass('open');
		  		$('.cotizador-combo').addClass('wasopen');
		  		$('.control.next').addClass('bottomofbox');
		  	}

		  });
		  // Handle keyboard input.
		}

		init_scroll();
		Maxcom.init();
		



		// function init_scroll(){
		// 	console.log('hello');
			
		// }

		$(".item .button").on("click", function() {

		  var $button = $(this);
		  var oldValue = $button.parent().find("input").val();

		  if ($button.text() == "+") {
			  var newVal = parseFloat(oldValue) + 1;
			  $(this).parent().find('.button').addClass('active');
			} else {
		   // Don't allow decrementing below zero
		    if (oldValue > 0) {
		      var newVal = parseFloat(oldValue) - 1;
		    } else {
		      newVal = 0;
		    }

		    if(newVal==0) $(this).removeClass('active');
		   if(newVal==1 && $(this).parent().hasClass('p2')) $(this).removeClass('active');
		  }

		  $button.parent().find("input").val(newVal);

		});

		$("#gotocotizar").on("click", function(){
			cleanCotizador();
		});

		$(".pregunta-2 .item .button").on("click", function() {

		  var $button = $(this);
		  var value = $button.parent().find("input").val();
		  var values = ['', '1-3', '4-6', '7-10'];

			if(value<1){
				 $button.parent().find("input").val(1);
				 value = 1;
			}

			if (value < 2){
				$(".pregunta-2 .item-1").removeClass('two').removeClass('three');
			}

			if (value < 3){
				$(".pregunta-2 .item-1").removeClass('two').removeClass('three');
			}

			if(value > 1 ){
			  	$(".pregunta-2 .item-1").addClass('two');
			}
			
			if(value >2){	
			  $(".pregunta-2 .item-1").addClass('three');
			}
			
			
			if(value > 3){
			  	$button.parent().find("input").val(3);
			  	value=3;
			}
		  console.log(value);
		  $('#personas-count').html(values[value]+' personas');


		});

})(jQuery);

