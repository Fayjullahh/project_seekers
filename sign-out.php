<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">
    <head>
        <meta charset="utf-8" />
        <title>index-1 | Jobcy - Admin & Dashboard Template</title>
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta
          content="Tailwind Multipurpose Admin & Dashboard Template"
          name="description"
        />
        <meta content="" name="Themesbrand" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />



        <link rel="stylesheet" href="assets/css/icons.css" />
        <link rel="stylesheet" href="assets/css/tailwind.css" />




    </head>
    <?php
    session_start();
    session_destroy();
    header("Location: index.php");
?>

    
    <body class="bg-white dark:bg-neutral-800">


                 <div class="fixed z-40 flex flex-col gap-3 ltr:left-0 rtl:right-0 top-[330px]">
                     <!-- light-dark mode button -->
                     <a href="javascript: void(0);" id="ltr-rtl" class="z-40 px-3 py-3 font-medium text-white transition-all duration-300 ease-linear group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 text-14 hover:bg-violet-700 ltr:rounded-r rtl:rounded-l" onclick="changeMode(event)">
                                 <span class="ltr:hidden">LTR</span>
                                 <span  class="rtl:hidden">RTL</span>
                             </a>  
           
                 </div> 
        
                 <div class="fixed transition-all duration-300 ease-linear top-[27.5rem] switcher" id="style-switcher">
                     <div class="w-48 p-4 bg-white shadow-md" >
                         <div>
                             <h3 class="mb-2 font-semibold text-gray-900 text-16">Select your color</h3>
                             <ul class="flex gap-3 ">
                                 <li>
                                     <a class="h-10 w-10 bg-[#815DF2] block rounded-full" data-color="violet" href="javascript: void(0);"></a>
                                 </li>
                                 <li>
                                     <a class="h-10 w-10 bg-[#69cdf1] block rounded-full" data-color="sky" href="javascript: void(0);"></a>
                                 </li>
                                 <li>
                                     <a class="h-10 w-10 bg-[#dd4948] block rounded-full" data-color="red" href="javascript: void(0);"></a>
                                 </li>
                             </ul>
                             <ul class="flex gap-3 mt-4">
                                 <li>
                                     <a class="h-10 w-10 bg-[#38c284] block rounded-full" data-color="green" href="javascript: void(0);"></a>
                                 </li>
                                  <li>
                                     <a class="h-10 w-10 bg-[#e35490] block rounded-full" data-color="pink"  href="javascript: void(0);"></a>
                                 </li>
                                 <li>
                                     <a class="h-10 w-10 bg-[#5276f4] block rounded-full" data-color="blue" href="javascript: void(0);"></a>
                                 </li>
                             </ul>
                         </div>

                         <div class="mt-5">
                             <h3 class="mb-2 font-semibold text-gray-900 text-16">Light/dark Layout</h3>
                             <div class="flex justify-center mt-2">
                                    <!-- light-dark mode button -->
                                 <a href="javascript: void(0);" id="mode" class="z-40 px-6 py-2 font-normal text-white transition-all duration-300 ease-linear rounded text-14 bg-zinc-800" onclick="changeMode(event)">
                                     <i class="hidden text-xl uil uil-brightness dark:text-white dark:inline-block"></i>
                                     <i class="inline-block text-xl uil uil-moon dark:text-zinc-800 dark:hidden"></i>
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div> 
                 <!-- light-dark mode button -->
                 <a href="javascript: void(0);" onclick="toggleSwitcher()" class="fixed z-40 flex flex-col gap-3 px-4 py-3 font-normal text-white group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 top-96 text-14 ltr:rounded-r rtl:rounded-l">
                     <i class="text-xl mdi mdi-cog mdi-spin"></i>
                 </a> 

        <div class="main-content">
            <div class="page-content">

                <section class="flex items-center justify-center min-h-screen py-10 group-data-[theme-color=violet]:bg-violet-500/10 group-data-[theme-color=sky]:bg-sky-500/10 group-data-[theme-color=red]:bg-red-500/10 group-data-[theme-color=green]:bg-green-500/10 group-data-[theme-color=pink]:bg-pink-500/10 group-data-[theme-color=blue]:bg-blue-500/10 dark:bg-neutral-700">
                    <div class="container mx-auto">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 lg:col-span-10 lg:col-start-2">
                                <div class="flex flex-col bg-white rounded-lg dark:bg-neutral-800">
                                    <div class="grid flex-col grid-cols-12">
                                        <div class="col-span-6 ltr:rounded-l-lg rtl:rounded-r-lg">
                                            <div class="p-10">
                                                <a href="index.html">
                                                    <img src="assets/images/logo-light.png" alt="" class="hidden mx-auto dark:block">
                                                    <img src="assets/images/logo-dark.png" alt="" class="block mx-auto dark:hidden">
                                                </a>
                                                <div class="mt-5">
                                                    <img src="assets/images/auth/sign-in.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg">
                                            <div class="flex flex-col items-center justify-center h-full p-12">
                                                <div class="mb-6 text-center">
                                                    <h5 class="mb-2 text-lg text-white">You are Logged Out</h5>
                                                    <p class="text-white/80">Thank you for using Jobcy</p> 
                                                </div>
                                                <a href="sign-in.html" class="btn w-full bg-white text-gray-900 font-medium border-transparent hover:-translate-y-1.5 duration-500 ease">Sign In</a>
                                                <div class="mt-5 text-center">
                                                    <p class="text-white">Don't have an account ? <a href="sign-up.html" class="text-white underline fw-medium"> Sign Up </a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
            </div>
        </div>
       

     <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
     <script src="assets/libs/@popperjs/core/umd/popper.min.js"></script>
     <script src="assets/libs/simplebar/simplebar.min.js"></script>


    <script src="assets/js/pages/switcher.js"></script>

    <script src="assets/js/app.js"></script>
    
</body>
</html>
