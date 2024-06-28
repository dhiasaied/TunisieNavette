<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading</title>
    <link rel="stylesheet" href="Loading.css">
</head>
<body>
    <div class="timer" id="timer">0</div>
    <div class="airplaneAnimation">
        <div class="plane">
        <div class="main"></div>
        <div class="wingOne"></div>
        <div class="wingTwo"></div>
        <div class="pollution"></div>
        </div>
        <div class="clouds">
          <div class="cloudOne"></div>
          <div class="cloudTwo"></div>
          <div class="cloudThree"></div>
        </div>
      </div>
      <script>
        function startTimer() {
            let counter = 0;
            const timerElement = document.getElementById('timer');
            const intervalId = setInterval(() => {
                counter++;
                if (counter > 100) {
                    clearInterval(intervalId);
                    window.location.href = 'index.php';
                } else {
                    timerElement.textContent = counter;
                }
            }, 70); 
        }
        window.onload = startTimer;
    </script>
</body>
</html>