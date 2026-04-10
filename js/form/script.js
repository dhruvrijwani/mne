jQuery(document).ready(function(){
  jQuery("#formID").validationEngine();
  $("#formID").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
});
jQuery(document).ready(function(){
  jQuery("#form1_enquiry").validationEngine();
  $("#form1_enquiry").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
});
jQuery(document).ready(function(){
  jQuery("#form2_enquiry").validationEngine();
  $("#form2_enquiry").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
});
jQuery(document).ready(function(){
  jQuery("#form3_enquiry").validationEngine();
  $("#form3_enquiry").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
});
jQuery(document).ready(function(){
  jQuery("#form4_enquiry").validationEngine();
  $("#form4_enquiry").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
});
jQuery(document).ready(function(){
  jQuery("#form5_enquiry").validationEngine();
  $("#form5_enquiry").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
});

function get_query()
{
  var qrStr = window.location.search;
  var spQrStr = qrStr.substring(1);
  var arrQrStr = new Array();
  var arr = spQrStr.split('&');
  var queryvalue = arr[i].split('=');
  queryvalue[1];  
  document.getElementById('sourceId').value = queryvalue[1];
}