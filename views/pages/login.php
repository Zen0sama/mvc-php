<?php
if (is_login()) {
    load_url('/');
}
?>
<div class="page__login max-w-screen-lg m-auto w-full flex">
    <section class="w-full">
        <div class="px-6 h-full text-gray-800">
            <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
                <div class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                    <img src="https://e-cdn-images.dzcdn.net/images/cover/d16d21717d524d1778cf7441b64b1cff/264x264-000000-80-0-0.jpg" class="w-full" alt="Sample image" />
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    <form method="POST">
                        <div class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                            <p class="text-center font-semibold text-2xl mx-4 mb-0">Đăng Nhập</p>
                        </div>
                        <div class="mb-6">
                            <input name="username" type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Tên đăng nhập" />
                        </div>
                        <div class="mb-6">
                            <input name="password" type="password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Mật khẩu" />
                        </div>
                        <div class="flex justify-between items-center mb-6">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" />
                                <label class="form-check-label inline-block text-gray-800" for="exampleCheck2">Remember me</label>
                            </div>
                            <a href="" class="text-gray-800">Quên mật khẩu?</a>
                        </div>

                        <div class="text-center lg:text-left">
                            <button type="submit" name="login" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                Đăng Nhập
                            </button>
                            <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                                Không có tài khoản?
                                <a href="<?php echo $defaultUrl ?>/auth/register" class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out">Đăng Kí</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>