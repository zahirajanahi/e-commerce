<x-app-layout>
    <div class="flex justify-evenly">
        <div class="leftSide">
            <h1 class="text-5xl ms-10 pt-20 text-[#005C78] font-bold font-mono">Make Your Fashion Look </h1>
            <h1 class="text-5xl ms-28 pt-3 text-[#005C78] font-bold font-mono">More Charming</h1>
            <p class="w-[40vw] pt-10 text-center text-xl text-gray-800">
                Discover your personal style and make a statement with every outfit. Shop with us to elevate your wardrobe and bring your fashion game to the next level.
            </p>
            <button class="mt-20 ms-5 text-white bg-[#3e3121] px-7 py-3 rounded-full flex items-center gap-5">
                Shop now <i class="fa-solid fa-arrow-right border-[1px] rounded-full p-2"></i>
            </button>
        </div>

        <div class="rightSide">
            <img src="{{ asset('storage/images/products/téléchargement (4).png') }}" class="pt-10 w-[25vw] h-[70vh] rounded-xl" alt="logo">
        </div>
    </div>
   <section class="pt-32 ">
     <h1 class="pb-10 text-2xl font-serif text-center">New Arrival</h1>
    <div class="flex ">
        @foreach ($products as $product)
            <div class="w-[32%] bg-[#FCF8F3] text-center relative">
                <div class="relative group">
                    <!-- Product Image with Opacity Change on Hover -->
                    <img class="w-[40vw] h-[70vh] object-contain p-5 transition-opacity duration-500 group-hover:opacity-80" src="{{ asset('storage/images/products/' . $product->image) }}" alt="{{ $product->name }}">
                    
                    <!-- Add to Cart Button -->
                    <form method="post" action="{{ route('cart.add', $product) }}" class="absolute inset-0 top-72 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        @csrf @method('PUT')
                        <button class="w-[10vw] py-2 bg-[#3e3121] text-white rounded-full hover:bg-[#2c2319]">Add To Cart</button>
                    </form>
                </div>
                <div class="p-4">
                    <h1 class="font-bold text-xl text-[#3e3121]">{{ $product->name }}</h1>
                    <p class="text-gray-600 text-lg">{{ $product->price }} $</p>
                    @if ($product->stock <= 0)
                        <button class="w-full py-2 text-red-500 rounded-full border border-gray-300 cursor-not-allowed mt-4">Out Of Stock</button>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    
  
    <div class=" ms-10 mt-8 pb-10">
        <a href="{{ route('home.showAll', ['show_more' => 'true']) }}" class="text-[#3C5B6F] border-[1px] border-[#3C5B6F] hover:text-white duration-500 transition rounded-full hover:bg-[#005C78] px-3 py-4 font-light text-sm">Show More</a>
    </div>

   </section>


   <section>
    <div class="flex justify-center pt-20 pb-20">
         <img src="{{ asset('storage/images/products/item2.png') }}" class="w-[35vw] h-[50vh] object-cover"  alt="logo">
          <div class="bg-[#D8C4B6] w-[35vw] h-[50vh]">
            <h2 class=" ms-10 pt-10 font-serif text-lg text-[#3e3121] font-bold ">Limited offer</h2>
            <h1 class="text-[#fcf8f3] text-4xl ms-4 pt-7 font-bold font-serif">35% off only this friday and get special gift</h1>

            <button class="bg-[#fcf8f3] px-3 py-2 rounded-lg mt-10 ms-10 text-lg  flex items-center gap-3">Grap it now <i class="fa-solid fa-arrow-right text-[#3e3121] pt-1 text-sm"></i></button>
        </div>
    </div>
   

    </section> 
     <section>
        <div class="min-h-screen">
          
            
          
            <section class="py-20 ">
              <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-[#3e3121] mb-4">
                  Subscribe to our newsletter to get updates
                </h2>
                <h3 class="text-2xl md:text-3xl font-bold text-[#3e3121] mb-6">
                  to our latest collections
                </h3>
                <p class="text-gray-600 mb-8">
                  Get 20% off on your first order just by subscribing to our newsletter
                </p>
                
                <form class="max-w-2xl mx-auto">
                  <div class="flex flex-col sm:flex-row gap-4 items-center justify-center">
                    <div class="relative flex-grow">
                      <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                      </svg>
                      <input
                        type="email"
                        placeholder="Enter your email"
                        class="w-full pl-12 pr-4 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required
                      />
                    </div>
                    <button
                      type="submit"
                      class="px-8 py-3 bg-gray-800 text-white rounded-full hover:bg-gray-800 transition-colors duration-300 whitespace-nowrap"
                    >
                      Subscribe
                    </button>
                  </div>
                </form>
                
                <p class="text-sm text-gray-500 mt-4">
                  You will be able to unsubscribe at any time.{' '}
                  <a href="/privacy-policy" class="text-blue-600 hover:underline">
                    Read our Privacy Policy here
                  </a>
                </p>
              </div>
            </section>
      
            <footer class="bg-[#FEFAF6] pt-16 pb-12 border-t border-gray-100">
              <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            
                  <div class="col-span-1 md:col-span-1">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Aurora</h2>
                    <p class="text-gray-600 mb-4">
                      Specialists in providing high-quality, stylish fashion for the modern individual.
                    </p>
                    <div class="flex space-x-4">
                      <a href="#" class="text-gray-400 hover:text-gray-500">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path fillRule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clipRule="evenodd" />
                        </svg>
                      </a>
                      <a href="#" class="text-gray-400 hover:text-gray-500">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path fillRule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clipRule="evenodd" />
                        </svg>
                      </a>
                      <a href="#" class="text-gray-400 hover:text-gray-500">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                      </a>
                    </div>
                  </div>
      
               
                  <div>
                    <h3 class="text-gray-900 font-semibold mb-4">SHOP</h3>
                    <ul class="space-y-3">
                      <li><a href="#" class="text-gray-600 hover:text-gray-900">All Collections</a></li>
                      <li><a href="#" class="text-gray-600 hover:text-gray-900">Winter Edition</a></li>
                      <li><a href="#" class="text-gray-600 hover:text-gray-900">New Arrivals</a></li>
                      <li><a href="#" class="text-gray-600 hover:text-gray-900">Discounts</a></li>
                    </ul>
                  </div>
      
                
                  <div>
                    <h3 class="text-gray-900 font-semibold mb-4">COMPANY</h3>
                    <ul class="space-y-3">
                      <li><a href="#" class="text-gray-600 hover:text-gray-900">About Us</a></li>
                      <li><a href="#" class="text-gray-600 hover:text-gray-900">Contact</a></li>
                      <li><a href="#" class="text-gray-600 hover:text-gray-900">Careers</a></li>
                      <li><a href="#" class="text-gray-600 hover:text-gray-900">Privacy Policy</a></li>
                    </ul>
                  </div>
      
                
                  <div>
                    <h3 class="text-gray-900 font-semibold mb-4">SUPPORT</h3>
                    <ul class="space-y-3">
                      <li><a href="#" class="text-gray-600 hover:text-gray-900">FAQs</a></li>
                      <li><a href="#" class="text-gray-600 hover:text-gray-900">Cookie Policy</a></li>
                      <li><a href="#" class="text-gray-600 hover:text-gray-900">Terms of Service</a></li>
                      <li><a href="#" class="text-gray-600 hover:text-gray-900">Support Center</a></li>
                    </ul>
                  </div>
                </div>
      
                <div class="mt-12 pt-8 border-t border-gray-100">
                  <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-600 text-sm">
                      © 2024 Aurora. All rights reserved.
                    </p>
                    <div class="flex items-center space-x-4 mt-4 md:mt-0">
                      <img src="https://raw.githubusercontent.com/simple-icons/simple-icons/develop/icons/visa.svg" alt="Visa" className="h-8 w-auto" />
                      <img src="https://raw.githubusercontent.com/simple-icons/simple-icons/develop/icons/mastercard.svg" alt="Mastercard" className="h-8 w-auto" />
                      <img src="https://raw.githubusercontent.com/simple-icons/simple-icons/develop/icons/paypal.svg" alt="PayPal" className="h-8 w-auto" />
                    </div>
                  </div>
                </div>
              </div>
            </footer>
          </div>
     </section>
</x-app-layout>
