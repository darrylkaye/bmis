<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
  <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>Officials Page</title>
</head>

<body class="bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('./img/BG.jpg');">

  <header class="flex items-center justify-center">
    <nav class="bg-gradient-to-r from-blue-700 px-2 sm:px-4 py-2.5 dark:bg-gray-900 w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
      <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="#" class="flex items-center">
          <img src="{{'./img/logo.png'}}" class="h-6 mr-3 sm:h-9" alt="Logo">
          <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white text-white">BMIS</span>
        </a>
        <div class="flex md:order-2">
          <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
          <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="./userlandingpage" class="block text-lg py-2 pl-3 pr-4 text-white rounded bg-clip-text hover:font-semibold hover:bg-gradient-to-r from-yellow-400 to-blue-600 hover:text-transparent hover:bg-gray-100 md:hover:bg-transparent md:hover:underline md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
            </li>
            <li>
              <a href="/userannouncementpage" class="block text-lg py-2 pl-3 pr-4 text-white rounded bg-clip-text hover:font-semibold hover:bg-gradient-to-r from-yellow-400 to-blue-600 hover:text-transparent hover:bg-gray-100 md:hover:bg-transparent md:hover:underline md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Announcement</a>
            </li>
            <li>
              <a href="/usernewspage" class="block text-lg py-2 pl-3 pr-4 text-white rounded bg-clip-text hover:font-semibold hover:bg-gradient-to-r from-yellow-400 to-blue-600 hover:text-transparent hover:bg-gray-100 md:hover:bg-transparent md:hover:underline md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">News</a>
            </li>
            <li>
              <a href="/userdocumentpage" class="block text-lg py-2 pl-3 pr-4 text-white rounded bg-clip-text hover:font-semibold hover:bg-gradient-to-r from-yellow-400 to-blue-600 hover:text-transparent hover:bg-gray-100 md:hover:bg-transparent md:hover:underline md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Document</a>
            </li>
            <li>
              <a href="/userofficialspage" class="block text-lg py-2 pl-3 pr-4 text-white rounded bg-clip-text hover:font-semibold hover:bg-gradient-to-r from-yellow-400 to-blue-600 hover:text-transparent hover:bg-gray-100 md:hover:bg-transparent md:hover:underline md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Official</a>
            </li>
            <li>
              <a href="/useraboutpage" class="block text-lg py-2 pl-3 pr-4 text-white rounded bg-clip-text hover:font-semibold hover:bg-gradient-to-r from-yellow-400 to-blue-600 hover:text-transparent hover:bg-gray-100 md:hover:bg-transparent md:hover:underline md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="flex justify-center items-center">
    <div class="grid grid-cols-5 gap-10 py-10">
      <div class="" data-aos="flip-left" data-aos-duration="500">
        <div class="max-w-xs border-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-center align-center bg-gray-300">
            <img src="{{'./img/official1.jpg'}}" alt="" class="">
          </div>
          <div class="">
            <h5 class="bg-gray-700 px-3 py-2 text-center text-lg font-bold tracking-tight text-white dark:text-white">
              RAMON C. PAGARA
              <span class="text-sm block text-yellow-400">Punong Barangay</span>
              <span class="text-sm block">2018 - PRESENT</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="" data-aos="flip-left" data-aos-duration="1000">
        <div class="max-w-xs border-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-center align-center bg-gray-300">
            <img src="{{'./img/official2.jpg'}}" alt="" class="">
          </div>
          <div class="">
            <h5 class="bg-gray-700 px-3 py-2 text-center text-lg font-bold tracking-tight text-white dark:text-white">
              ALI RYAN D. DORILAG
              <span class="text-sm block text-yellow-400">Barangay Kagawad</span>
              <span class="text-sm block">2018 - PRESENT</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="" data-aos="flip-left" data-aos-duration="1500">
        <div class="max-w-xs border-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-center align-center bg-gray-300">
            <img src="{{'./img/official3.jpg'}}" alt="" class="">
          </div>
          <div class="">
            <h5 class="bg-gray-700 px-3 py-2 text-center text-lg font-bold tracking-tight text-white dark:text-white">
              WILFREDO J. OCLAMAN
              <span class="text-sm block text-yellow-400">Barangay Kagawad</span>
              <span class="text-sm block">2018 - PRESENT</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="" data-aos="flip-left" data-aos-duration="2000">
        <div class="max-w-xs border-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-center align-center bg-gray-300">
            <img src="{{'./img/official4.jpg'}}" alt="" class="">
          </div>
          <div class="">
            <h5 class="bg-gray-700 px-3 py-2 text-center text-lg font-bold tracking-tight text-white dark:text-white">
              MANOLITO O. LABITA
              <span class="text-sm block text-yellow-400">Barangay Kagawad</span>
              <span class="text-sm block">2018 - PRESENT</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="" data-aos="flip-left" data-aos-duration="2500">
        <div class="max-w-xs border-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-center align-center bg-gray-300">
            <img src="{{'./img/official5.jpg'}}" alt="" class="">
          </div>
          <div class="">
            <h5 class="bg-gray-700 px-3 py-2 text-center text-lg font-bold tracking-tight text-white dark:text-white">
              RICO R. SALCEDO
              <span class="text-sm block text-yellow-400">Barangay Kagawad</span>
              <span class="text-sm block">2018 - PRESENT</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="" data-aos="flip-left" data-aos-duration="500">
        <div class="max-w-xs border-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-center align-center bg-gray-300">
            <img src="{{'./img/official6.jpg'}}" alt="" class="">
          </div>
          <div class="">
            <h5 class="bg-gray-700 px-3 py-2 text-center text-lg font-bold tracking-tight text-white dark:text-white">
              ALICE S. VACALARES
              <span class="text-sm block text-yellow-400">Barangay Kagawad</span>
              <span class="text-sm block">2018 - PRESENT</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="" data-aos="flip-left" data-aos-duration="1000">
        <div class="max-w-xs border-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-center align-center bg-gray-300">
            <img src="{{'./img/official7.jpg'}}" alt="" class="">
          </div>
          <div class="">
            <h5 class="bg-gray-700 px-3 py-2 text-center text-lg font-bold tracking-tight text-white dark:text-white">
              JINKY T. CAFE
              <span class="text-sm block text-yellow-400">Barangay Kagawad</span>
              <span class="text-sm block">2018 - PRESENT</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="" data-aos="flip-left" data-aos-duration="1500">
        <div class="max-w-xs border-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-center align-center bg-gray-300">
            <img src="{{'./img/official8.jpg'}}" alt="" class="">
          </div>
          <div class="">
            <h5 class="bg-gray-700 px-3 py-2 text-center text-lg font-bold tracking-tight text-white dark:text-white">
              VIRGEL Z. ZAMARRO
              <span class="text-sm block text-yellow-400">Barangay Kagawad</span>
              <span class="text-sm block">2018 - PRESENT</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="" data-aos="flip-left" data-aos-duration="2000">
        <div class="max-w-xs border-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-center align-center bg-gray-300">
            <img src="{{'./img/official9.jpg'}}" alt="" class="">
          </div>
          <div class="">
            <h5 class="bg-gray-700 px-3 py-2 text-center text-lg font-bold tracking-tight text-white dark:text-white">
              ANNA RICKA MAE S. NACASABOG
              <span class="text-sm block text-yellow-400">SK Chairman</span>
              <span class="text-sm block">2018 - PRESENT</span>
            </h5>
          </div>
        </div>
      </div>
      <div class="" data-aos="flip-left" data-aos-duration="2500">
        <div class="max-w-xs border-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-center align-center bg-gray-300">
            <img src="{{'./img/official10.jpg'}}" alt="" class="">
          </div>
          <div class="">
            <h5 class="bg-gray-700 px-3 py-2 text-center text-lg font-bold tracking-tight text-white dark:text-white">
              CHOLIE T. ABALES
              <span class="text-sm block text-yellow-400">Barangay Secretary</span>
              <span class="text-sm block">2018 - PRESENT</span>
            </h5>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- ====== Footer Section Start -->
  <footer class="relative z-10 bg-gradient-to-r from-red-700  to-blue-700 pt-20 pb-10 lg:pt-[120px] lg:pb-20">
    <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 sm:w-3/3 lg:w-3/12">
          <div class="mb-10 w-full">
            <a href="#" class="flex items-center mb-8">
              <img src="{{'./img/logo.png'}}" class="h-6 mr-3 sm:h-9" alt="Logo">
              <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white text-white">BMIS</span>
            </a>
            <p class="text-white mb-9 text-base">
              Baluarte, Tagoloan, Misamis Oriental, 9001
              Monday to Friday (8AM - 5PM)
            </p>
            <p class="text-dark flex items-center text-sm font-medium mb-2">
              <span class="text-primary mr-3">
                <x-clarity-phone-handset-solid class="w-5 fill-white" />
              </span>
              <span class="text-white">09197568493</span>
            </p>
            <p class="text-dark flex items-center text-sm font-medium">
              <span class="text-primary mr-3">
                <x-clarity-email-solid class="w-5 fill-white" />
              </span>
              <span class="text-white">brgybaluarte@gmail.com</span>
            </p>
          </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-4/12">
          <div class="mb-10 w-full">
            <h4 class="text-white mb-9 text-lg font-semibold">Navigation</h4>
            <ul>
              <div class="grid grid-cols-6">
                <div class="col-span-3">
                  <li>
                    <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                      Home
                    </a>
                  </li>
                  <li>
                    <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                      Announcement
                    </a>
                  </li>
                  <li>
                    <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                      News
                    </a>
                  </li>
                </div>
                <div class="col-span-3">
                  <li>
                    <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                      Document
                    </a>
                  </li>
                  <li>
                    <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                      Official
                    </a>
                  </li>
                  <li>
                    <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                      About
                    </a>
                  </li>
                </div>
              </div>
            </ul>
          </div>
        </div>

        <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
          <div class="mb-10 w-full">
            <h4 class="text-white mb-9 text-lg font-semibold">Quick Links</h4>
            <ul>
              <li>
                <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                  Brgy. Clearance
                </a>
              </li>
              <li>
                <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                  Brgy. Indigency
                </a>
              </li>
              <li>
                <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                  Brgy. Residency
                </a>
              </li>
              <li>
                <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                  Brgy. Resident ID
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
          <div class="mb-10 w-full">
            <h4 class="text-white mb-9 text-lg font-semibold">Follow Us On</h4>
            <div class="mb-6 flex items-center">
              <a href="#" class="text-white bg-white  hover:border-yellow-400 mr-3 flex h-8 w-8 items-center justify-center rounded border-2 hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <x-fab-square-facebook class="w-6 fill-blue-700" />
              </a>
              <a href="#" class="text-white bg-white  hover:border-yellow-400 mr-3 flex h-8 w-8 items-center justify-center rounded border-2 hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <x-fab-square-twitter class="w-6 fill-blue-700" />
              </a>
              <a href="#" class="text-white bg-white  hover:border-yellow-400 mr-3 flex h-8 w-8 items-center justify-center rounded border-2 hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <x-fab-square-instagram class="w-6 fill-blue-700" />
              </a>
              <a href="#" class="text-white bg-white  hover:border-yellow-400 mr-3 flex h-8 w-8 items-center justify-center rounded border-2 hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <x-fab-square-youtube class="w-6 fill-blue-700" />
              </a>
            </div>
            <p class="text-white text-base">&copy; {{ date('Y') }} | BMIS</p>
          </div>
        </div>
      </div>

    </div>
    <div>
      <span class="absolute left-0 bottom-0 z-[-1]">
        <svg width="217" height="229" viewBox="0 0 217 229" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z" fill="url(#paint0_linear_1179_5)" />
          <defs>
            <linearGradient id="paint0_linear_1179_5" x1="76.5" y1="281" x2="76.5" y2="1.22829e-05" gradientUnits="userSpaceOnUse">
              <stop stop-color="#3056D3" stop-opacity="0.08" />
              <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
            </linearGradient>
          </defs>
        </svg>
      </span>
      <span class="absolute top-10 right-10 z-[-1]">
        <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M37.5 -1.63918e-06C58.2107 -2.54447e-06 75 16.7893 75 37.5C75 58.2107 58.2107 75 37.5 75C16.7893 75 -7.33885e-07 58.2107 -1.63918e-06 37.5C-2.54447e-06 16.7893 16.7893 -7.33885e-07 37.5 -1.63918e-06Z" fill="url(#paint0_linear_1179_4)" />
          <defs>
            <linearGradient id="paint0_linear_1179_4" x1="-1.63917e-06" y1="37.5" x2="75" y2="37.5" gradientUnits="userSpaceOnUse">
              <stop stop-color="#13C296" stop-opacity="0.31" />
              <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
            </linearGradient>
          </defs>
        </svg>
      </span>
    </div>
  </footer>
  <!-- ====== Footer Section End -->

  <!-- ====== refresh start top script-->
  <script>
    window.onbeforeunload = function() {
      window.scrollTo(0, 0);
    }
  </script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>