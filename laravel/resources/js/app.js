require('./bootstrap');
require('./jquery-3.4.1.js');
require('./jquery.validationEngine.js');
require('./jquery.validationEngine-es.js');

import swal from 'sweetalert';
// swal('<h1>ok</h1>');




window.$ = jQuery;

window.scroll({
  behavior: 'smooth'
});

// deprecated version
(function ($) {
  $.fn.extend({
    size: function () {
      return $(this).length;
    }
  });
})(jQuery);


ajaxValidationCallback = function(status, form, json, options) {
    if (window.console) {
      console.log(status);
    }
    if (status === true) {

    $("#frm-contacto").trigger('reset');
      $(".loading").hide(500);
      $(".msg").removeClass('dn');
      $(".msg").html(json.msg);
      $(".msg").css({"color" : "black"});
    }else{
      $(".loading").hide(500);
      $(".msg").removeClass('dn');
      $(".msg").html(json.error);
      $(".msg").css({"color" : "red"});

    }
    return false;
  };

  var validateForm = function() {
    jQuery("#frm-contacto").validationEngine('attach',{
      ajaxFormValidation: true,
      ajaxFormValidationMethod: 'post',
      onAjaxFormComplete: ajaxValidationCallback,
      onFailure: function(status, form, json, options){
        console.log("status:" , status);
        console.log("form:" , form);
        console.log("json:" , json);
        console.log("option:" , options);
      }
    });
    return false;
  };


  validateForm();

  $("#btnSubmit").on('click', (e) =>{
    $(".loading").show(500);
  });


AOS.init();

// hover en las categorias
$("#construction").hover(
    function(){
        $("#constructionText").hide(500);
        $("#constructionHover").show(500);
    },function(){
        $("#constructionText").show(500);
        $("#constructionHover").hide(500);
    }
);

$("#streaming").hover(
    function(){
        $("#streamingText").hide(500);
        $("#streamingHover").show(500);
    },function(){
        $("#streamingText").show(500);
        $("#streamingHover").hide(500);
    }
);

$("#plataformas").hover(
    function(){
        $("#plataformasText").hide(500);
        $("#plataformasHover").show(500);
    },function(){
        $("#plataformasText").show(500);
        $("#plataformasHover").hide(500);
    }
);

$("#administrables").hover(
    function(){
        $("#administrablesText").hide(500);
        $("#administrablesHover").show(500);
    },function(){
        $("#administrablesText").show(500);
        $("#administrablesHover").hide(500);
    }
);

$("#analitica").hover(
    function(){
        $("#analiticaText").hide(500);
        $("#analiticaHover").show(500);
    },function(){
        $("#analiticaText").show(500);
        $("#analiticaHover").hide(500);
    }
);
