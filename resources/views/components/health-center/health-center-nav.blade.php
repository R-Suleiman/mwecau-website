  {{-- side bar --}}
  <div class="block lg:hidden w-full bg-blue-800 sticky top-0 left-0 z-50">
      <div class="w-full flex items-center justify-between px-4 py-2">
          <div class="w-2/12 mr-auto">
              <img src="../../img/mwecau.png" alt="mwecau logo" class="w-10/12 rounded">
          </div>
          <div class="small-header font-semibold mx-auto text-white uppercase text-lg">
              <h1>Mwecau Health Center</h1>
          </div>
          <div class="w-1/12 ml-auto text-white text-xl text-center hover:cursor-pointer" id="open-nav"><i
                  class="ml-auto fa fa-bars"></i></div>
      </div>

      <aside
          class="fixed top-0 right-0 w-full py-2 block bg-purple-500 bg-opacity-90 bg-black-300 h-screen transform transition-transform duration-300 ease-out scale-0"
          id="navbar">
          <div class="w-1/12 text-white text-2xl text-center hover:cursor-pointer ml-auto mr-6" id="close-nav"><i
                  class="ml-auto fa fa-multiply"></i></div>
          <ul class="w-full pt-4 flex flex-col items-center text-lg text-white font-semibold">
              <a href="{{ route('health-center.index') }}"
                  class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                  <li>Home</li>
              </a>
              <a href="{{ route('health-center.about-us') }}"
                  class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                  <li>About US</li>
              </a>
              <li class="px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400 group relative">
                  <a href="{{route('health-center.departments')}}">Departments <i class="fa fa-angle-down text-xs ml-1"></i></a>
              </li>

              <a href="{{ route('health-center.services') }}"
                  class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                  <li>Services</li>
              </a>
              <a href="{{ route('health-center.events') }}"
                  class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                  <li>Events</li>
              </a>
              <a href="#" class="px-4 py-3 hover:text-purple-800 hover:border-b-2 border-purple-800">
                  <li>Gallery</li>
              </a>
          </ul>
      </aside>
  </div>

  {{-- main nav --}}
  <div class="hidden lg:flex w-full items-center justify-between py-2 px-8 bg-purple-800 sticky top-0 z-50">
      <div class="w-4/12">
          <a href="/" class="w-full flex items-center lg:mr-auto">
              <img src="../../img/mwecau.png" alt="mwecau logo"
                  class="w-3/12 rounded transition-transform duration-1000 mr-2" id="logo">
              <div class="w-9/12 flex flex-col text-sm lg:text-xl footer-header text-white">
                  <span>Health Center</span>
                  <span>Mwenge Catholic University</span>
              </div>
          </a>
      </div>

      <nav class="w-8/12 py-2">
          <ul class="w-max ml-auto flex items-center text-lg text-white font-semibold">
              <a href="{{ route('health-center.index') }}"
                  class="px-3 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                  <li>Home</li>
              </a>
              <a href="{{ route('health-center.about-us') }}"
                  class="px-3 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                  <li>About US</li>
              </a>
              {{-- <a href="" class="px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400"> --}}
              <li class="px-3 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400 group relative">
                  <a href="{{route('health-center.departments.web')}}">Departments</a>
              </li>

              {{-- </a> --}}
              <a href="{{ route('health-center.services') }}"
                  class="px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                  <li>Services</li>
              </a>
              <a href="{{ route('health-center.events') }}"
                  class="px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                  <li>Events</li>
              </a>
              <a href="#" class="px-4 py-2 hover:text-purple-400 hover:border-b-2 border-purple-400">
                  <li>Gallery</li>
              </a>
          </ul>
      </nav>
  </div>
