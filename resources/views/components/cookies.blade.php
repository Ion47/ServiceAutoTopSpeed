<script src="https://cdn.tailwindcss.com"></script>



<div x-data="{ open: false }" x-init="() => setTimeout(() => open = true, 500)">

    <div x-show="open" x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter="transition duration-200 transform ease"
        x-transition:leave="transition duration-200 transform ease" x-transition:leave-end="opacity-0 scale-90"
        class="max-w-screen-lg mx-auto fixed bg-white inset-x-5 p-5 bottom-20 rounded-lg drop-shadow-2xl flex gap-4 flex-wrap md:flex-nowrap text-center md:text-left items-center justify-center md:justify-between">
        <div class="w-full">Acest site web folosește cookie-uri pentru a vă asigura că aveți cea mai bună experiență pe
            site-ul nostru.
            <a href="cookiespage" class="text-indigo-600 whitespace-nowrap  hover:underline">Află mai multe</a>
        </div>
        <div class="flex gap-4 items-center flex-shrink-0">
            <button @click="open = false, (() => open = true, 1500)"
                class="text-indigo-600 focus:outline-none hover:underline">Refuz</button>
            <button @click="open = false, (() => open = true, 1500)"
                class="bg-indigo-500 px-5 py-2 text-white rounded-md hover:bg-indigo-700 focus:outline-none">Accept</button>
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
