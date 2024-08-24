<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achmad Whildan</title>
    <link rel="icon" type="img/png" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    html{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    background-color: #f4f4f4;
}

.logo{
    display: flex;
    align-items: center;
}

nav{
    background-color: white;
    display: flex;
    justify-content: space-between;
    margin-top: 5px;
    padding: 1rem 4rem;
    position: fixed;
    border-radius: 12px;
    width: 100%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

nav ul{
    display: flex;
    align-items: center;
    gap: 3rem;
    list-style: none;
}

nav ul li a{
    font-size: 20px;
    text-decoration: none;
    font-family: 'Segoe UI', sans-serif;
    color: #191919;
    font-weight: 600;
    padding: 8px 0;
    transition: all;
    transition-duration: 300ms;
    border-bottom: 2px solid rgba(116, 254, 106, 0);
}

nav ul li a:hover{
    border-bottom: 2px solid rgb(116, 254, 106);
    color: rgb(116, 254, 106);
}

@media(max-width:991px){
    nav{
        padding: 1rem 3%;
    }
}

</style>

<body>

    <nav>
        <div class="logo"><img src="assets/img/logo.png" alt="" width="50px"></div>
        <ul>
            <li><a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" fill="currentColor"
                        class="bi bi-house" viewBox="0 0 16 16">
                        <path
                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                    </svg> Home</a></li>
            <li><a href="/about"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" fill="currentColor"
                        class="bi bi-file-person" viewBox="0 0 16 16">
                        <path
                            d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg> About</a></li>
            <li><a href="/contact"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                        <path
                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
                    </svg> Contact</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>


</body>

</html>