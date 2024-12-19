<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="login.css">
  <title> USER | PAGE</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div>
                <form action="index.php" id="loginForm" onsubmit="validateForm(event)">
                    <div class="inputbox">
                        <input type="username" id="username" >
                        <label for="">Enter Short Name</label>
                    </div>
                    <button>Done</button><br><br>
                </form>
            </div>
        </div>
    </section>
    <script>
        function validateForm(event) {
            event.preventDefault(); 

            var username = document.getElementById("username").value;

            var errorMessages = [];

            if (username.trim() === "") {
                errorMessages.push("*Enter your name");
            }

            if (errorMessages.length > 0) {
                var errorContainer = document.createElement("div");
                errorContainer.className = "error";
                errorContainer.innerHTML = errorMessages.join("<br>");
                document.getElementById("loginForm").appendChild(errorContainer);

                setTimeout(function() {
                    errorContainer.remove();
                }, 2000);
            } else {
                alert("Welcomee " + username);
                localStorage.setItem("username", username);
                window.location.href = "index.php";
            }
        }
    </script>
</body>
</html>