<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- CSS build by TailwindCSS -->
    <!-- Dont' forget to re-link -->
    {{-- <link rel="stylesheet" href="../css/styles.css" /> --}}
    @vite('resources/css/app.css')
  </head>
  <body>
    <!-- -------------------------------------------------------------------------------------- -->
    <!-- | To make it resposively: Need to add these class to all direct element after <body> | -->
    <!-- |           class="px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50"              | -->
    <!-- -------------------------------------------------------------------------------------- -->

    <!-- === Header === -->
    <header class="px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50">
      <nav class="flex justify-between items-center">
        <!-- toggle menu icon -->
        <div>
          <button
            onclick="document.getElementById('menu').classList.toggle('-translate-x-full')"
          >
            <div class="bg-gray-100 px-2 py-2 rounded-md">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6 block"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                />
              </svg>
            </div>
          </button>

          <div
            id="menu"
            class="absolute top-0 left-0 z-10 min-w-fit -translate-x-full rounded bg-white py-2 shadow-md transition-transform duration-300 ease-out"
          >
            <!-- close toggle menu -->
            <div class="relative">
              <div
                class="absolute top-2 right-3 cursor-pointer"
                onclick="document.getElementById('menu').classList.toggle('-translate-x-full')"
              >
                <svg
                  width="16"
                  height="16"
                  viewBox="0 0 16 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M3.88232 2.4213L7.99965 6.53863L12.0957 2.44263C12.1861 2.34633 12.2951 2.2693 12.4161 2.21614C12.5371 2.16299 12.6675 2.13481 12.7997 2.1333C13.0826 2.1333 13.3539 2.24568 13.5539 2.44572C13.7539 2.64576 13.8663 2.91707 13.8663 3.19997C13.8688 3.33074 13.8445 3.46065 13.795 3.58171C13.7455 3.70277 13.6718 3.81243 13.5783 3.90397L9.42899 7.99997L13.5783 12.1493C13.7541 12.3213 13.8572 12.5542 13.8663 12.8C13.8663 13.0829 13.7539 13.3542 13.5539 13.5542C13.3539 13.7543 13.0826 13.8666 12.7997 13.8666C12.6637 13.8723 12.5281 13.8496 12.4014 13.8C12.2747 13.7504 12.1597 13.675 12.0637 13.5786L7.99965 9.4613L3.89299 13.568C3.80286 13.6611 3.69519 13.7354 3.57619 13.7866C3.45719 13.8379 3.32921 13.8651 3.19965 13.8666C2.91676 13.8666 2.64544 13.7543 2.44541 13.5542C2.24537 13.3542 2.13299 13.0829 2.13299 12.8C2.1305 12.6692 2.15476 12.5393 2.20429 12.4182C2.25381 12.2972 2.32755 12.1875 2.42099 12.096L6.57032 7.99997L2.42099 3.85063C2.24518 3.67864 2.14209 3.44574 2.13299 3.19997C2.13299 2.91707 2.24537 2.64576 2.44541 2.44572C2.64544 2.24568 2.91676 2.1333 3.19965 2.1333C3.45565 2.1365 3.70099 2.23997 3.88232 2.4213Z"
                    fill="black"
                  />
                </svg>
              </div>
            </div>

            <!-- Menu contents -->
            <div class="flex flex-col space-y-2 px-4 pt-2">
              <!-- categories -->
              <ul class="flex flex-col space-y-2">
                <li><a href="#">ទំព័រដើម</a></li>
                <li><a href="#">ព័ត៌មានថ្មីៗ</a></li>
                <li><a href="#">បច្ចេកវិទ្យា</a></li>
                <li><a href="#">កីឡា</a></li>
                <li><a href="#">កម្សាន្ត</a></li>
                <li><a href="#">ជីវិត និងសង្គម</a></li>
              </ul>

              <hr class="sm:hidden" />

              <!-- change theme -->
              <div class="flex items-center justify-between sm:hidden">
                <div>ប្ដូរ Theme:</div>
                <div class="m-auto rounded-full bg-slate-50 px-2 py-2">
                  <svg
                    width="36"
                    height="36"
                    viewBox="-6 -6 36 36"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="stroke-sky-500 fill-sky-100 group-hover:stroke-sky-600 dark:stroke-gray-400 dark:fill-gray-400/20 dark:group-hover:stroke-gray-300"
                  >
                    <g class="dark:opacity-0">
                      <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                      <path
                        d="M12 4v.01M17.66 6.345l-.007.007M20.005 12.005h-.01M17.66 17.665l-.007-.007M12 20.01V20M6.34 17.665l.007-.007M3.995 12.005h.01M6.34 6.344l.007.007"
                        fill="none"
                      ></path>
                    </g>
                    <g class="opacity-0 dark:opacity-100">
                      <path d="M16 12a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z"></path>
                      <path
                        d="M12 3v1M18.66 5.345l-.828.828M21.005 12.005h-1M18.66 18.665l-.828-.828M12 21.01V20M5.34 18.666l.835-.836M2.995 12.005h1.01M5.34 5.344l.835.836"
                        fill="none"
                      ></path>
                    </g>
                  </svg>
                </div>
              </div>

              <hr />

              <!-- Social medias -->
              <div>
                <p class="mb-3 font-bold text-gray-400">តាមដានយើងតាម៖</p>
                <ul class="flex space-x-2">
                  <li>
                    <a href="#">
                      <div
                        class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-300"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 9 15"
                          width="9"
                          height="15"
                          class="block"
                        >
                          <path
                            d="M5.6002 8.2502H7.3502L8.0502 5.4502H5.6002V4.0502C5.6002 3.3292 5.6002 2.6502 7.0002 2.6502H8.0502V0.298195C7.822 0.268095 6.9603 0.200195 6.0503 0.200195C4.1498 0.200195 2.8002 1.3601 2.8002 3.4902V5.4502H0.700195V8.2502H2.8002V14.2002H5.6002V8.2502Z"
                            fill="black"
                          />
                        </svg>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <div
                        class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-300"
                      >
                        <svg
                          width="15"
                          height="15"
                          viewBox="0 0 15 15"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M4.2602 0.199707H10.1402C12.3802 0.199707 14.2002 2.01971 14.2002 4.25971V10.1397C14.2002 11.2165 13.7724 12.2492 13.0111 13.0106C12.2497 13.772 11.217 14.1997 10.1402 14.1997H4.2602C2.0202 14.1997 0.200195 12.3797 0.200195 10.1397V4.25971C0.200195 3.18293 0.627944 2.15025 1.38934 1.38885C2.15074 0.627456 3.18342 0.199707 4.2602 0.199707ZM4.1202 1.59971C3.45185 1.59971 2.81088 1.86521 2.33829 2.3378C1.86569 2.81039 1.6002 3.45136 1.6002 4.11971V10.2797C1.6002 11.6727 2.7272 12.7997 4.1202 12.7997H10.2802C10.9485 12.7997 11.5895 12.5342 12.0621 12.0616C12.5347 11.589 12.8002 10.9481 12.8002 10.2797V4.11971C12.8002 2.72671 11.6732 1.59971 10.2802 1.59971H4.1202ZM10.8752 2.64971C11.1073 2.64971 11.3298 2.74189 11.4939 2.90599C11.658 3.07008 11.7502 3.29264 11.7502 3.52471C11.7502 3.75677 11.658 3.97933 11.4939 4.14342C11.3298 4.30752 11.1073 4.39971 10.8752 4.39971C10.6431 4.39971 10.4206 4.30752 10.2565 4.14342C10.0924 3.97933 10.0002 3.75677 10.0002 3.52471C10.0002 3.29264 10.0924 3.07008 10.2565 2.90599C10.4206 2.74189 10.6431 2.64971 10.8752 2.64971ZM7.2002 3.69971C8.12845 3.69971 9.01869 4.06846 9.67507 4.72483C10.3314 5.38121 10.7002 6.27145 10.7002 7.19971C10.7002 8.12796 10.3314 9.0182 9.67507 9.67458C9.01869 10.331 8.12845 10.6997 7.2002 10.6997C6.27194 10.6997 5.3817 10.331 4.72532 9.67458C4.06894 9.0182 3.7002 8.12796 3.7002 7.19971C3.7002 6.27145 4.06894 5.38121 4.72532 4.72483C5.3817 4.06846 6.27194 3.69971 7.2002 3.69971ZM7.2002 5.09971C6.64324 5.09971 6.1091 5.32096 5.71527 5.71478C5.32144 6.10861 5.1002 6.64275 5.1002 7.19971C5.1002 7.75666 5.32144 8.2908 5.71527 8.68463C6.1091 9.07846 6.64324 9.29971 7.2002 9.29971C7.75715 9.29971 8.29129 9.07846 8.68512 8.68463C9.07895 8.2908 9.3002 7.75666 9.3002 7.19971C9.3002 6.64275 9.07895 6.10861 8.68512 5.71478C8.29129 5.32096 7.75715 5.09971 7.2002 5.09971Z"
                            fill="black"
                          />
                        </svg>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <div
                        class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-300"
                      >
                        <svg
                          width="15"
                          height="11"
                          viewBox="0 0 15 11"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M5.8002 7.2998L9.4332 5.1998L5.8002 3.0998V7.2998ZM13.8922 1.8188C13.9832 2.1478 14.0462 2.5888 14.0882 3.1488C14.1372 3.7088 14.1582 4.1918 14.1582 4.6118L14.2002 5.1998C14.2002 6.7328 14.0882 7.8598 13.8922 8.5808C13.7172 9.2108 13.3112 9.6168 12.6812 9.7918C12.3522 9.8828 11.7502 9.9458 10.8262 9.9878C9.9162 10.0368 9.0832 10.0578 8.3132 10.0578L7.2002 10.0998C4.2672 10.0998 2.4402 9.9878 1.7192 9.7918C1.0892 9.6168 0.683195 9.2108 0.508195 8.5808C0.417195 8.2518 0.354195 7.8108 0.312195 7.2508C0.263195 6.6908 0.242195 6.2078 0.242195 5.7878L0.200195 5.1998C0.200195 3.6668 0.312195 2.5398 0.508195 1.8188C0.683195 1.1888 1.0892 0.782805 1.7192 0.607805C2.0482 0.516805 2.6502 0.453805 3.5742 0.411805C4.4842 0.362805 5.3172 0.341805 6.0872 0.341805L7.2002 0.299805C10.1332 0.299805 11.9602 0.411805 12.6812 0.607805C13.3112 0.782805 13.7172 1.1888 13.8922 1.8188Z"
                            fill="black"
                          />
                        </svg>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <div
                        class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-300"
                      >
                        <svg
                          width="16"
                          height="13"
                          viewBox="0 0 16 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M15.5219 1.99961C14.9829 2.24461 14.4019 2.40561 13.7999 2.48261C14.4159 2.11161 14.8919 1.52361 15.1159 0.816609C14.5349 1.16661 13.8909 1.41161 13.2119 1.55161C12.6589 0.94961 11.8819 0.599609 10.9999 0.599609C9.35493 0.599609 8.01093 1.94361 8.01093 3.60261C8.01093 3.84061 8.03893 4.07161 8.08793 4.28861C5.59593 4.16261 3.37693 2.96561 1.89993 1.15261C1.64093 1.59361 1.49393 2.11161 1.49393 2.65761C1.49393 3.70061 2.01893 4.62461 2.83093 5.14961C2.33393 5.14961 1.87193 5.00961 1.46593 4.79961V4.82061C1.46593 6.27661 2.50193 7.49461 3.87393 7.76761C3.43344 7.88816 2.971 7.90493 2.52293 7.81661C2.71305 8.41335 3.08541 8.9355 3.58764 9.30966C4.08988 9.68383 4.69674 9.89119 5.32293 9.90261C4.26147 10.7429 2.94573 11.1971 1.59193 11.1906C1.35393 11.1906 1.11593 11.1766 0.87793 11.1486C2.20793 12.0026 3.78993 12.4996 5.48393 12.4996C10.9999 12.4996 14.0309 7.92161 14.0309 3.95261C14.0309 3.81961 14.0309 3.69361 14.0239 3.56061C14.6119 3.14061 15.1159 2.60861 15.5219 1.99961Z"
                            fill="black"
                          />
                        </svg>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <div
                        class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-300"
                      >
                        <svg
                          width="16"
                          height="13"
                          viewBox="0 0 16 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M14.2971 0.358156C14.2971 0.358156 15.6568 -0.172094 15.5431 1.11556C15.5056 1.64581 15.1658 3.50186 14.9012 5.50911L13.9947 11.4556C13.9947 11.4556 13.9191 12.3268 13.239 12.4783C12.5593 12.6295 11.5394 11.9481 11.3504 11.7965C11.1992 11.6828 8.51751 9.97826 7.57321 9.14526C7.30861 8.91776 7.00621 8.46346 7.61101 7.93321L11.5769 4.14551C12.0301 3.69121 12.4834 2.63071 10.5948 3.91836L5.30626 7.51636C5.30626 7.51636 4.70181 7.89541 3.56886 7.55451L1.11326 6.79676C1.11326 6.79676 0.206762 6.22871 1.75551 5.66066C5.53306 3.88056 10.1793 2.06266 14.2964 0.358156H14.2971Z"
                            fill="black"
                          />
                        </svg>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>

              <hr />

              <!-- Contacts -->
              <div class="flex flex-col space-y-6 pb-4">
                <div>
                  <p class="mb-1">info@khmerdailynews.com</p>
                  <p>០១២ ៥៤៣ ៣៣៣</p>
                </div>
                <button
                  class="rounded-md border border-gray-300 py-2 px-3 text-center"
                >
                  ទំនាក់ទំនងយើង
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Big Title | Logo -->
        <h1 class="font-title text-3xl sm:text-3xl md:text-4xl lg:text-5xl">
          K<span class="hidden sm:inline">hmer</span> D<span
            class="hidden sm:inline"
            >aily</span
          >
          N<span class="hidden sm:inline">ews</span>
        </h1>

        <div class="flex space-x-4 items-center">
          <!-- Search -->
          <div
            class="bg-gray-100 w-7 h-7 px-1 rounded-full sm:h-9 sm:w-36 flex justify-between items-center sm:px-4 my-3 sm:my-0"
          >
            <span class="hidden sm:inline text-gray-400">ស្វែងរក</span>
            <span
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-4 h-4 block"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                />
              </svg>
            </span>
          </div>

          <!-- Change theme -->
          <div
            class="hidden sm:inline m-auto bg-slate-50 rounded-full px-2 py-2"
          >
            <svg
              width="36"
              height="36"
              viewBox="-6 -6 36 36"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="stroke-sky-500 fill-sky-100 group-hover:stroke-sky-600 dark:stroke-gray-400 dark:fill-gray-400/20 dark:group-hover:stroke-gray-300"
            >
              <g class="dark:opacity-0">
                <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                <path
                  d="M12 4v.01M17.66 6.345l-.007.007M20.005 12.005h-.01M17.66 17.665l-.007-.007M12 20.01V20M6.34 17.665l.007-.007M3.995 12.005h.01M6.34 6.344l.007.007"
                  fill="none"
                ></path>
              </g>
              <g class="opacity-0 dark:opacity-100">
                <path d="M16 12a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z"></path>
                <path
                  d="M12 3v1M18.66 5.345l-.828.828M21.005 12.005h-1M18.66 18.665l-.828-.828M12 21.01V20M5.34 18.666l.835-.836M2.995 12.005h1.01M5.34 5.344l.835.836"
                  fill="none"
                ></path>
              </g>
            </svg>
          </div>

          <!-- Account -->
          <div
            class="flex space-x-3 m-auto bg-red-600 text-white px-3 py-2 rounded-md"
          >
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6 block"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"
                />
              </svg>
            </span>
            <span>ចុះឈ្មោះ</span>
          </div>
        </div>
      </nav>
    </header>

    <div class="px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50">
      <div class="border-b-2 border-rose-300 pb-3">
        <h2 class="text-2xl font-bold pt-12 pb-3">ព័ត៌មានដែលបានរក្សាទុក</h2>
        <p class="gap-2 text-sm">
          ចុចលើរូប
          <span>
            <svg
              width="14"
              height="18"
              viewBox="0 0 14 18"
              class="inline-block"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M12 0H2C0.9 0 0 0.9 0 2V18L7 15L14 18V2C14 0.9 13.1 0 12 0ZM12 15L7 12.82L2 15V2H12V15Z"
                fill="black"
              />
            </svg>
          </span>
          ដើម្បីរក្សាទុកព័ត៌មានសម្រាប់អានពេលក្រោយ។
        </p>
      </div>
    </div>

    <!-- === Today section === -->
    <section class="py-4 px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50">
      <!-- herder -->
      <header class="mb-5">
        <a href="#" class="flex items-center space-x-3">
          <h2 class="text-xl font-bold">ថ្ងៃនេះ</h2>
        </a>
      </header>

      <!-- body -->
      <div class="grid grid-cols-2 gap-x-3 gap-y-8 sm:grid-cols-4">
        <!-- article 1 -->
        <article>
          <!-- image goes here -->
          <div class="overflow-hidden rounded-md bg-cover">
            <img
              class="rounded-md"
              src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
              alt="sample image"
            />
          </div>

          <!-- time goes here -->
          <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

          <!-- title goes here -->
          <h3 class="mt-4 text-sm font-bold">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
          </h3>

          <!-- category -->
          <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
        </article>

        <!-- article 2 -->
        <article>
          <!-- image goes here -->
          <div class="overflow-hidden rounded-md bg-cover">
            <img
              class="rounded-md"
              src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
              alt="sample image"
            />
          </div>

          <!-- time goes here -->
          <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

          <!-- title goes here -->
          <h3 class="mt-4 text-sm font-bold">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
          </h3>

          <!-- category -->
          <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
        </article>

        <!-- article 3 -->
        <article>
          <!-- image goes here -->
          <div class="overflow-hidden rounded-md bg-cover">
            <img
              class="rounded-md"
              src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
              alt="sample image"
            />
          </div>

          <!-- time goes here -->
          <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

          <!-- title goes here -->
          <h3 class="mt-4 text-sm font-bold">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
          </h3>

          <!-- category -->
          <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
        </article>

        <!-- article 4 -->
        <article>
          <!-- image goes here -->
          <div class="overflow-hidden rounded-md bg-cover">
            <img
              class="rounded-md"
              src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
              alt="sample image"
            />
          </div>

          <!-- time goes here -->
          <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

          <!-- title goes here -->
          <h3 class="mt-4 text-sm font-bold">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
          </h3>

          <!-- category -->
          <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
        </article>
      </div>

      <div class="mt-8 border-b-2"></div>
    </section>

    <!-- === Yesterday section === -->
    <section class="py-4 px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50">
      <!-- herder -->
      <header class="mb-5">
        <a href="#" class="flex items-center space-x-3">
          <h2 class="text-xl font-bold">ម្សិលមិញ</h2>
        </a>
      </header>

      <!-- body -->
      <div class="grid grid-cols-2 gap-x-3 gap-y-8 sm:grid-cols-4">
        <!-- article 1 -->
        <article>
          <!-- image goes here -->
          <div class="overflow-hidden rounded-md bg-cover">
            <img
              class="rounded-md"
              src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
              alt="sample image"
            />
          </div>

          <!-- time goes here -->
          <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

          <!-- title goes here -->
          <h3 class="mt-4 text-sm font-bold">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
          </h3>

          <!-- category -->
          <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
        </article>

        <!-- article 2 -->
        <article>
          <!-- image goes here -->
          <div class="overflow-hidden rounded-md bg-cover">
            <img
              class="rounded-md"
              src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
              alt="sample image"
            />
          </div>

          <!-- time goes here -->
          <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

          <!-- title goes here -->
          <h3 class="mt-4 text-sm font-bold">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
          </h3>

          <!-- category -->
          <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
        </article>

        <!-- article 3 -->
        <article>
          <!-- image goes here -->
          <div class="overflow-hidden rounded-md bg-cover">
            <img
              class="rounded-md"
              src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
              alt="sample image"
            />
          </div>

          <!-- time goes here -->
          <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

          <!-- title goes here -->
          <h3 class="mt-4 text-sm font-bold">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
          </h3>

          <!-- category -->
          <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
        </article>

        <!-- article 4 -->
        <article>
          <!-- image goes here -->
          <div class="overflow-hidden rounded-md bg-cover">
            <img
              class="rounded-md"
              src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
              alt="sample image"
            />
          </div>

          <!-- time goes here -->
          <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

          <!-- title goes here -->
          <h3 class="mt-4 text-sm font-bold">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
          </h3>

          <!-- category -->
          <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
        </article>
      </div>

      <div class="mt-8 border-b-2"></div>
    </section>

    <!-- === Forefore yesterday (1 Day) section === -->
    <section class="py-4 px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50">
      <!-- herder -->
      <header class="mb-5">
        <a href="#" class="flex items-center space-x-3">
          <h2 class="text-xl font-bold">ថ្ងៃទី ១២​ ខែធ្នូ ឆ្នាំ២០២២</h2>
        </a>
      </header>

      <!-- body -->
      <div class="grid grid-cols-2 gap-x-3 gap-y-8 sm:grid-cols-4">
        <!-- article 1 -->
        <article>
          <!-- image goes here -->
          <div class="overflow-hidden rounded-md bg-cover">
            <img
              class="rounded-md"
              src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
              alt="sample image"
            />
          </div>

          <!-- time goes here -->
          <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

          <!-- title goes here -->
          <h3 class="mt-4 text-sm font-bold">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
          </h3>

          <!-- category -->
          <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
        </article>

        <!-- article 2 -->
        <article>
          <!-- image goes here -->
          <div class="overflow-hidden rounded-md bg-cover">
            <img
              class="rounded-md"
              src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
              alt="sample image"
            />
          </div>

          <!-- time goes here -->
          <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

          <!-- title goes here -->
          <h3 class="mt-4 text-sm font-bold">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
          </h3>

          <!-- category -->
          <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
        </article>

        <!-- article 3 -->
        <article>
          <!-- image goes here -->
          <div class="overflow-hidden rounded-md bg-cover">
            <img
              class="rounded-md"
              src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
              alt="sample image"
            />
          </div>

          <!-- time goes here -->
          <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

          <!-- title goes here -->
          <h3 class="mt-4 text-sm font-bold">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
          </h3>

          <!-- category -->
          <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
        </article>

        <!-- article 4 -->
        <article>
          <!-- image goes here -->
          <div class="overflow-hidden rounded-md bg-cover">
            <img
              class="rounded-md"
              src="https://media.istockphoto.com/id/1370772148/photo/track-and-mountains-in-valle-del-lago-somiedo-nature-park-asturias-spain.jpg?s=612x612&w=0&k=20&c=QJn62amhOddkJSbihcjWKHXShMAfcKM0hPN65aCloco="
              alt="sample image"
            />
          </div>

          <!-- time goes here -->
          <p class="mt-3 text-xs text-gray-500">ថ្ងៃនេះ ម៉ោង 09:21</p>

          <!-- title goes here -->
          <h3 class="mt-4 text-sm font-bold">
            វត្ថុបុរាណចំនួន២១និងសំណងបេតិកភណ្ឌចំនួន១១ នៅក្នុងវត្តថាន់
            ត្រូវបានចុះបញ្ជី ការពារ
          </h3>

          <!-- category -->
          <p class="mt-2 text-xs font-semibold text-rose-600">ជីវិត នឹងសង្គម</p>
        </article>
      </div>

      <div class="mt-8 border-b-2"></div>
    </section>

    <!-- === Footer small === -->
    <footer
      class="bg-rose-600 px-3 lg:mx-auto sm:px-10 md:px-24 lg:px-44 xl:px-50"
    >
      <div class="w-full py-4 text-center font-bold text-white">
        <div class="border-gray mb-3 border-t"></div>

        <div class="flex justify-center text-sm md:justify-between">
          <p>
            &copy;រក្សាសិទ្ទគ្រប់យ៉ាងដោយ
            <a href="#">Khmer Dail News</a> ឆ្នាំ២០២៣
          </p>
          <p class="hidden md:inline">
            <a href="#">គោលការណ៍ភាពឯកជន</a>
            <span>|</span>
            <a href="#">Privacy Policy</a>
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>
