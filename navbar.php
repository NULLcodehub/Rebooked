

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Rebooked</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  nav-list" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Catagories</a>
                    <a class="nav-link" href="#">Best sells</a>
                    <a class="nav-link" href="#">Used book</a>
                </div>
                <?php 
                    session_start();
                    if(isset($_SESSION["email"])){
                        
                        $email=$_SESSION["email"];
                        $name=$_SESSION["name"];
                        echo "
                        <div class='navbar-nav'>
                            <a class='nav-link' href=''>$name</a>
                            <a class='nav-link' href='logout.php'>Logout</a>
                        </div>
                        ";

                    }else{
                        echo "<div class='navbar-nav'>
                            <a class='nav-link' href='login.php'>Sign In</a>
                            <a class='nav-link' href='userreg.php'>Create your Account</a>
                        </div> ";
                    }
                
                ?>
                
            </div>
        </div>
    </nav>

    