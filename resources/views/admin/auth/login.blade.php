<!DOCTYPE html>
  <html lang="en" dir="rtl">
    <head>
      <!-- Meta tags  -->
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
      />
  
      <title>تسجيل دخول</title>
      <link rel="icon" type="image/png" href="images/favicon.png" />
  
      <!-- CSS Assets -->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  
      <!-- Javascript Assets -->
      <script src="{{ asset('js/app.js') }}" defer></script>
  
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
      />
    </head>
    <body x-data class="is-header-blur" x-bind="$store.global.documentBody">
      <!-- App preloader-->
      <div
        class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900"
      >
        <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
      </div>
  
      <!-- Page Wrapper -->
      <div
        id="root"
        class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900"
        x-cloak
      >
        <main class="grid w-full grow grid-cols-1 place-items-center">
          <div class="w-full max-w-[26rem] p-4 sm:px-5">
            <div class="text-center">
              <img
                class="mx-auto h-16 w-16"
                src="{{ asset('HIRE.png') }}"
                alt="logo"
              />
              <div class="mt-4">
                <h2
                  class="text-2xl font-semibold text-slate-600 dark:text-navy-100"
                >
                  تسجيل دخول
                </h2>

              </div>
            </div>
            <div class="card mt-5 rounded-lg p-5 lg:p-7">
              <form method="POST" action="{{ route('admin.login') }}">
                  @csrf


              <label class="block">
                <span>البريد الالكتروني</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="ادخل البريد الالكتروني هنا"
                    type="email" name="email"
                  />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5 transition-colors duration-200"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                      />
                    </svg>
                  </span>
                </span>
              </label>
              <label class="mt-4 block">
                <span>الرقم السري</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="ادخل الرقم السري هنا"
                    type="password"
                    name="password"
                  />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5 transition-colors duration-200"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                      />
                    </svg>
                  </span>
                </span>
              </label>
              
              <button 
                type="submit"
                class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
              >
                تسجيل دخول
              </button>
              
              
              
            </div>
            
          </div>
        </main>
      </div>
  
      <!-- 
          This is a place for Alpine.js Teleport feature 
          @see https://alpinejs.dev/directives/teleport
        -->
      <div id="x-teleport-target"></div>
      <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
      </script>
    </body>
</html>
