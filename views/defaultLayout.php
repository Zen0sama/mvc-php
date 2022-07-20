<?php require_once "./core/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/public/styles/3.1.4.css"></script>
    <title>Title Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="/public/styles/main.css" />
    <link rel="icon" href="/public/images/favicon.ico">
</head>

<body>
    <header class="bg-[#94618E]">
        <nav class="navbar max-w-screen-lg flex justify-between m-auto">
            <div class="navbar__logo flex items-center py-4">
                <a href="<?php echo $defaultUrl; ?>"><img src="<?php echo $defaultUrl; ?>/public/images/logo.png" alt="VPS WIBU247" class="w-[50px] h-[50px] cursor-pointer border rounded-full max-w-none animate-spin duration-300"></a>
                <span class="title-logo font-bold text-3xl text-yellow-500 ml-2">VPS247</span>
            </div>
            <div class="navbar__menu">
                <ul class="menu flex items-center h-full gap-x-8 text-white font-semibold text-[20px]">
                    <a href="">
                        <li class="menu__item leading-loose">Menu 1</li>
                    </a>
                    <a href="">
                        <li class="menu__item leading-loose">Menu 2</li>
                    </a>
                    <a href="">
                        <li class="menu__item leading-loose">Menu 3</li>
                    </a>
                    <a href="">
                        <li class="menu__item leading-loose">Menu 4</li>
                    </a>
                </ul>
            </div>
            <div class="navbar__auth flex items-center">
                <span class="material-icons mr-2 px-2 py-2 border-2 hover:cursor-pointer">dark_mode</span>
                <?php displayUser() ?>
            </div>
        </nav>
    </header>
    <main>
        <div id="content">
            <?php require_once "./views/pages/" . $data["page"] . ".php" ?>
        </div>
    </main>
    <footer></footer>
</body>

</html>