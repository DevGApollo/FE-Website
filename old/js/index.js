var tpj2 = jQuery;
tpj2.noConflict(), tpj2(document).ready(function () {
  jQuery.validator.addMethod("namenew", function (e, r) {
    return !!/^[^-\s][a-zA-Z_\s-]+$/.test(e)
  }, "Please Enter atleast 2 words"), jQuery.validator.addMethod("email", function (e, r) {
    return !!/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/.test(e)
  }, "Please Enter Valid Email"), jQuery.validator.addMethod("number", function (e, r) {
    return !!/^(\+\d{1,3}[- ]?)?\d{10}$/.test(e)
  }, "Please Enter Valid Mobile Number"), tpj2(".form1").validate({
    rules: {
      name: {
        required: !0,
        namenew: !0
      },
      cname: {
        required: !0,
        namenew: !0
      },
      email: {
        required: !0,
        email: !0
      },
      country: {
        required: !0
      },
      department: {
        required: !0
      },
      number: {
        required: !0,
        number: !0
      },
      message: {
        required: !0
      },
      captcha: {
        required: !0
      }
    },
    messages: {
      name: {
        required: "This Filed is required",
        namenew: "Please Enter atleast 2 words"
      },
      cname: {
        required: "This Filed is required",
        namenew: "Please Enter atleast 2 words"
      },
      email: {
        required: "This Filed is required",
        email: "Please Enter Valid Email Id"
      },
      country: {
        required: "This Filed is required"
      },
      department: {
        required: "This Filed is required"
      },
      number: {
        required: "This Filed is required",
        number: "Please Enter Valid Mobile Number"
      },
      message: {
        required: "This Filed is required"
      },
      captcha: {
        required: "This Filed is required"
      }
    },
    submitHandler: function (e) {
      tpj2(".submit").val("Please Wait...").attr("disabled", !0), e.submit()
    },
    highlight: function (e, r, s) {
      tpj2(e).nextAll(".form-control-feedback").show().removeClass("glyphicon-ok").addClass("glyphicon-remove"), tpj2(e).addClass(r).removeClass(s), tpj2(e).closest(".form-group").removeClass("has-success").addClass("has-error")
    },
    success: function (e) {
      tpj2(e).nextAll(".form-control-feedback").show().removeClass("glyphicon-remove").addClass("glyphicon-ok"), e.closest(".form-group").removeClass("has-error").addClass("has-success"), tpj2(e).remove()
    }
  }), tpj2(".form2").validate({
    rules: {
      name: {
        required: !0,
        namenew: !0
      },
      cname: {
        required: !0,
        namenew: !0
      },
      email: {
        required: !0,
        email: !0
      },
      country: {
        required: !0
      },
      number: {
        required: !0,
        number: !0
      },
      message: {
        required: !0
      },
      captcha: {
        required: !0
      }
    },
    messages: {
      name: {
        required: "This Filed is required",
        namenew: "Please Enter atleast 2 words"
      },
      cname: {
        required: "This Filed is required",
        namenew: "Please Enter atleast 2 words"
      },
      email: {
        required: "This Filed is required",
        email: "Please Enter Valid Email Id"
      },
      country: {
        required: "This Filed is required"
      },
      number: {
        required: "This Filed is required",
        number: "Please Enter Valid Mobile Number"
      },
      message: {
        required: "This Filed is required"
      },
      captcha: {
        required: "This Filed is required"
      }
    },
    submitHandler: function (e) {
      tpj2(".submit").val("Please Wait...").attr("disabled", !0), e.submit()
    },
    highlight: function (e, r, s) {
      tpj2(e).nextAll(".form-control-feedback").show().removeClass("glyphicon-ok").addClass("glyphicon-remove"), tpj2(e).addClass(r).removeClass(s), tpj2(e).closest(".form-group").removeClass("has-success").addClass("has-error")
    },
    success: function (e) {
      tpj2(e).nextAll(".form-control-feedback").show().removeClass("glyphicon-remove").addClass("glyphicon-ok"), e.closest(".form-group").removeClass("has-error").addClass("has-success"), tpj2(e).remove()
    }
  }), tpj2(".form3").validate({
    rules: {
      name: {
        required: !0,
        namenew: !0
      },
      cname: {
        required: !0,
        namenew: !0
      },
      email: {
        required: !0,
        email: !0
      },
      department: {
        required: !0
      },
      country: {
        required: !0
      },
      number: {
        required: !0,
        number: !0
      },
      message: {
        required: !0
      },
      captcha: {
        required: !0
      }
    },
    messages: {
      name: {
        required: "This Filed is required",
        namenew: "Please Enter atleast 2 words"
      },
      cname: {
        required: "This Filed is required",
        namenew: "Please Enter atleast 2 words"
      },
      email: {
        required: "This Filed is required",
        email: "Please Enter Valid Email Id"
      },
      country: {
        required: "This Filed is required"
      },
      department: {
        required: "This Filed is required"
      },
      number: {
        required: "This Filed is required",
        number: "Please Enter Valid Mobile Number"
      },
      message: {
        required: "This Filed is required"
      },
      captcha: {
        required: "This Filed is required"
      }
    },
    submitHandler: function (e) {
      tpj2(".submit").val("Please Wait...").attr("disabled", !0), e.submit()
    },
    highlight: function (e, r, s) {
      tpj2(e).nextAll(".form-control-feedback").show().removeClass("glyphicon-ok").addClass("glyphicon-remove"), tpj2(e).addClass(r).removeClass(s), tpj2(e).closest(".form-group").removeClass("has-success").addClass("has-error")
    },
    success: function (e) {
      tpj2(e).nextAll(".form-control-feedback").show().removeClass("glyphicon-remove").addClass("glyphicon-ok"), e.closest(".form-group").removeClass("has-error").addClass("has-success"), tpj2(e).remove()
    }
  }), tpj2(".form4").validate({
    rules: {
      name: {
        required: !0,
        namenew: !0
      },
      cname: {
        required: !0,
        namenew: !0
      },
      email: {
        required: !0,
        email: !0
      },
      country: {
        required: !0
      },
      department: {
        required: !0
      },
      number: {
        required: !0,
        number: !0
      },
      message: {
        required: !0
      },
      captcha: {
        required: !0
      }
    },
    messages: {
      name: {
        required: "This Filed is required",
        namenew: "Please Enter atleast 2 words"
      },
      cname: {
        required: "This Filed is required",
        namenew: "Please Enter atleast 2 words"
      },
      email: {
        required: "This Filed is required",
        email: "Please Enter Valid Email Id"
      },
      country: {
        required: "This Filed is required"
      },
      department: {
        required: "This Filed is required"
      },
      number: {
        required: "This Filed is required",
        number: "Please Enter Valid Mobile Number"
      },
      message: {
        required: "This Filed is required"
      },
      captcha: {
        required: "This Filed is required"
      }
    },
    submitHandler: function (e) {
      tpj2(".submit").val("Please Wait...").attr("disabled", !0), e.submit()
    },
    highlight: function (e, r, s) {
      tpj2(e).nextAll(".form-control-feedback").show().removeClass("glyphicon-ok").addClass("glyphicon-remove"), tpj2(e).addClass(r).removeClass(s), tpj2(e).closest(".form-group").removeClass("has-success").addClass("has-error")
    },
    success: function (e) {
      tpj2(e).nextAll(".form-control-feedback").show().removeClass("glyphicon-remove").addClass("glyphicon-ok"), e.closest(".form-group").removeClass("has-error").addClass("has-success"), tpj2(e).remove()
    }
  })
});
