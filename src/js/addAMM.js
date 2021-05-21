import "../css/addAMM.css"
import $ from 'jquery'

$(document).ready(function(){

    $("#ins_amm").submit(function(){

      var email = $("#email").val();
      var user = $("#username").val();
      var name = $("#name").val();
      var surname = $("#surname").val();
      var pass = $("#password").val();
      var conf_pass = $("#conf_password").val();
      var check = 0;

      //check email
      if (email == "") {
        $("#email").addClass("is-invalid");
        $("#email_msg").addClass("invalid-feedback");
        $("#email_msg").text("*Inserire la mail*");
        check=1;
      }
      else {
        $("#email").removeClass("is-invalid").addClass("is-valid");
        $("#email_msg").hide();
      }

      //check username
      if (user == "") {
        $("#username").addClass("is-invalid");
        $("#username_msg").addClass("invalid-feedback");
        $("#username_msg").text("*Inserire un username*");
        check=1;
      }
      else {
        $("#username").removeClass("is-invalid").addClass("is-valid");
        $("#username_msg").hide();
      }

      //check name
      if (name == "") {
        $("#name").addClass("is-invalid");
        $("#name_msg").addClass("invalid-feedback");
        $("#name_msg").text("*Inserire la nome*");
        check=1;
      }
      else {
        $("#name").removeClass("is-invalid").addClass("is-valid");
        $("#name_msg").hide();
      }

      //check cognome
      if (surname == "") {
        $("#surname").addClass("is-invalid");
        $("#surname_msg").addClass("invalid-feedback");
        $("#surname_msg").text("*Inserire la cognome*");
        check=1;
      }
      else {
        $("#surname").removeClass("is-invalid").addClass("is-valid");
        $("#surname_msg").hide();
      }

      //check password
      if (pass == "") {
        $("#password").addClass("is-invalid");
        $("#password_msg").addClass("invalid-feedback");
        $("#password_msg").text("*Inserire una password*");
        check=1;
      }
      else {
        $("#password").removeClass("is-invalid").addClass("is-valid");
        $("#password_msg").hide();
      }

      //check conf-password
      if (conf_pass == "") {
        $("#conf_password").addClass("is-invalid");
        $("#conf-password_msg").addClass("invalid-feedback");
        $("#conf-password_msg").text("*Inserire una password*");
        check=1;
      }
      else {
        $("#conf_password").removeClass("is-invalid").addClass("is-valid");
        $("#conf_password_msg").hide();
      }

      if (check == 0) {
        if (pass == conf_pass) {
          return true;
        }
        else {
          $("#conf_password").addClass("is-invalid");
          $("#conf-password_msg").addClass("invalid-feedback");
          $("#conf-password_msg").text("*Le password non corrispondono*");
          return false;
        }
      }
      else {
        return false
      }
    });
});
