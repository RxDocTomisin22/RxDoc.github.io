<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RXDoc Login</title>
    <link rel="stylesheet" href="Dash.css">
</head>
<body>
    <header text>
    <div id="header">
        <h1><span class="RXlit">RX</span>Doc Login</h1>
        <p id="time"></p>
        <script>
        function updateTime() {
            var now = new Date();
            var timeString = now.toLocaleTimeString();
            document.getElementById("time").textContent = timeString;
        }
        setInterval(updateTime, 1000);
        updateTime();
    </script>
    </div>
    </header>
    <div class="container">
        <a href="medicineinfo.html" class="square">
            <img src="https://i.pinimg.com/originals/f4/47/68/f447682369fb3bfb813a1c004fb27edd.png" alt="Medicine Info">
            <p>Medicine Information</p>
        </a>

        <a href="symptomtracker.html" class="square">
            <img src="https://charlottefrates.github.io/symptom_checker/images/fast.png" alt="Symptom Tracker">
            <p>Symptom Tracker</p>
        </a>

        <a href="#" class="square">
            <img src="https://cdn-icons-png.freepik.com/512/7225/7225837.png" alt="Reminders">
            <p>Reminders</p>
        </a>

        <a href="messages.html" class="square">
            <img src="https://th.bing.com/th/id/OIP.u0cLh-z126j4OZSEBBzoyAHaEc?rs=1&pid=ImgDetMain" alt="Messages">
            <p>Messages</p>
        </a>

        <a href="settings.html" class="square">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Windows_Settings_icon.svg" alt="Settings">
            <p>Settings</p>
        </a>
    </div>


</body>
</html>
