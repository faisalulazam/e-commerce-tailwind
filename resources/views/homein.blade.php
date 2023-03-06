<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Welcome Home Page</title>
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body> 
  <div class="bg-slate-100 ">




    <div class="mx-auto container min-h-screen bg-slate-100  hover:bg-contain">
     <nav class="flex justify-between items-center mx-auto">
       <a href="#">E-Commerce</a>
       <ul class="flex items-center " >
         {{-- <div class="  list-none inline-block px-16  ">
           <form>
               <input type="text" placeholder="Search your Product  ">
           </form ></div> --}}
           <input type="text" name="search" class="mt-3  px-24 py-5 bg-white border shad placeholder-slate-400 focus:outline-none  w-full rounded-md sm:text-sm " placeholder="Search your product" />
         <li class="list-none inline-block px-9 "><a href="#" class="no-underline text-black " >Home</a></li>
         <li class="list-none inline-block px-5 " ><a href="#" class="no-underline text-black ">Countac</a></li>
         <li class="list-none inline-block px-5 " ><a href="#" class="no-underline text-black ">About</a></li>
        
       </ul>
       <img class=" w-20 " src="img/cart.png" alt="">
     </nav>
     
    <div class="flex justify-between gap-4 ">

      <div class="w-3/12 col-start-1 col-span-2 bg-slate-200 " >


        <ul class="list-none py-4  " >
          <li class="py-2 "><a href="#" class=" live_product">Live Product Demu</a></li>
          <li class="py-2"><a href="#" class="pricing" >Pricing</a></li>
          <li class="py-2"><a href="#" class="contact">Contact us</a></li>
          <li class="py-2"><a href="#" class="resource">Resource</a></li>
          <li class="py-2"><a href="#" class="book_a">Book a Demo</a></li>
          <li class="py-2"><a href="#" class="free_days">Free 30 Days Trail</a></li>
   </ul>


        
        <img class=" my-20 h-auto w-full gap-4 border border-white rounded-md " src="img/ledar.png" alt="">  



        <h2 class=" text-2xl mx-0 gap-6 ">NEWSLETTER</h2>
        <h2 class="text-left mx-0 ">Enter your email address below </br>to subscribe to my newsletter</h2>
        <input type="text" name="search" class="mt-2 mx-0  px-10 py-5 w-72 border border-black bg-white border shad placeholder-slate-400 focus:outline-none  w-full rounded-md sm:text-sm " placeholder="EMAIL ADDRESS" /></br>
        <button class="border border-black w-72 py-4 mt-4 rounded-md bg-slate-50 mx-0   " type="button ">Subscrive Now!</button>


        <img class=" w-full" src="img/company_pro.png" alt="">
      </div>




 



            <div class="w-9/12 col-start-1 col-span-2 bg-slate-200 " >
  
              <img class=" px-80 h-15 w-auto " src="img/item1.png" alt="">


              <h3 class="text-2xl text-center"> Product</h3>

              <div class="flex my-12 ">



         
               
                
                   

                  <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="img/product5.jpg" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2">Lampshade</div>
                      <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                      </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                  </div>


              
                {{-- <div class=" my-14 mx-4 "> 
                  <img class=" h-64 w-56 border border-white rounded-md"src="img/product10.jpg" alt=""> 
                  <h3 class="text-2xl text-center"> Dining Chair </h3>
                </div> --}}

                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                  <img class="w-full" src="img/product10.jpg" alt="Sunset in the mountains">
                  <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                    <p class="text-gray-700 text-base">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                  </div>
                  <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                  </div>
                </div>



                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                  <img class="w-full" src="img/product11.jpg" alt="Sunset in the mountains">
                  <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Woolen Scarp</div>
                    <p class="text-gray-700 text-base">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                  </div>
                  <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                  </div>
                </div>


                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                  <img class="w-full" src="img/product12.jpg" alt="Sunset in the mountains">
                  <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Tripod Lampshade</div>
                    <p class="text-gray-700 text-base">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                  </div>
                  <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                  </div>
                </div>

                {{-- <div class="my-14 mx-4 "> 
                  <img class=" h-64 w-56 border border-white rounded-md"src="img/product11.jpg" alt=""> 
                  <h3 class="text-2xl text-center"> Woolen Scarp</h3>
                </div>
                <div class="my-14 mx-4 "> 
                  <img class=" h-64 w-56 border border-white rounded-md"src="img/product12.jpg" alt=""> 
                  <h3 class="text-2xl text-center"> Tripod Lampshade</h3>
                </div> --}}
              </div>
     

            
                
              
             <div  class=" flex  bg-slate-50 ">
                 
                  <img class=" h-60 w-auto border border-white rounded-md"src="img/sell.jpg" alt=""> 

                  <img class="  w-auto border border-white rounded-md"src="img/banner-full.jpg" alt=""> 
                
            </div>
        
            <div class="flex">

              <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-contain rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"  title="Woman holding a mug">
                  <img src="/img/ledar2.png" alt="">
                </div>
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                  <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                      
                      Members only
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                    <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                  </div>
                </div>
              </div>

              <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <div class="h-48 pt-10 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" title="Woman holding a mug">
                  <img src="/img/sun_gls.png" alt="">
                </div>
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                  <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                      <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                      </svg>
                      Members only
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                    <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                  </div>
                </div>
              </div>

            </div>
            <div class="flex">

              <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <div class="h-48 w-auto lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"  title="t-shirt">
                  <img src="/img/t-shirt.png" alt="">
                </div>
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                  <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                      {{-- <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                      </svg> --}}
                      Members only
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                    <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                  </div>
                </div>
              </div>

              <div class="max-w-sm w-full lg:max-w-full lg:flex">
                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" title="wallet">
                  <img src="/img/wallet.png" alt="">
                </div>
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                  <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                      {{-- <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                      </svg> --}}
                      Members only
                    </p>
                    <div class="text-gray-900 font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                    <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                  </div>
                </div>
              </div>



            </div>
       </div>       
  </div>



  </div>
  <div>
    <h1 class=" mt-8 border w-auto h-80 bg-slate-800 text-center text-4xl">Fotter </h1>
 </div>

</body>
</html>