$('.reg-btn').click(function (e) {
    e.preventDefault();

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val(),
        password_confirm = $('input[name="password_confirm"]').val();
    let formData = new FormData();

    formData.append('login', login);
    formData.append('password', password);
    formData.append('password_confirm', password_confirm);
    $.ajax({
        url: 'vendor/signup.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        data: formData,
        success (data) {
            if (data.status === true) {
                document.location.href = '/log.php';
            } else {
                if (data.type === 1) {
                    alert(data.message);
                }
                else {
                    alert(data.message);
                }
            }

        }
    });

});