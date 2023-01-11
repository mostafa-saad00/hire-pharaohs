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

    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('HIRE.png') }}">

    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/filepond.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/filepond-plugin-image-preview.css') }}"/>

    <!-- Javascript Assets -->
    <script src="{{ asset('js/app.js') }}" defer></script>



    <!-- jquery -->
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/hot-sneaks/jquery-ui.css">
    <script src="{{ asset('/js/jquery-1.12.4.js') }}"></script>
    <script src="{{ asset('/js/jquery-ui.js') }}"></script>
    

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />


    <!-- Scripts -->
    @livewireStyles  

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
      <!-- Sidebar -->
      <div class="sidebar print:hidden">
        <!-- Main Sidebar -->
        <div class="main-sidebar">
          <div
            class="flex h-full w-full flex-col items-center border-l border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-800"
          >
            <!-- Application Logo -->
            <div class="flex pt-4">
              <a href="{{ asset('dashboard') }}">
                <img
                  class="h-11 w-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
                  src="{{ asset('HIRE.png') }}"
                  alt="logo"
                />
              </a>
            </div>

            <!-- Main Sections Links -->
            <div
              class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6"
            >
              <!-- Dashobard -->
              <a
                href="{{ route('dashboard') }}"
                @if (request()->routeIs('dashboard'))
                    class="flex h-11 w-11 items-center justify-center rounded-lg bg-primary/10 outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"  
                @else
                    class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                @endif
                
                x-tooltip.placement.right="'الصفحة الرئيسية'"
              >
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-check" viewBox="0 0 16 16">
                <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708L7.293 1.5Z"/>
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.707l.547.547 1.17-1.951a.5.5 0 1 1 .858.514Z"/>
              </svg>
              </a>

              <!-- icon 1 -->
              <a
                @if (true)
                    class="flex h-11 w-11 items-center justify-center rounded-lg bg-primary/10 outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"  
                @else
                    class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                @endif
                class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                x-tooltip.placement.right="'placeholder'"
              >
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"/>
              </svg>
              </a>

              

              <!-- icon 2 -->
              <a
                @if (true)
                    class="flex h-11 w-11 items-center justify-center rounded-lg bg-primary/10 outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"  
                @else
                    class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                @endif
                class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                x-tooltip.placement.right="'placeholder'"
              >
              <svg version="1.1" width="25" height="25" fill="currentColor" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 89.54" style="enable-background:new 0 0 122.88 89.54" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g>
                <path class="st0" d="M9.51,5.81l0.03-0.1c1.25-2.88,2.16-4.31,3.91-5.14c2.5-1.18,4.98-0.49,6.62,1.68 c0.78,1.03,1.38,2.24,1.85,3.56h82.67V5.26c0-2.82,2.31-5.13,5.13-5.13h5.39c0.97,0,1.77,0.8,1.77,1.77v3.9h1.29 c2.59,0,4.71,2.12,4.71,4.71v10.93H62.86v-6.3c0-1.1-0.89-1.99-1.99-1.99c-1.1,0-1.99,0.89-1.99,1.99v6.3h-4.78v-6.3 c0-1.1-0.89-1.99-1.99-1.99c-1.1,0-1.99,0.89-1.99,1.99v6.3h-4.78v-6.3c0-1.1-0.89-1.99-1.99-1.99c-1.1,0-1.99,0.89-1.99,1.99v6.3 h-4.78v-6.3c0-1.1-0.89-1.99-1.99-1.99c-1.1,0-1.99,0.89-1.99,1.99v6.3h-4.78v-6.3c0-1.1-0.89-1.99-1.99-1.99 c-1.1,0-1.99,0.89-1.99,1.99v6.3H19v-6.3c0-1.1-0.89-1.99-1.99-1.99c-1.1,0-1.99,0.89-1.99,1.99v6.3h-4.78v-6.3 c0-1.1-0.89-1.99-1.99-1.99c-1.1,0-1.99,0.89-1.99,1.99v6.3H0.27c-0.07,0-0.13,0-0.2,0.01C0.02,20.79,0,20.07,0,19.31v-8.8 c0-2.59,2.12-4.7,4.7-4.7H9.51L9.51,5.81z M122.88,25.44v2.67c0,2.59-2.12,4.71-4.71,4.71l-35.52,3.73V25.44H122.88L122.88,25.44z M78.68,36.96l-4.81,0.51c0.82,8.68-0.39,14.49-5.55,18.1c-4.85,3.39-13.12,4.45-26.6,3.76c-0.12-0.01-0.25-0.02-0.36-0.05 l-2.4,8.8H2.54c0.32-0.76,0.68-1.56,1.08-2.43c1.33-2.94,2.88-5.72,4.66-8.33c4.68-7.91,7.87-14.82,8.2-19.46 c0.77-10.83-12.62-0.46-15.8-12.42h78v11.33C78.67,36.83,78.67,36.9,78.68,36.96L78.68,36.96z M38.12,71.15l-1.43,5.24 c3.01,4.39,3.73,7.91,1.71,10.38c-2.93,3.59-8.13,2.66-12.22,2.66H7.01c-5.17-0.45-7.19-3.9-6.91-9.54c0-3.65,0.38-6.11,1.26-8.75 H38.12L38.12,71.15z M69.92,37.88L58.2,39.11c-1.28,0.04-2.5,0.17-3.66,0.4c0.05,0.16,0.08,0.34,0.08,0.51 c0.05,2.03,0.77,3.69,1.86,4.88c1.17,1.28,2.8,2.03,4.52,2.14c1.1,0.07,1.93,1.01,1.86,2.11c-0.07,1.1-1.01,1.93-2.11,1.86 c-2.74-0.17-5.32-1.38-7.2-3.42c-1.58-1.72-2.65-4.03-2.87-6.8c-3.79,1.91-6.5,5.61-7.57,12.03l-0.69,2.54 c12.26,0.6,19.63-0.27,23.63-3.06C69.76,49.72,70.58,45.04,69.92,37.88L69.92,37.88z"/></g>
              </svg>
              </a>

              <!-- icon 3 -->
              <a
                @if(true)
                    class="flex h-11 w-11 items-center justify-center rounded-lg bg-primary/10 outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"  
                @else
                    class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                @endif
                class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                x-tooltip.placement.right="'placeholder'"
              >
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
              </svg>
              </a>

              <!-- icon 4 -->
              <a
                @if (true)
                    class="flex h-11 w-11 items-center justify-center rounded-lg bg-primary/10 outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"  
                @else
                    class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                @endif
                class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                x-tooltip.placement.right="'placeholder'"
              >
                <svg
                  class="h-7 w-7"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-opacity="0.5"
                    d="M14.2498 16C14.2498 17.5487 13.576 18.9487 12.4998 19.9025C11.5723 20.7425 10.3473 21.25 8.99976 21.25C6.10351 21.25 3.74976 18.8962 3.74976 16C3.74976 13.585 5.39476 11.5375 7.61726 10.9337C8.22101 12.4562 9.51601 13.6287 11.1173 14.0662C11.5548 14.1887 12.0185 14.25 12.4998 14.25C12.981 14.25 13.4448 14.1887 13.8823 14.0662C14.1185 14.6612 14.2498 15.3175 14.2498 16Z"
                    class="fill-slate-500 dark:fill-navy-200"
                  />
                  <path
                    d="M17.75 9.00012C17.75 9.68262 17.6187 10.3389 17.3825 10.9339C16.7787 12.4564 15.4837 13.6289 13.8825 14.0664C13.445 14.1889 12.9813 14.2501 12.5 14.2501C12.0187 14.2501 11.555 14.1889 11.1175 14.0664C9.51625 13.6289 8.22125 12.4564 7.6175 10.9339C7.38125 10.3389 7.25 9.68262 7.25 9.00012C7.25 6.10387 9.60375 3.75012 12.5 3.75012C15.3962 3.75012 17.75 6.10387 17.75 9.00012Z"
                    class="fill-slate-500 dark:fill-navy-200"
                  />
                  <path
                    fill-opacity="0.3"
                    d="M21.25 16C21.25 18.8962 18.8962 21.25 16 21.25C14.6525 21.25 13.4275 20.7425 12.5 19.9025C13.5763 18.9487 14.25 17.5487 14.25 16C14.25 15.3175 14.1187 14.6612 13.8825 14.0662C15.4837 13.6287 16.7787 12.4562 17.3825 10.9337C19.605 11.5375 21.25 13.585 21.25 16Z"
                    class="fill-slate-500 dark:fill-navy-200"
                  />
                </svg>
              </a>

              <!-- icon 5 -->
              <a
                @if (true)
                    class="flex h-11 w-11 items-center justify-center rounded-lg bg-primary/10 outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"  
                @else
                    class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                @endif
                class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                x-tooltip.placement.right="'placeholder'"
              >
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-palette2" viewBox="0 0 16 16">
                <path d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 .5.5v5.277l4.147-4.131a.5.5 0 0 1 .707 0l3.535 3.536a.5.5 0 0 1 0 .708L10.261 10H15.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5H3a2.99 2.99 0 0 1-2.121-.879A2.99 2.99 0 0 1 0 13.044m6-.21 7.328-7.3-2.829-2.828L6 7.188v5.647zM4.5 13a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zM15 15v-4H9.258l-4.015 4H15zM0 .5v12.495V.5z"/>
                <path d="M0 12.995V13a3.07 3.07 0 0 0 0-.005z"/>
              </svg>
              </a>

              <!-- icon 6 -->
              <a
                @if (true)
                    class="flex h-11 w-11 items-center justify-center rounded-lg bg-primary/10 outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"  
                @else
                    class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                @endif
                class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                x-tooltip.placement.right="'placeholder'"
              >
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
              </svg>
              </a>

              <!-- icon 7 -->
              <a
              @if (true)
                  class="flex h-11 w-11 items-center justify-center rounded-lg bg-primary/10 outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"  
              @else
                  class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              @endif
              class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              x-tooltip.placement.right="'placeholder'"
            >
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-palette-fill" viewBox="0 0 16 16">
              <path d="M12.433 10.07C14.133 10.585 16 11.15 16 8a8 8 0 1 0-8 8c1.996 0 1.826-1.504 1.649-3.08-.124-1.101-.252-2.237.351-2.92.465-.527 1.42-.237 2.433.07zM8 5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm4.5 3a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
            </svg>
            </a>

            </div>

            
          </div>
        </div>

        <!-- Sidebar Panel -->
        <div class="sidebar-panel">
          <div
            class="flex h-full grow flex-col bg-white pr-[var(--main-sidebar-width)] dark:bg-navy-750"
          >
            <!-- Sidebar Panel Header -->
            <div
              class="flex h-18 w-full items-center justify-between pr-4 pl-1"
            >
              <p
                class="text-base tracking-wider text-slate-800 dark:text-navy-100"
              >
                Hire Pharaohs
              </p>
              <button
                @click="$store.global.isSidebarExpanded = false"
                class="btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9 5l7 7-7 7"
                  />
                </svg>
              </button>
            </div>

            <!-- Sidebar Panel Body -->
            <div
              
              class="h-[calc(100%-4.5rem)] overflow-x-hidden pb-6"
              x-init="$el._x_simplebar = new SimpleBar($el);"
              data-simplebar-direction="rtl"
            >
            <ul class="flex flex-1 flex-col px-4 font-inter">
                <li >
                  <a
                    :class="expanded && 'text-slate-800 font-semibold dark:text-navy-50'"
                    @click="expanded = !expanded"
                    @if (request()->routeIs('dashboard'))
                      class="font-medium text-primary dark:text-accent-light flex items-center justify-between py-2 text-xs+ tracking-wide text-slate-500 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                    @else 
                      class="flex items-center justify-between py-2 text-xs+ tracking-wide text-slate-500 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                    @endif
              


                    href="{{ route('dashboard') }}"
                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"

                  >
                    <span>الرئيسية</span>
                   
                  </a>

                  
                  
                </li>
                
              </ul>

              



              <ul class="flex flex-1 flex-col px-4 font-inter">
                <li x-data="accordionItem('menu-item-1')">
                  <a
                    :class="expanded && 'text-slate-800 font-semibold dark:text-navy-50'"
                    @click="expanded = !expanded"
                    class="flex items-center justify-between py-2 text-xs+ tracking-wide text-slate-500 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                    href="javascript:void(0);"
                  >
                    <span>الفريلانسرز</span>
                    <svg
                      :class="expanded && 'rotate-90'"
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 19l-7-7 7-7"
                      />
                    </svg>
                  </a>
                  <ul x-collapse x-show="expanded">
                    <li>
                      <a
                        x-data="navLink"
                        href="{{ route('index-admin-freelancers') }}"
                        :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                        class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-right] duration-300 ease-in-out hover:pr-4"
                      >
                        <div
                          class="flex items-center space-x-2 space-x-reverse"
                        >
                          <div
                            class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                          ></div>
                          <span>عرض الفريلانسرز</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a
                        x-data="navLink"
                        href="{{ route('admin-create-freelancer') }}"
                        :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                        class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-right] duration-300 ease-in-out hover:pr-4"
                      >
                        <div
                          class="flex items-center space-x-2 space-x-reverse"
                        >
                          <div
                            class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                          ></div>
                          <span>اضافة فريلانسر</span>
                        </div>
                      </a>
                    </li>
                    
                  </ul>
                </li>
                
              </ul>


              <ul class="flex flex-1 flex-col px-4 font-inter">
                <li x-data="accordionItem('menu-item-2')">
                  <a
                    :class="expanded && 'text-slate-800 font-semibold dark:text-navy-50'"
                    @click="expanded = !expanded"
                    class="flex items-center justify-between py-2 text-xs+ tracking-wide text-slate-500 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                    href="javascript:void(0);"
                  >
                    <span>اصحاب الاعمال</span>
                    <svg
                      :class="expanded && 'rotate-90'"
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 19l-7-7 7-7"
                      />
                    </svg>
                  </a>
                  <ul x-collapse x-show="expanded">
                    <li>
                      <a
                        x-data="navLink"
                        href="{{ route('dashboard') }}"
                        :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                        class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-right] duration-300 ease-in-out hover:pr-4"
                      >
                        <div
                          class="flex items-center space-x-2 space-x-reverse"
                        >
                          <div
                            class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                          ></div>
                          <span>عرض اصحاب الاعمال</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a
                        x-data="navLink"
                        href="{{ route('dashboard') }}"
                        :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"
                        class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-right] duration-300 ease-in-out hover:pr-4"
                      >
                        <div
                          class="flex items-center space-x-2 space-x-reverse"
                        >
                          <div
                            class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                          ></div>
                          <span>اضافة صاحب عمل</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>

                
              </ul>

              

              

              <ul class="flex flex-1 flex-col px-4 font-inter">
                <li >
                  <a
                    :class="expanded && 'text-slate-800 font-semibold dark:text-navy-50'"
                    @click="expanded = !expanded"
                    @if (true)
                      class="font-medium text-primary dark:text-accent-light flex items-center justify-between py-2 text-xs+ tracking-wide text-slate-500 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                    @else 
                      class="flex items-center justify-between py-2 text-xs+ tracking-wide text-slate-500 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50"
                    @endif
              


                    href="{{ route('dashboard') }}"
                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-500 hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50'"

                  >
                    <span>الرئيسية</span>
                   
                  </a>

                  
                  
                </li>
                
              </ul>

              

              



            </div>
          </div>
        </div>
      </div>

      <!-- App Header Wrapper-->
      <nav class="header print:hidden">
        <!-- App Header  -->
        <div
          class="header-container relative flex w-full bg-white dark:bg-navy-750 print:hidden"
        >
          <!-- Header Items -->
          <div class="flex w-full items-center justify-between">
            <!-- Left: Sidebar Toggle Button -->
            <div class="h-7 w-7">
              <button
                class="menu-toggle ml-0.5 flex h-7 w-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80"
                :class="$store.global.isSidebarExpanded && 'active'"
                @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded"
              >
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>

            <!-- Right: Header buttons -->
            <div class="-ml-1.5 flex items-center space-x-2 space-x-reverse">

              <!-- Logout Button -->  
              <div
              x-effect="if($store.global.isSearchbarActive) isShowPopper = false"
              x-data="usePopper({placement:'bottom-end',offset:12})"
              @click.outside="if(isShowPopper) isShowPopper = false"
              class="flex"
            >
              <button
                @click="isShowPopper = !isShowPopper"
                x-ref="popperRef"
                class="btn relative h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                </svg>

                
              </button>
              <div
                :class="isShowPopper && 'show'"
                class="popper-root"
                x-ref="popperRoot"
              >
                <div
                  x-data="{activeTab:'tabAll'}"
                  class="popper-box mx-4 mt-1 flex max-h-[calc(100vh-6rem)] w-[calc(100vw-2rem)] flex-col rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-800 dark:bg-navy-700 dark:shadow-soft-dark sm:m-0 sm:w-80"
                >
                  
                <div class="mt-3 px-4">
                  <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf

                
                  <button
                  :href="route('logout')"
                  onclick="event.preventDefault();
                                        this.closest('form').submit();"
                    class="btn h-9 w-full space-x-2 space-x-reverse bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                      />
                    </svg>
                    <span>تسجيل خروج</span>
                  </button>
                </form>
                </div>
                  
                </div>
              </div>
            </div>


            <!-- Back Button -->
            <button
            onclick="location.href='{{ url()->previous() }}'"
            class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
            >
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg>
            </button>


             


              

             

        
     
            </div>
          </div>
        </div>
      </nav>



      <main class="main-content w-full px-[var(--margin-x)] pb-8">

        <div class="flex items-center justify-between py-5 lg:py-6">
            <div class="flex items-center space-x-1 space-x-reverse">
              <h2
                class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50 lg:text-2xl"
              >
                {{ $header }}
              </h2>
              
            </div>
          
            
        </div>

        {{ $slot }}


        
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
  
      <!-- Filepond -->
      <script src="{{ asset('js/filepond-plugin-image-preview.js') }}" ></script>
      <script src="{{ asset('js/filepond.js') }}" ></script>

      <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type="file"]');
    
        // Create a FilePond instance
        const pond = FilePond.create(inputElement);

        FilePond.setOptions({
          server: {
              process: '/admin/tmp-upload/{{ Auth::guard('admin')->user()->id }}',
              revert: '/admin/tmp-delete/{{ Auth::guard('admin')->user()->id }}',
              restore: '/admin/restore/',
              load: '/admin/load/',
              fetch: '/admin/fetch/',
              headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
              }
          },
        });
        
    </script>

    
      @livewireScripts
  </body>
</html>
