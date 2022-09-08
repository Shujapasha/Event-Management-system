// Define form element
const form3 = document.getElementById('kt_docs_formvalidation_cabstract');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form3,
    {
        fields: {
            fullName: {
                validators: {
                    notEmpty: {
                        message: 'Full Name is required'
                    }
                }
            },
            emailaddress: {
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
            title: {
                        validators: {
                            notEmpty: {
                                message: "Abstract Title is required"
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
            message: {
                        validators: {
                            notEmpty: {
                                message: "Abstract is required"
                            }
                        }
                    },
            file: {
                        validators: {
                            notEmpty: {
                                message: "Abstract file is required"
                            }
                        }
                    },
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: '.fv-row',
                eleInvalidClass: '',
                eleValidClass: ''
            })
        }
    }
);

// Submit button handler
const submitButtonss = document.getElementById('kt_docs_formvalidation_submit_cabstract');
submitButtonss.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                submitButtonss.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                submitButtonss.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButtonss.removeAttribute('data-kt-indicator');

                    // Enable button
                    submitButtonss.disabled = false;
                    //form_data = new FormData(document.getElementById("kt_payment_form"));
                    //form_data = '';
                     
                var form_data = new FormData(document.getElementById("kt_docs_formvalidation_cabstract"));
                        $.ajax({
                      
                         
                     type:"post",
                     data:form_data,  
                      
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                     dataType: "json",
                        success: function(data) {
                            console.log(data);
                           // $('#sectionID').html(data);
                           var res = data;
                           console.log(res);
                            
                           if(res.return){
                            Swal.fire({
                            text: "Your Abstract Submitted Successfully!",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then((function(t) {
                            if (t.isConfirmed) {
                                //e.querySelector('[name="email"]').value = "", e.querySelector('[name="password"]').value = "";
                                var i = 'dashboard/user';
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
                     

                    //form.submit(); // Submit form
                }, 2000);
            }
        });
    }
     
});