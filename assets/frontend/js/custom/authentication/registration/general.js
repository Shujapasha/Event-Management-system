"use strict";
var KTRegistrationGeneral = function() {
    var e, t, a, r, s = function() {
       // return 100 === r.getScore()
    };
    return {
        init: function() {
            e = document.querySelector("#kt_reg_form"), t = document.querySelector("#kt_reg_submit"),   a = FormValidation.formValidation(e, {
                fields: {

                    regtypeID: {
                        validators: {
                            notEmpty: {
                                message: "Registration Type is required"
                            }
                        }
                    },
                    abstract_title: {
                        validators: {
                            notEmpty: {
                                message: "Abstract Title is required"
                            }
                        }
                    },
                    title_name: {
                        validators: {
                            notEmpty: {
                                message: "Title is required"
                            }
                        }
                    },
                    first_name: {
                        validators: {
                            notEmpty: {
                                message: "First Name is required"
                            }
                        }
                    },
                    last_name: {
                        validators: {
                            notEmpty: {
                                message: "Last Name is required"
                            }
                            }
                        },
                    
                    email_address: {
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
                    phone_number: {
                        validators: {
                            notEmpty: {
                                message: "Phone Number is required"
                            }
                        }
                    },
                    nationality: {
                        validators: {
                            notEmpty: {
                                message: "Nationality is required"
                            }
                        }
                    },
                    categoryID: {
                        validators: {
                            notEmpty: {
                                message: "Category is required"
                            }
                        }
                    },
                    organization: {
                        validators: {
                            notEmpty: {
                                message: "Institute/organization is required"
                            }
                        }
                    },
                    mailing_address: {
                        validators: {
                            notEmpty: {
                                message: "Mailing Address is required"
                            }
                        }
                    },
                    message: {
                        validators: {
                            notEmpty: {
                                message: "Message is required"
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
                    
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }), t.addEventListener("click", (function(s) {
                s.preventDefault(), a.validate().then((function(a) {
                    "Valid" == a ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
                        t.removeAttribute("data-kt-indicator"), t.disabled = !1,
                        $.ajax({
                        type: 'POST', 
                        url: "register",
                        data: {"regtypeID" : e.querySelector('[name="regtypeID"]').value,"amount_type" : e.querySelector('[name="amount_type"]').value, "amount" : e.querySelector('[name="amount"]').value, "abstract_title" : e.querySelector('[name="abstract_title"]').value, "title_name" : e.querySelector('[name="title_name"]').value, "first_name" : e.querySelector('[name="first_name"]').value,  "last_name" : e.querySelector('[name="last_name"]').value, "email_address" : e.querySelector('[name="email_address"]').value, "phone_number" : e.querySelector('[name="phone_number"]').value, "nationality" : e.querySelector('[name="nationality"]').value, "categoryID" : e.querySelector('[name="categoryID"]').value, "organization" : e.querySelector('[name="organization"]').value, "mailing_address" : e.querySelector('[name="mailing_address"]').value, "message" : e.querySelector('[name="message"]').value},
                        dataType: "json",
                        success: function(data) {
                            console.log(data);
                           // $('#sectionID').html(data);
                           var res = data;
                           console.log(res);
                           if(res.return){
                            Swal.fire({
                            text: "Your Form Submitted Successfully!",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then((function(t) {
                            if (t.isConfirmed) {
                                //e.querySelector('[name="email"]').value = "", e.querySelector('[name="password"]').value = "";
                                var i = 'conference/payment/'+ res.paymentid;
                                i && (location.href = jsbaseurl+i)
                            }
                        }))
                        }else{
                            Swal.fire({
                        text: "Sorry, Invalid details, please try again.",
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
            })) 
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTRegistrationGeneral.init()
}));

