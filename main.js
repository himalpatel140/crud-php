$('document').ready(function() {

    $('#request').click(function() {

        $.ajax({
            url: "http://localhost/crud/action.php",
            type: "POST",
            data: {
                type: "read",
                is_api: true
            },
            success: function(result) {
                console.log(result);
            }
        });
    });

    $('#send_updates').click(function() {
        $.ajax({
            url: "http://localhost/crud/action.php",
            type: "POST",
            data: {
                type: "update",
                is_api: true,
                key: $('#key').val(),
                new_value: $('#value').val(),
            },
            success: function(result) {
                console.log(result);
            }
        });
    });
    $('#delete_user').click(function() {
        $.ajax({
            url: "http://localhost/crud/action.php",
            type: "POST",
            data: {
                type: "delete",
                is_api: true,
                key: $('#user').val(),
            },
            success: function(result) {
                console.log(result);
            }
        });
    });
    $('#create_user').click(function() {
        $.ajax({
            url: "http://localhost/crud/action.php",
            type: "POST",
            data: {
                type: "create",
                is_api: true,
                data: $('#data').val(),
            },
            success: function(result) {
                console.log(result);
            }
        });
    });
});