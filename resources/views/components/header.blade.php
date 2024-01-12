<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

</script>

<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</head>

<div class="fixed w-full z-10">
    <nav class="bg-white border-gray-200 py-2.5  ">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="/" class="flex items-center">
                {{-- <img src="" class="h-6 mr-3 sm:h-9" alt="Firma Logo" /> --}}
                <span class="self-center text-xl font-semibold whitespace-nowrap">Top Speed Mist</span>
            </a>
            <div class="flex items-center lg:order-2">
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-semibold text-xl lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="/"
                            class="block py-4 pl-3 pr-4 rounded lg:bg-transparent lg:text-indigo-800 lg:p-0 "
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/.#aboutus" onclick="ScrollTo('aboutus')"
                            class="block py-4 pl-3 pr-4 rounded lg:bg-transparent lg:text-indigo-800 lg:p-0 "
                            aria-current="page">About Us</a>
                    </li>
                    <li>
                        <a href="servicii"
                            class="block py-4 pl-3 pr-4 rounded lg:bg-transparent lg:text-indigo-800 lg:p-0"
                            aria-current="page">Servicii</a>
                    </li>
                    <li>
                        <a href="faq"
                            class="block py-4 pl-3 pr-4 rounded lg:bg-transparent lg:text-indigo-800 lg:p-0 "
                            aria-current="page">FAQ</a>
                    </li>
                    <li>
                        <a href="contact"
                            class="block py-2 pl-3 pr-4 rounded lg:bg-transparent lg:text-indigo-800 lg:p-0 "
                            aria-current="page">Contact</a>
                    </li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <script>
        const menubtn = document.getElementById('menu-button');
        const menu = document.getElementById('menu');
        menubtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        })
    </script>
</div>




</html>
