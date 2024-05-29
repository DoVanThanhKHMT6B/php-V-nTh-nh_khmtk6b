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

        <!-- Bootstrap CSS v5.2.1 -->
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
            <form action="login.php" method="get">
             <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
             </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input
                    type="password"
                    class="form-control"
                    name="password"
                    id=""
                    placeholder=""
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">City of Employment</label>
                <input
                    type="text"
                    class="form-control"
                    name="coe"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">web Sever</label>
                <select
                    class="form-select form-select-lg"
                    name="ws"
                    id=""
                >
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>
        <div class="form-check">
<label>Please specify your role:</label>
<div class="form-check">
    <input class="form-check-input" type="radio" name="role" id="admin">
    <label class="form-check-label" for="admin">Admin</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="role" id="engineer">
    <label class="form-check-label" for="engineer">Engineer</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="role" id="manager">
    <label class="form-check-label" for="manager">Manager</label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" name="role" id="guest">
    <label class="form-check-label" for="guest">Guest</label>
</div>
<label>Sigle Sign-on to the following:</label>
<div class="form-check">

    <input
        class="form-check-input"
        type="checkbox"
        value="mail"
        name="Sign-on[]"
        id=""
        checked
    />
    <label class="form-check-label" for=""> Checked checkbox </label>
</div>
<div class="form-check">

    <input
        class="form-check-input"
        type="checkbox"
        value="email"
        name="Sign-on[]"
        id=""
        checked
    />
    <label class="form-check-label" for=""> Checked book </label>
</div>
<div class="form-check">

    <input
        class="form-check-input"
        type="checkbox"
        value="pay"
        name="Sign-on[]"
        id=""
        checked
    />
    <label class="form-check-label" for=""> Checked box </label>
</div>
<button
    type="submit"
    class="btn btn-primary"
>
    Login
</button>
<button
    type="submit"
    class="btn btn-primary"
>
    Reset
</button>
 </div>
 
</form>

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
