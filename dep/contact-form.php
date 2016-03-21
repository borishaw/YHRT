
<form id="ajax-form">
    <label for="name">Your Name: </label>
    <input name="Name" id="name" type="text" />
    <label for="email">Your Email: </label>
    <input name="Email" id="email" type="text" />
    <label for="message">Your Message: </label>
    <textarea name="Message" id="message"></textarea>
    <div class="g-recaptcha" data-sitekey="6LeHYhsTAAAAAFFVJitLN6bIi8V8kpHdEpkuDl3B"></div>
    <div id="button-con">
        <button type="submit">Submit</button>
    </div>
    <div id="ajax-form-message"><p></p></div>
</form>
<script>
    $('#ajax-form').validate({
        debug: true,

        rules: {
            Name: {
                required: true
            },
            Email: {
                required: true,
                email: true
            },
            Message: {
                required: true
            }
        },

        submitHandler: function (form) {
            $('#ajax-form-message p').html('Sending');
            var formData = new FormData(form);
            $.ajax({
                url: 'dep/contact-form-handler.php',
                data: formData,
                async: true,
                type: 'POST',
                success: function (data) {
                    console.log(data);
                    data = $.parseJSON(data);
                    $('#ajax-form-message p').html(data.message);
                    if (data.success == 1) {
                        $('#ajax-form').trigger('reset');
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            })
        }
    });
</script>