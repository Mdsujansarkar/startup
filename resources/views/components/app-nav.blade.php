<nav class="border-b">
    <div x-data="{showMenu : false}" class="container max-w-screen-lg mx-auto flex justify-between h-14">
        <!-- Brand-->
        <a href="" class="flex items-center cursor-pointer hover:bg-purple-50 px-2 ml-3">
            <!-- Logo-->
            <div class="rounded bg-purple-400 text-white font-bold w-10 h-10 flex justify-center text-3xl pt-0.5">P</div>
            <div class="text-gray-700 font-semibold ml-2">My PodCast</div>
        </a>
        <!-- Navbar Toggle Button -->
        <button @click="showMenu = !showMenu" class="block md:hidden text-gray-700 p-2 rounded hover:border focus:border focus:bg-gray-100 my-2 mr-5" type="button" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
        <!-- Nav Links-->
        <ul class="md:flex text-gray-700 text-base mr-3 origin-top"
            :class="{ 'block absolute top-14 border-b bg-white w-full p-2': showMenu, 'hidden': !showMenu}"
            id="navbar-main" x-cloak>
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="#">Laravel</a>
            </li>
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="#">Livewire</a>
            </li>
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="#">TailwindCSS</a>
            </li>
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="#">Alpine JS</a>
            </li>
            <li class="px-3 cursor-pointer hover:bg-purple-50 flex items-center hover:text-gray-800" :class="showMenu && 'py-1'">
                <a href="#">About</a>
            </li>
        </ul>
    </div>
</nav>
