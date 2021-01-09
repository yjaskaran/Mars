
let success = "alert-success";
let primary = "alert-primary";
let warning = "alert-warning";
let danger = "alert-danger";

setAlert = (type, massege, auto_dissmiss) => {
    $(".alert").show();
    $(".alert-text").html(massege);
    $(".alert").addClass(type);
  
    if (type == "alert-danger") {
      $(".alert-icon").addClass("fa-times-circle");
    }
  
    if (type == "alert-success") {
      $(".alert-icon").addClass("fa-check-circle");
    }
    if (type == "alert-warning") {
      $(".alert-icon").addClass("fa-exclamation-triangle");
    }
    if (type == "alert-primary") {
      $(".alert-icon").addClass("fa-info-circle");
    }
    $(".alert").addClass("animate__bounceInDown");
    if ($(".alert").hasClass("animate__hinge")) {
      $(".alert").removeClass("animate__hinge");
    }
    if (auto_dissmiss) {
      $(".close-alert").hide();
      setTimeout(() => {
        closeAlert(type, true);
      }, 4000);
    } else {
      $(".close-alert").show();
    }
  };
  
  closeAlert = (type, auto_dissmiss) => {
    let dur;
    if (auto_dissmiss) {
      $(".alert").removeClass("animate__bounceInDown");
      $(".alert").addClass("animate__backOutDown");
      dur = 500;
      // $(".alert").hide();
    } else {
      $(".alert").addClass("animate__hinge");
      dur = 2500;
    }
    
    setTimeout(() => {
        $(".alert").hide();
        $(".alert").removeClass(type);
    }, dur);
  };
  