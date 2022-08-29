"use strict";
var KTRegistrationGeneral = function() {
    var e, t, i;
    return {
        init: function() {
            e = document.querySelector("#kt_registration_form"), t = document.querySelector("#kt_registration_submit"), i = FormValidation.formValidation(e, {
                fields: {
                    registration_type: {
                        validators: {
                            notEmpty: {
                                message: "Registration Type is required"
                            }
                        }
                    },
                    category: {
                        validators: {
                            notEmpty: {
                                message: "Category is required"
                            }
                        }
                    },
                    institute: {
                        validators: {
                            notEmpty: {
                                message: "Institute is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }), t.addEventListener("click", (function(n) {
                n.preventDefault(), i.validate().then((function(i) {
                    "Valid" == i ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
                        t.removeAttribute("data-kt-indicator"), t.disabled = !1, Swal.fire({
                            text: "You have successfully Registered!",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then((function(t) {
                            if (t.isConfirmed) {
                                e.querySelector('[name="email"]').value = "", e.querySelector('[name="password"]').value = "";
                                var i = e.getAttribute("data-kt-redirect-url");
                                i && (location.href = i)
                            }
                        }))
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