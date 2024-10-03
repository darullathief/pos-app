<head>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body class="bg-color">
    <div class="sign-in-card">
        <form>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form1Example13">Username</label>
                <input type="text" id="form1Example13" class="form-control form-control-lg" />
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form1Example23">Password</label>
                <input type="password" id="form1Example23" class="form-control form-control-lg" />
            </div>
            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                class="btn-login btn btn-lg">Sign in</button>
        </form>
    </div>
</body>