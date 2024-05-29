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
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            Name: <?php echo isset($_GET["name"]) ? htmlspecialchars($_GET["name"]) : 'Not provided'; ?><br>
            Password: <?php echo isset($_GET["password"]) ? htmlspecialchars($_GET["password"]) : 'Not provided'; ?><br>
            City of Employment: <?php echo isset($_GET["coe"]) ? htmlspecialchars($_GET["coe"]) : 'Not provided'; ?><br>
            Web Server: <?php echo isset($_GET["ws"]) ? htmlspecialchars($_GET["ws"]) : 'Not provided'; ?><br>
            Please specify your role: <?php echo isset($_GET["role"]) ? htmlspecialchars($_GET["role"]) : 'Not provided'; ?><br>
            Single Sign-on to the following: 
            <?php
                if (isset($_GET["Sign-on"]) && is_array($_GET["Sign-on"])) {
                    $selectedOptions = $_GET["Sign-on"];
                    foreach ($selectedOptions as $option) {
                        echo "<br>" . htmlspecialchars($option);
                    }
                } else {
                    echo "<br>No options selected.";
                }
            ?>
        </main>
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
