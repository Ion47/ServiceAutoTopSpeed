<!--SCRIPS-->
<script src="https://cdn.tailwindcss.com"></script>
<script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--//SCRIPS-->



<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Servicii</title>
</head>

<!-- HEADER -->
<x-header />
<!-- HEADER -->

<div class="flex flex-col lg:flex-row justify-center gap-[100px] lg:mb-20 py-[100px] lg:pb-[100px]">

    <div class=" lg:mx-0">
        <img src="/images/servicii.jpg" alt="IMAGINE" class="lg:h-[602px] lg:w-[530px] md:w-full object-cover">
    </div>

    <div class="text-center lg:text-left mb-20 lg:mb-0   ">

        <h1 class="font-bold text-gray-800 text-3xl md:text-5xl xl:text-6xl mb-10 lg:mt-[200px]">
            Servicii auto<br>
        </h1>

        <p class="font-normal text-gray-700 text-2xl mb-10">
            Reparații Expertizate, Performanță Optimizată <br> Descoperă Gama Noastră de Servicii Auto!
        </p>

        <div class="space-y-5 lg:space-x-5 mb-10">
            <a href="#contact1"
                class="block md:inline px-8 py-3 font-medium text-indigo-800 xl:text-xl md:text-2xl border-2 border-indigo-800 rounded-md hover:bg-indigo-600 hover:text-white transiton ease-linear duration-300">Contacteaza-ne</a>
        </div>

    </div>

</div>




<!--SECTION-->

