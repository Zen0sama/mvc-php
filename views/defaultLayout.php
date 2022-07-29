<?php require_once "./core/config.php"; ?>
<?php require_once "./untils/toastify.php"; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/public/styles/3.1.4.css"></script>
    <title><?php echo $data['title']; ?></title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="/public/styles/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/public/images/favicon.ico">
    <!-- JS -->
    <script src="/public/js/main.js"> </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>

<body>
    <?php if (isset($data["success"])) show_toast($data["success"], 2000, "63e071", "57bd99"); ?>
    <?php if (isset($data["error"])) show_toast($data["error"], 2000, "fa2a2a", "f092a8"); ?>
    <!-- Begin header -->
    <header class="bg-[#94618E] sticky top-0 w-full">
        <nav class="navbar max-w-screen-lg flex justify-between m-auto px-2 h-full">
            <!-- Begin logo -->
            <div class="navbar__logo flex items-center py-2">
                <a href="<?php echo $defaultUrl; ?>"><img src="<?php echo $defaultUrl; ?>/public/images/logo.png" alt="VPS WIBU247" class="w-[30px] md:w-[40px] h-[30px] md:h-[40px] cursor-pointer border rounded-full max-w-none animate-spin duration-300"></a>
                <span class="title-logo font-bold text-2xl md:text-3xl text-yellow-500 ml-2">VPS247</span>
            </div>
            <!-- End logo -->
            <!-- Begin menu desktop-->
            <div class="navbar__menu hidden md:block">
                <ul class="menu flex items-center h-full gap-x-8 text-white uppercase font-medium text-[20px]">
                    <a href="<?php echo $defaultUrl; ?>/vps">
                        <li class="menu__item leading-loose">VPS</li>
                    </a>
                    <a href="">
                        <li class="menu__item leading-loose">Nạp Tiền</li>
                    </a>
                    <a href="">
                        <li class="menu__item leading-loose">Blog</li>
                    </a>
                    <a href="">
                        <li class="menu__item leading-loose">Liên hệ</li>
                    </a>
                </ul>
            </div>
            <!-- End menu desktop -->
            <!-- Begin auth/User -->
            <div class="navbar__auth flex items-center">
                <span class="material-icons mr-2 px-1 md:px-2 py-1 md:py-2 border-2 rounded hover:cursor-pointer">dark_mode</span>
                <div class="dropdown">
                    <?php show_user() ?>
                    <?php if (is_login()) { ?>
                        <ul id="menuUser" class="dropdown__content font-semibold">
                            <li><span class="material-icons text-black">rocket</span><?php echo format_money($data["user"]["money"]); ?></li>
                            <a href="">
                                <li><span class="material-icons text-blue-500">account_circle</span>Thông tin</li>
                            </a>
                            <?php if($data["user"]["role"] == 3):?>
                            <a href="<?php echo $defaultUrl; ?>/dashboard">
                                <li><span class="material-icons text-cyan-500">dashboard</span>Dashboard</li>
                            </a>
                            <?php endif; ?>
                            <a href="">
                                <li><span class="material-icons text-green-500">payments</span>Lịch sử nạp tiền</li>
                            </a>
                            <a href="">
                                <li><span class="material-icons text-yellow-500">history</span>Lịch sử thuê vps</li>
                            </a>
                            <a href="<?php echo $defaultUrl; ?>/auth/logout">
                                <li><span class="material-icons text-red-500">logout</span>Đăng xuất</li>
                            </a>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <!-- End auth/user -->
        </nav>
    </header>
    <!-- End header -->
    <!-- Begin article -->
    <article class="bg-[#f9eee7] grow">
        <?php require_once "./views/pages/" . $data["page"] . ".php" ?>
    </article>
    <!-- End article -->
    <!-- Begin Footer -->
    <?php require_once "./views/blocks/footer.php" ?>
    <!-- End Footer -->
</body>

</html>
<?php ob_end_flush(); ?>