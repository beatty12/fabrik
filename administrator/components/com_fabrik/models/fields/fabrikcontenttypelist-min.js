/*! Fabrik */
"use strict";var FabrikContentTypeList=new Class({options:{},initialize:function(a){var b=this.showUpdate;b(jQuery("#"+a).val()),jQuery("#"+a).on("change",function(){b(jQuery(this).val())})},showUpdate:function(a){jQuery.ajax({url:"index.php",data:{option:"com_fabrik",task:"contenttype.preview",contentType:a}}).done(function(a){jQuery("#contentTypeListPreview").empty().html(a)})}});