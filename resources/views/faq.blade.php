<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <title>FAQ</title>
</head>

<!-- HEADER -->
<x-header />
<!-- HEADER -->

<body>

    <body class="h-screen bg-blue-50  ">
        <main class="p-5 bg-light-blue py-[50px]">
            <div class="flex justify-center items-start my-20">
                <div class="w-full sm:w-10/12 md:w-1/2 my-1">
                    <h2 class="text-xl font-semibold mb-2 text-center mt-8">FAQ - Intrebari si raspunsuri.</h2>
                    <ul class="flex flex-col">
                        <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span>Care sunt semnele că mașina mea are nevoie de o revizie sau de întreținere?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div x-ref="tab" :style="handleToggle()"
                                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all">
                                <p class="p-3 text-gray-900">
                                    Unele semne pot include lumini aprinse pe tabloul de bord, zgomote neobișnuite,
                                    vibrații sau schimbări în performanța vehiculului. O revizie periodică poate preveni
                                    agravarea problemelor.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span>Care este diferența între uleiul sintetic și cel conventional?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab" :style="handleToggle()">
                                <p class="p-3 text-gray-900">
                                    Uleiul sintetic este mai pur și oferă o protecție mai bună la temperaturi extreme și
                                    în condiții de condus dificile. Are, de asemenea, un interval de schimb mai lung
                                    decât uleiul conventional.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg" x-data="accordion(3)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span>Cum să îmi mențin bateria mașinii în stare bună?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab" :style="handleToggle()">
                                <p class="p-3 text-gray-900">
                                    Pentru a menține o baterie sănătoasă, asigurați-vă că bornele sunt curate, evitați
                                    lăsarea luminilor sau accesoriilor pornite când motorul nu este în funcțiune și
                                    faceți verificări periodice ale stării bateriei.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg" x-data="accordion(4)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span>De ce este importantă verificarea și schimbarea filtrelor mașinii?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab" :style="handleToggle()">
                                <p class="p-3 text-gray-900">
                                    Filtrele (ulei, aer, combustibil) sunt vitale pentru funcționarea corectă a mașinii.
                                    Ele împiedică impuritățile să ajungă la motor sau la alte componente importante,
                                    menținând performanța și durabilitatea acestora.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg" x-data="accordion(5)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span>Cum pot să-mi mențin mașina în stare bună în timpul sezonului rece?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab" :style="handleToggle()">
                                <p class="p-3 text-gray-900">
                                    Verificarea nivelului de antigel, a bateriei, a sistemului de încălzire, a
                                    cauciucurilor de iarnă și a sistemului de frânare sunt esențiale pentru pregătirea
                                    mașinii pentru sezonul rece.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg" x-data="accordion(6)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span>Cât timp ar trebui să aștept pentru o programare la service?</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                x-ref="tab" :style="handleToggle()">
                                <p class="p-3 text-gray-900">
                                    Depinde de volumul de lucru al service-ului și de disponibilitatea dvs. în programul
                                    acestuia. Încercați să faceți o programare cu cât mai mult timp înainte pentru a vă
                                    asigura un loc în timp util.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </body>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0
            });

            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>


 


    <!-- FOOTER -->
    <x-footer />
    <!-- FOOTER -->

</body>

</html>
