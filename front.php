<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="front.js"></script>
</head>
<body>

<script>
    function onMessage(message) {
        $('body').text(message.message);
    }
</script>
</body>
</html>
