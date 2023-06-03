
$(function () {
    $('#addSurveyResponse').validate({
        rules: {
            lname: {
                required: true
            },
            fname: {
                required: true
            },
            mname: {
                required: true
            },
            gender: {
                required: true
            },
            stem_track: {
                required: true
            },	   
            year_grad: {
                required: true
            },     
        },
        messages: {
            lname: {
                required: "Please enter a Last Name"
            },
            fname: {
                required: "Please enter a First Name"
            },
            question_name: {
                required: "Please enter a Middle Initial"
            },
            gender: {
                required: "Please select a Gender"
            },
            stem_track: {
                required: "Please enter a STEM Track"
            },
            year_grad: {
                required: "Please enter a Year Graduated"
            }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.col-md-12').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
    });
});
