<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Вход</title>
        <meta name="description" content="Responsive Tailwind CSS Template" />
        <meta name="keywords" content="Onepage, creative, modern, Tailwind CSS, multipurpose, clean" />
        <meta name="author" content="Shreethemes" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="version" content="1.5.0" />
        <!-- favicon -->
        <link href="assets/images/favicon.ico" rel="shortcut icon">

        <!-- Css -->
        <!-- Main Css -->
        <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/icons.css" />
        <link rel="stylesheet" href="assets/css/tailwind.css" />

    </head>
    
    <body class="font-rubik text-base text-black dark:text-white dark:bg-slate-900">
    <form action="login.php" method="POST">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="logo">
                    <img src="assets/images/logo-icon-64.png" class="d-block mx-auto animate-[spin_10s_linear_infinite]" alt="">
                </div>
                <div class="justify-content-center">
                    <div class="text-center">
                        <h4 class="mb-0 mt-2 text-lg font-semibold">Upwind</h4>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->
        
        <!-- Hero Start -->
        <section class="position-relative" style="background: url('assets/images/bg/auth.jpg') center;">
            <div class="absolute inset-0 bg-black opacity-90"></div>
            <div class="container-fluid relative">
                <div class="grid grid-cols-1">
                    <div class="lg:col-span-4">
                        <div class="flex flex-col min-h-screen md:px-12 py-12 px-3">
                            <!-- Start Logo -->
                            <div class="text-center mx-auto">
                                <a href="index.html"><img src="assets/images/logo-light.png" alt=""></a>
                            </div>
                            <!-- End Logo -->

                            <!-- Start Content -->
                            <div class="text-center my-auto">
                                <div class="w-full max-w-sm m-auto px-6 py-8 bg-white dark:bg-black rounded-md shadow-lg shadow-slate-500 dark:shadow-slate-800">
                                    <div class="grid grid-cols-1">
                                        <h5 class="mb-8 text-xl dark:text-white font-semibold">Вход в личный аккаунт</h5>
                                        <form class="text-left">
                                            <div class="grid grid-cols-1">
                                                <div class="mb-4">
                                                    <label class="dark:text-white" for="phone">Номер телефона</label>
                                                    <input id="phone" type="phone" class="form-input mt-3" placeholder="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="dark:text-white" for="password">Пароль</label>
                                                    <input id="password" type="password" class="form-input mt-3" placeholder="">
                                                </div>
                                                <div class="flex justify-between mb-4">
                                                    <div class="form-checkbox flex items-center mb-0">
                                                        <input class="mr-2 border border-inherit w-[14px] h-[14px]" type="checkbox" value="" id="RememberMe">
                                                        <label class="text-slate-400 dark:text-slate-300" for="RememberMe">Запомнить меня</label>
                                                    </div>
                                                    <p class="text-slate-400 mb-0"><a href="reset-password.html" class="text-slate-400 dark:text-slate-300">Забыли пароль?</a></p>
                                                </div>

                                                <div class="mb-4">
                                                    <a href="" class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md w-full">Войти</a>
                                                </div>

                                                <div class="text-center">
                                                    <span class="text-slate-400 dark:text-slate-300 mr-2">У вас нет аккаунта?</span> <a href="register.php" class="text-dark dark:text-white fw-bold">Зарегистрируйтесь</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Content -->

                            <!-- Start Footer -->
                            <div class="text-center">
                            
                            </div>
                            <!-- End Footer -->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Switcher -->
        <div class="fixed top-1/4 -right-1 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>

<?php
require_once('connect.php');
if (!empty($_REQUEST['phone']) && !empty($_REQUEST['password'])){

    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `users1` WHERE phone='$phone'";
    $result = $db-> query($sql);
    if ($result-> num_rows > 0) {
        $username = $result -> fetch_assoc();
        if (password_verify($password, $username['password']))
        {
            echo "Дабро тебе человек и жизнь масло" .$username['login']."!";
        }
        else {
            echo "Тут никаго нету, пака";
        }
    }
}