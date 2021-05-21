import moment from 'moment'
import "../css/index.css"
import $ from 'jquery'

$(document).ready(function(){

  $("#form").submit(function(){
    var user = $("#username").val();
    var pass = $("#password").val();

    var check=0;
    if(user==""){
      $("#username").addClass("is-invalid");
      $("#error1-user").removeClass("hide");
      check=1;
    }
    else {
      $("#username").removeClass("is-invalid").addClass("is-valid");
      $("#error1-user").addClass("hide");
    }
    if(pass==""){
      $("#password").addClass("is-invalid");
      $("#error1-pass").removeClass("hide");
      check=1;
    }
    else {
      $("#password").removeClass("is-invalid").addClass("is-valid");
      $("#error1-pass").addClass("hide");
    }

    if (check==0) {
      return true;
    }
    else{
      return false;
    }

  });
});
