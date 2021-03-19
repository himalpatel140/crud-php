<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</head>
<body>

    <button id="request">GET</button>

    <br><hr>
    <h2>Update</h2>
    <input type="text" placeholder="Old key" id="key" >
    <input type="text" placeholder="New key" id="value">
    <button id="send_updates">Update</button>
    <br><hr>
<h2>Delete</h2>
<input type="text" id="user" placeholder="enter user to delete">
<button id="delete_user">Delete</button>
<br><hr>
<h2>Create</h2>
<input type="text" id="data" placeholder="enter user to Add">
<button id="create_user">Add</button>
</body>
</html>