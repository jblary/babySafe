function sendMessage(message) {
    $.ajax({
        method: 'POST',
        url: '/write.php',
        dataType: 'json',
        data: {message:JSON.stringify(message)},
        success: function(e) {
        }
    });
}
