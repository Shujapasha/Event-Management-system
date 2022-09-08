"use strict";
var KTSignupGeneral = function() {
    var e, t, a, r, s = function() {
        return 100 === r.getScore()
    };
    return {
        init: function() {
            e = document.querySelector("#kt_sign_up_form"), t = document.querySelector("#kt_sign_up_submit"), r = KTPasswordMeter.getInstance(e.querySelector('[data-kt-password-meter="true"]')), a = FormValidation.formValidation(e, {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: "Name is required"
                            }
                        }
                    },
                    sex: {
                        validators: {
                            notEmpty: {
                                message: "Select your gender"
                            }
                        }
                    },
                    phone: {
                        validators: {
                            notEmpty: {
                                message: "Phone Number is required"
                            }
                        }
                    },
                    email: {
                        validators: {
                            regexp: {
                                regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                message: "The value is not a valid email address"
                            },
                            notEmpty: {
                                message: "Email address is required"
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "The password is required"
                            },
                            callback: {
                                message: "Please enter valid password",
                                callback: function(e) {
                                    if (e.value.length > 0) return s()
                                }
                            }
                        }
                    },
                    toc: {
                        validators: {
                            notEmpty: {
                                message: "You must accept the terms and conditions"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger({
                        event: {
                            password: !1
                        }
                    }),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }), t.addEventListener("click", (function(s) {
                s.preventDefault(), a.revalidateField("password"), a.validate().then((function(a) {
                    "Valid" == a ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
                        t.removeAttribute("data-kt-indicator"), t.disabled = !1, $.ajax({
                        type: 'POST',
                        url: "register",
                        data: {"name" : e.querySelector('[name="name"]').value,"sex" : e.querySelector('[name="sex"]').value, "phone" : e.querySelector('[name="phone"]').value, "email" : e.querySelector('[name="email"]').value,"password" : e.querySelector('[name="password"]').value},
                        dataType: "json",
                        success: function(data) {
                            console.log(data);
                           // $('#sectionID').html(data);
                            //var res = JSON.parse(data);
                           var res = data;
                           console.log(res);
                           if(res.return){
                            Swal.fire({
                            text: "Your Account Created Successfully!",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then((function(t) {
                            if (t.isConfirmed) {
                                e.querySelector('[name="email"]').value = "", e.querySelector('[name="password"]').value = "";
                                var i = 'signin/index';
                                i && (location.href = jsbaseurl+i)
                            }
                        }))
                        }else{
                            Swal.fire({
                        text: res.error,
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                        }
                        }
                        })
                    }), 2e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })), e.querySelector('input[name="password"]').addEventListener("input", (function() {
                this.value.length > 0 && a.updateFieldStatus("password", "NotValidated")
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTSignupGeneral.init()
}));