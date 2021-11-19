<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css" >
    <title>Segic chat</title>
</head>
<body>
    <div class="app">
        <header>
            <h1>Segic CHAT </h1>
            <input type="text" name="username" id="username" placeholder="super nickname" > 
        </header>

        <div id="messages"></div>
        <form id="message_form" >
            
            <input type="text" name="message" id="message_input" placeholder="enter a message" >
            <button type="submit" id="message_send">Send</button>
        </form>
    </div>



    <script src="./js/app.js"></script>
    
</body>
</html>