// Define form element
const form = document.getElementById('kt_docs_formvalidation_image_input');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            'avatar': {
                validators: {
                    notEmpty: {
                        message: 'Please select an image'
                    },
                    file: {
                        extension: 'jpg,jpeg,png',
                        type: 'image/jpeg,image/png',
                        message: 'The selected file is not valid'
                    },
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
const submitButton = document.getElementById('kt_docs_formvalidation_image_input_submit');
submitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                submitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                submitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    submitButton.disabled = false;
                    //form_data = new FormData(document.getElementById("kt_payment_form"));
                    //form_data = '';
                     
                var form_data = new FormData(document.getElementById("kt_docs_formvalidation_image_input"));
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
                            text: "Your Payment Voucher Submitted Successfully!",
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