<div class="flex justify-center items-center mx-[100px] grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 ">
    <div class="w-full my-1">
        <div class="flex flex-col ">
            <li class="bg-white my-2 block">
                <h2 data-modal-target="static-modal1" data-modal-toggle="static-modal1"
                    class="flex flex-row justify-between items-end font-bold p-3 cursor-pointer w-[280px] h-[280px] border-b border-2 mx-auto">
                    <span class="italic text-2xl">Revizie Tehnică Completă:</span>
                </h2>
                <div id="static-modal1" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                    x-data="{ showModal: false }"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-3xl font-semibold text-gray-900 dark:text-white">
                                    Revizie Tehnică Completă:
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="static-modal1">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <p class="text-base leading-relaxed text-white text-xl">
                                    Experimentează o revizie tehnică detaliată și completă, care include verificarea și
                                    diagnosticarea tuturor sistemelor esențiale ale mașinii tale. De la nivelul de ulei
                                    până la sistemul de frânare și electric, echipa noastră de experți se asigură că
                                    mașina ta funcționează la parametri optimi.
                                </p>
                                <hr>
                                <p class="text-base leading-relaxed text-white text-xl">Pretul poate varia in funtie de
                                    diversi factori. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </div>
    </div>
    <div class="w-full my-1">
        <div class="flex flex-col ">
            <li class="bg-white my-2 block">
                <h2 data-modal-target="static-modal2" data-modal-toggle="static-modal2"
                    class="flex flex-row justify-between items-end font-bold p-3 cursor-pointer w-[280px] h-[280px] border-b border-2 mx-auto">
                    <span class="italic text-2xl">Reparatii Caroserie Profesionale:</span>
                </h2>
                <div id="static-modal2" data-modal-backdrop="static" tabindex="1" aria-hidden="true"
                    x-data="{ showModal: false }"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-3xl font-semibold text-gray-900 dark:text-white">
                                    Reparatii Caroserie Profesionale:
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="static-modal2">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <p class="text-base leading-relaxed text-white text-xl">
                                    Redă-i mașinii tale strălucirea originală cu serviciile noastre de reparare a
                                    caroseriei. De la remedierea micilor deteriorări la repararea impacturilor majore,
                                    echipa noastră calificată utilizează tehnici avansate și materiale de calitate
                                    pentru a restabili aspectul și siguranța vehiculului tău.
                                </p>
                                <hr>
                                <p class="text-base leading-relaxed text-white text-xl">Pretul poate varia in funtie de
                                    diversi factori. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </div>
    </div>
    <div class="w-full my-1">
        <div class="flex flex-col ">
            <li class="bg-white my-2 block">
                <h2 data-modal-target="static-modal3" data-modal-toggle="static-modal3"
                    class="flex flex-row justify-between items-end font-bold p-3 cursor-pointer w-[280px] h-[280px] border-b border-2 mx-auto">
                    <span class="italic text-2xl">Diagnoza Sistemelor Electronice:</span>
                </h2>
                <div id="static-modal3" data-modal-backdrop="static" tabindex="2" aria-hidden="true"
                    x-data="{ showModal: false }"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-3xl font-semibold text-gray-900 dark:text-white">
                                    Diagnoza Sistemelor Electronice:
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="static-modal3">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <p class="text-base leading-relaxed text-white text-xl">
                                    Cu tehnologie de diagnosticare de ultimă generație, efectuăm analize amănunțite ale
                                    sistemelor electronice ale mașinii tale. Astfel, identificăm rapid orice defecțiune
                                    sau anomalie, asigurându-ne că te întorci pe șosea cu încredere în performanța
                                    vehiculului tău.
                                </p>
                                <hr>
                                <p class="text-base leading-relaxed text-white text-xl">Pretul poate varia in funtie de
                                    diversi factori. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </div>
    </div>
    <div class="w-full my-1">
        <div class="flex flex-col ">
            <li class="bg-white my-2 block">
                <h2 data-modal-target="static-modal4" data-modal-toggle="static-modal4"
                    class="flex flex-row justify-between items-end font-bold p-3 cursor-pointer w-[280px] h-[280px] border-b border-2 mx-auto">
                    <span class="italic text-2xl">Service Sistem de Climatizare:</span>
                </h2>
                <div id="static-modal4" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                    x-data="{ showModal: false }"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-3xl font-semibold text-gray-900 dark:text-white">
                                    Service Sistem de Climatizare:
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="static-modal4">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <p class="text-base leading-relaxed text-white text-xl">
                                    Asigură-te că confortul călătoriei tale este întotdeauna maxim. Efectuăm verificări,
                                    întreținere și reparații la sistemul de climatizare, asigurându-ne că mașina ta
                                    rămâne la temperatura ideală în orice condiții meteorologice.
                                </p>
                                <hr>
                                <p class="text-base leading-relaxed text-white text-xl">Pretul poate varia in funtie de
                                    diversi factori. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </div>
    </div>
    <div class="w-full my-1">
        <div class="flex flex-col ">
            <li class="bg-white my-2 block">
                <h2 data-modal-target="static-modal5" data-modal-toggle="static-modal5"
                    class="flex flex-row justify-between items-end font-bold p-3 cursor-pointer w-[280px] h-[280px] border-b border-2 mx-auto">
                    <span class="italic text-2xl">Înlocuire Piese și Consumabile:</span>
                </h2>
                <div id="static-modal5" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                    x-data="{ showModal: false }"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-3xl font-semibold text-gray-900 dark:text-white">
                                    Înlocuire Piese și Consumabile:
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="static-modal5">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <p class="text-base leading-relaxed text-white text-xl">
                                    Oferim o gamă completă de piese și consumabile de înaltă calitate, potrivite pentru
                                    mașina ta. De la schimburi de frâne și suspensii până la înlocuirea filtrelor și
                                    bateriilor, utilizăm doar piese de încredere pentru a menține performanța și
                                    fiabilitatea mașinii tale.
                                </p>
                                <hr>
                                <p class="text-base leading-relaxed text-white text-xl">Pretul poate varia in funtie de
                                    diversi factori. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </div>
    </div>
    <div class="w-full my-1">
        <div class="flex flex-col ">
            <li class="bg-white my-2 block">
                <h2 data-modal-target="static-modal6" data-modal-toggle="static-modal6"
                    class="flex flex-row justify-between items-end font-bold p-3 cursor-pointer w-[280px] h-[280px] border-b border-2 mx-auto">
                    <span class="italic text-2xl">Schimb de Ulei și Filtru:</span>
                </h2>
                <div id="static-modal6" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                    x-data="{ showModal: false }"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-3xl font-semibold text-gray-900 dark:text-white">
                                    Schimb de Ulei și Filtru:
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="static-modal6">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <p class="text-base leading-relaxed text-white text-xl">
                                    Menține-ți motorul în stare optimă cu serviciul nostru de schimb de ulei și filtru.
                                    Utilizăm uleiuri de înaltă calitate și filtre adecvate, oferind mașinii tale
                                    lubrifiere și protecție superioare pentru a prelungi durata de viață a motorului.
                                </p>
                                <hr>
                                <p class="text-base leading-relaxed text-white text-xl">Pretul poate varia in funtie de
                                    diversi factori. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </div>
    </div>
