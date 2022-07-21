<?php require_once "./core/config.php"; ?>
<?php require_once "./untils/toastify.php"; ?>
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
    <?php if (isset($data["success"])) {
        showToast($data["success"], 2000, "63e071", "57bd99");
    } ?>
    <?php if (isset($data["error"])) showToast($data["error"], 2000, "fa2a2a", "f092a8"); ?>
    <!-- header -->
    <header class="bg-[#94618E] sticky top-0 w-full">

        <nav class="navbar max-w-screen-lg flex justify-between m-auto px-2 h-full">
            <!-- Logo -->
            <div class="navbar__logo flex items-center py-2">
                <a href="<?php echo $defaultUrl; ?>"><img src="<?php echo $defaultUrl; ?>/public/images/logo.png" alt="VPS WIBU247" class="w-[30px] md:w-[40px] h-[30px] md:h-[40px] cursor-pointer border rounded-full max-w-none animate-spin duration-300"></a>
                <span class="title-logo font-bold text-2xl md:text-3xl text-yellow-500 ml-2">VPS247</span>
            </div>
            <!-- Menu Desktop-->
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
            <!-- Auth/User -->
            <div class="navbar__auth flex items-center">
                <span class="material-icons mr-2 px-1 md:px-2 py-1 md:py-2 border-2 rounded hover:cursor-pointer">dark_mode</span>
                <div class="dropdown">
                    <?php displayUser() ?>
                    <?php if (is_login()) { ?>
                        <ul id="menuUser" class="dropdown__content font-semibold">
                            <a href="">
                                <li><span class="material-icons text-blue-500">account_circle</span>Thông tin</li>
                            </a>
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
        </nav>
    </header>
    <!-- article -->
    <article class="bg-[#f9eee7] grow">
        <?php require_once "./views/pages/" . $data["page"] . ".php" ?>
    </article>
    <!--  -->
    <footer class="bg-[#94618E]">
        <div class="max-w-screen-lg m-auto">
            <!-- Begin footer -->
            <section class="px-2 py-4 border-b">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="flex gap-x-2 py-2 justify-center">
                        <div class="">
                            <span class="material-icons text-6xl text-green-500">
                                task_alt
                            </span>
                        </div>
                        <div class="flex flex-col text-white">
                            <h1 class="font-bold text-2xl">UY TÍN</h1>
                            <p>Làm việc uy tín</p>
                        </div>
                    </div>
                    <div class="flex gap-x-2 py-2 justify-center">
                        <div class="">
                            <span class="material-icons text-6xl text-yellow-500">
                                electric_bolt
                            </span>
                        </div>
                        <div class="flex flex-col text-white">
                            <h1 class="font-bold text-2xl">NHANH CHÓNG</h1>
                            <p>1p là quá lâu</p>
                        </div>
                    </div>
                    <div class="flex gap-x-2 py-2 justify-center">
                        <div class="">
                            <span class="material-icons text-6xl text-red-500">
                                hourglass_bottom
                            </span>
                        </div>
                        <div class="flex flex-col text-white">
                            <h1 class="font-bold text-2xl">ONLINE 24/7</h1>
                            <p>Hổ trợ 24/7</p>
                        </div>
                    </div>
                    <div class="flex gap-x-2 py-2 justify-center">
                        <div class="">
                            <span class="material-icons text-6xl text-blue-500">
                                shopping_cart
                            </span>
                        </div>
                        <div class="flex flex-col text-white">
                            <h1 class="font-bold text-2xl">AUTO SHOPING</h1>
                            <p>Mua sắm tiện lợi</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Midle footer -->
            <section class="px-2 py-4 border-b">
                <div class="flex flex-wrap justify-between">
                    <div class="text-white text-xl font-medium w-[50%] md:w-auto">
                        <ul>
                            <a href="<?php echo $defaultUrl; ?>/">
                                <li>Trang Chủ</li>
                            </a>
                            <a href="<?php echo $defaultUrl; ?>/vps">
                                <li>VPS</li>
                            </a>
                            <a href="<?php echo $defaultUrl; ?>/money">
                                <li>Nạp Tiền</li>
                            </a>
                            <a href="<?php echo $defaultUrl; ?>/blog">
                                <li>Blog</li>
                            </a>
                        </ul>
                    </div>
                    <div class="text-white text-xl font-medium w-[50%] md:w-auto">
                        <ul>
                            <li><i class="fa-brands fa-facebook-square not-italic text-blue-500 bg-white border-2 rounded"></i> Facebook</li>
                            <li><i class="fa-brands fa-youtube-square not-italic text-red-500 bg-white border-2 rounded"></i> Youtube</li>
                            <li><i class="fa-brands fa-whatsapp not-italic text-sky-500 bg-white border-2 rounded"></i> Zalo</li>
                            <li><i class="fa-brands fa-telegram not-italic text-cyan-500 bg-white border-2 rounded"></i> Telegram</li>
                        </ul>
                    </div>
                    <div class="text-gray-800 text-xl font-medium w-full md:w-[33.333%] mt-2 md:mt-0 text-center">
                        <p>VPS.WIBU247.NET chuyên cung cấp vps trial các loại, đủ mọi location, nạp tiền tự động, hổ trợ 24/7</p>
                    </div>
                </div>
            </section>
            <!-- End footer -->
            <section class="px-2 py-4">
                <div class="flex">
                    <div class="flex items-center border-r pr-3">
                        <img src="<?php echo $defaultUrl; ?>/public/images/logo.png" alt="VPS WIBU247" class="w-[15px] md:w-[25px] h-[15px] md:h-[25px] cursor-pointer border rounded-full max-w-none">
                        <span class="title-logo font-bold text-1xl md:text-2xl text-yellow-500 ml-2">VPS247</span>
                    </div>
                    <div class="flex flex-col md:flex-row items-center pl-3 justify-between w-full  text-center text-white">
                        <p>Copyright © 2022 Wibu247. All Rights Reserved.</p>
                        <p>Design by WibuSama</p>
                    </div>
                </div>
            </section>
        </div>
    </footer>
</body>

</html>