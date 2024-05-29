<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.3.2 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    <style>
        .error {color: red}
    </style>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <?php
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = $email = $gender = $comment = $website = "";
        $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["name"])){
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
            }

            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
            }

            if(empty($_POST["gender"])){
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }

            if(empty($_POST["website"])){
                $websiteErr = "Website is required";
            } else {
                $website = test_input($_POST["website"]);
            }

            if(empty($_POST["comment"])){
                $commentErr = "Comment is required";
            } else {
                $comment = test_input($_POST["comment"]);
            }
        }
        ?>
        <main>
            <h2>Your Input:</h2>
            Name: <?php echo $name; ?><br>
            Email: <?php echo $email; ?><br>
            Website: <?php echo $website; ?><br>
            Comment: <?php echo $comment; ?><br>
            Gender: <?php echo $gender; ?><br>
        </main>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="name"
                    aria-describedby="nameHelp"
                    placeholder=""
                />
                <span class="error">* <?php echo $nameErr;?></span>
                <small id="nameHelp" class="form-text text-muted">Enter your name.</small>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    aria-describedby="emailHelp"
                    placeholder="abc@mail.com"
                />
                <span class="error">* <?php echo $emailErr;?></span>
                <small id="emailHelp" class="form-text text-muted">Enter your email.</small>
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input
                    type="text"
                    class="form-control"
                    name="website"
                    id="website"
                    aria-describedby="websiteHelp"
                    placeholder=""
                />
                <span class="error">* <?php echo $websiteErr;?></span>
                <small id="websiteHelp" class="form-text text-muted">Enter your website.</small>
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
                <span class="error">* <?php echo $commentErr;?></span>
            </div>
            
            <label for="gender" class="me-5">Gender</label>
            <div class="form-check form-check-inline">
                <input
                    class="form-check-input"
                    type="radio"
                    name="gender"
                    id="female"
                    value="female"
                />
                <label class="form-check-label" for="female">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="form-check-input"
                    type="radio"
                    name="gender"
                    id="male"
                    value="male"
                />
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    class="form-check-input"
                    type="radio"
                    name="gender"
                    id="other"
                    value="other"
                />
                <label class="form-check-label" for="other">Other</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