</div>





<!--//SECTION-->


<!--CONTACT-->
<div id="contact1" class="container my-24 mx-auto md:px-6 z-1">
    <section class="mb-32">
        <div class=" h-[200px] ">
        </div>
        <div class="container px-6 md:px-12">
            <div
                class="block rounded-lg bg-indigo-600 px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-[hsla(0,0%,5%,0.7)] dark:shadow-black/20 md:py-16 md:px-12 -mt-[100px] backdrop-blur-[30px]">
                <div class="mx-auto max-w-[500px] flex justify-between flex-row">
                    <form>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="text"
                                class="border-indigo-950 border-2 peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                id="exampleInput90" placeholder="Numele tau" />
                            <label
                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                for="exampleInput90">Numele tau
                            </label>
                        </div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="text"
                                class="border-indigo-950 border-2 peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                id="exampleInput90" placeholder="Telefon" />
                            <label
                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                for="exampleInput90">Telefon
                            </label>
                        </div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="text"
                                class="border-indigo-950 border-2 peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                id="exampleInput90" placeholder="Adresa Email" />
                            <label
                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                for="exampleInput90">Adresa Email
                            </label>
                        </div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="text"
                                class="border-indigo-950 border-2 peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                id="exampleInput91" placeholder="Serie Sasiu" />
                            <label
                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                for="exampleInput91">Serie Sasiu
                            </label>
                        </div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="text"
                                class="border-indigo-950 border-2 peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                id="exampleInput91" placeholder="Motivul contactului" />
                            <label
                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                for="exampleInput91">Motivul contactului
                            </label>
                        </div>

                        <div class="mb-6 inline-block min-h-[1.5rem] justify-center pl-[1.5rem] md:flex">
                            <input
                                class="border-blue-400 border-2 relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                type="checkbox" value="" id="exampleCheck96" checked />
                            <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="exampleCheck96">
                                Sunt de accord cu termenii*
                            </label>
                        </div>
                        <button type="button" data-te-ripple-init data-te-ripple-color="light"
                            class="border-indigo-950 border-2 inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
                            Trimite
                        </button>
                    </form>
                    <form action="">
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <textarea
                                class="border-indigo-950 border-2 peer block h-full w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
                            <label for="exampleFormControlTextarea1"
                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Mesaj</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<!--//CONTACT-->

<!--GMAP-->
<div class="relative w-full h-96 -z-1 lg:mb-[70px]">
    <iframe class="absolute top-0 left-0 w-full h-full"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.6241025504305!2d25.69478389993721!3d44.43809957458504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40adf6741c57a705%3A0x5c4b32651df00e2d!2sMalu%20Spart!5e0!3m2!1sro!2sro!4v1704822809077!5m2!1sro!2sro"
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!--/GMAP-->


<!-- FOOTER -->
<x-footer />
<!-- FOOTER -->

</html>
