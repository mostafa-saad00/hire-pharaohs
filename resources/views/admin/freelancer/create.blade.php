<x-app-layout>
    <x-slot name="pageTitle">
        {{ __('اضافة فريلانسر') }}
    </x-slot>

    <x-slot name="header">
        {{ __('اضافة فريلانسر') }}
    </x-slot>






    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
        
        <div class="col-span-12 lg:col-span-12">
          <div class="card">
            <div
              class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5"
            >
              <h2
                class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100"
              >
                ادخل بيانات الفريلانسر
              </h2>
              
            </div>
            <div class="p-4 sm:p-5">

              

                <form action="{{ route('admin-store-freelancer') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div id="error_element">
                        @foreach ($errors->all() as $error)
                        <div 
                            class=" alert flex  space-x-reverse space-x-2 rounded-lg border border-error px-4 py-4 text-error"
                        >
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            >
                            <path
                                fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd"
                            />
                            </svg>
                            <p>{{ $error }}</p>
                        </div>
                            
                        @endforeach
                    </div>
                <div class="flex flex-col">
                    <span
                    class="text-base font-medium text-slate-600 dark:text-navy-100"
                    >الصورة الشخصية</span
                    >      
                    
                    

                <div class="filepond fp-bordered label-icon mt-5">

                  <input type="file"  id="photo" name="picture">

                </div>

              </div>

              <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>

              <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                

                <label class="block">
                    <span class="font-bold">الاسم</span>
                    <span class="relative mt-1.5 flex">
                        <input 
                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="ادخل الاسم بالكامل"
                        type="text"
                        name="name"
                      />
                      
                    </span>
                  </label>
                <label class="block">
                  <span class="font-bold">البريد الالكتروني</span>
                  <span class="relative mt-1.5 flex">
                    <input 
                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="البريد الالكتروني"
                        type="email"
                        name="email"
                      />
                    
                   
                  </span>
                </label>
                <label class="block">
                    <span class="font-bold">الرقم السري</span>
                    <span class="relative mt-1.5 flex">
                      <input 
                          class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                          placeholder="الرقم السري"
                          type="password"
                          name="password"
                        />
                      
                     
                    </span>
                  </label>
                  <label class="block">
                    <span class="font-bold">تأكيد الرقم السري</span>
                    <span class="relative mt-1.5 flex">
                      <input
                          class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                          placeholder="تأكيد الرقم السري"
                          type="password"
                          name="password_confirmation"
                        />
                      
                     
                    </span>
                  </label>
 
              </div>

              <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>


              


                
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 mt-5">
                <label class="block">
                    <span class="font-bold">العنوان</span>
                    <span class="relative mt-1.5 flex">
                        <input name="address"
                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="ادخل العنوان هنا"
                        type="text"
                    />
                    
                    </span>
                </label>
              </div>


              <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">

                <label class="block">
                    <span class="font-bold">الديانة</span>
                    <span class="relative mt-1.5 flex">
                      <select name="religion"
                      class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
                      >
                          <option  value="">اختر الديانة</option>         
                          <option value="مسلم">مسلم</option>         
                          <option value="مسيحي">مسيحي</option>         
                          
                      </select>
                     
                    </span>
                  </label>

                  
                <label class="block">
                    <span class="font-bold">الحالة الصحية</span>
                    <span class="relative mt-1.5 flex">
                        <input name="health"
                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="ادخل الحالة الصحية هنا"
                        type="text"
                    />
                    
                    </span>
                </label>

                <label class="block">
                    <span class="font-bold">تليفون 1</span>
                    <span class="relative mt-1.5 flex">
                        <input name="phone1"
                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="تليفون 1"
                        type="number"
                    />
                    
                    </span>
                </label>
                
                  
                

              </div>

              <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div>
                  <span class="font-bold">الطول</span>
                  <label class="mt-1 flex space-x-reverse -space-x-px">
                    
                    <input
                      name="height"
                      class="form-input w-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="(اختياري)"
                      type="number"
                    />
                    <span
                      class="flex items-center justify-center rounded-l-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-navy-450 dark:bg-navy-500 dark:text-navy-100"
                    >
                      <span>سنتيمتر</span>
                    </span>
                  </label>
                </div>

                <div>
                  <span class="font-bold">الوزن</span>
                  <label class="mt-1 flex space-x-reverse -space-x-px">
                    
                    <input
                      name="weight"
                      class="form-input w-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="(اختياري)"
                      type="number"
                    />
                    <span
                      class="flex items-center justify-center rounded-l-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-navy-450 dark:bg-navy-500 dark:text-navy-100"
                    >
                      <span>كيلو جرام</span>
                    </span>
                  </label>
                </div>

                
                
              </div>

              
              


              <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>




              <div>
              
                <div class="flex items-center justify-between pt-4">
                  <div class="flex items-center space-x-4 space-x-reverse">
                    
                  </div>
                  <div class="flex justify-center space-x-2 space-x-reverse">
                    
                    <button
                    type="submit"
                      class="btn min-w-[7rem] bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                    >
                      حفظ
                    </button>
                  </div>
                </div>
              </div>
              
              </form>
            </div>
          </div>
        </div>
      </div>





      
      <script>
        window.setTimeout(function(){
            var element = document.getElementById("error_element");
            element.classList.add("hidden");

        }, 5000);
    </script>
    









    
</x-app-layout>
