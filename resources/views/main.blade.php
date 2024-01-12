<!--SCRIPTS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>


<!--Content Square SCRIPT-->
<script>
    function displayText(text) {
        document.getElementById('selected-text').innerText = text;
        document.getElementById('image-display').src = "/images/templateimg.jpg";
    }
</script>
<!--//Content Square SCRIPT-->


<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <title>Main Page</title>
</head>

<!-- HEADER -->
<x-header />
<!-- HEADER -->

<div class="flex flex-col lg:flex-row justify-center gap-[100px] lg:mb-20 py-[100px] lg:pb-[100px]">

    <div class=" lg:mx-0">
        <img src="/images/main.jpg" alt="IMAGINE" class="lg:h-[602px] lg:w-[530px] md:w-full object-cover">
    </div>

    <div class="text-center lg:text-left mb-20 lg:mb-0   ">

        <h1 class="font-bold text-gray-800 text-3xl md:text-5xl xl:text-6xl mb-10 lg:mt-[200px]">
            TOP SPEED MIST
        </h1>

        <p class="font-normal text-gray-700 text-2xl mb-10">
            Accelerăm Performanța și Fiabilitatea <br> Destinația ta pentru Service Auto de încredere și
            Eficiență!
        </p>

        <div class="space-y-5 lg:space-x-5 mb-10">
            <a href="contact"
                class="block md:inline px-8 py-3 font-medium text-indigo-800 xl:text-xl md:text-2xl border-2 border-indigo-800 rounded-md hover:bg-indigo-600 hover:text-white transiton ease-linear duration-300">Contacteaza-ne</a>
        </div>

    </div>

</div>

<!--Content Square-->
<!--pieceofshit-->
<div class=" flex overflow-auto items-center h-[300px]">
<div class="justify-center mx-auto">
    <ul class="flex flex-row text-center gap-6 md:text-xl ">
        <li class="square w-[350px] h-[233px] bg-gray-200 rounded-t-lg" id="square-1"
            onclick="displayText('Expertiza noastră în domeniul motoarelor este fundamentată pe pasiune și cunoștințe solide. Îngrijirea și întreținerea motorului sunt esențiale pentru performanța și longevitatea mașinii tale. De la revizii complete la reparații complexe, punem la dispoziție soluții precise și profesionale pentru a menține motorul mașinii tale în cea mai bună formă.')">
              <p class="italic font-semibold">Motor</p>
              <img src="/images/engine.jpg" alt=""> </li>
        <li class="square w-[350px] h-[233px] bg-gray-200 rounded-t-lg" id="square-2"
            onclick="displayText('Caroseria este cartea de vizită a mașinii tale. La noi găsești servicii de reparare și întreținere pentru caroserie, de la remedierea micilor zgârieturi până la restaurarea completă a caroseriei. Echipa noastră de specialiști lucrează cu atenție la detalii pentru a-ți reda mașina aspectul său original și pentru a asigura durabilitatea și siguranța acesteia.')">
            <p class="italic font-semibold">Caroserie</p>
            <img src="/images/bodycar.jpg" alt=""></li>
        <li class="square w-[350px] h-[233px] bg-gray-200 rounded-t-lg" id="square-3"
            onclick="displayText('Sistemele electrice moderne necesită atenție și expertiză specializată. La noi, te poți baza pe soluții precise și diagnostice avansate pentru problemele electrice ale mașinii tale. De la verificarea și reparația circuitelor electrice la întreținerea sistemelor complexe de iluminare și control, oferim servicii profesionale pentru a menține funcționalitatea optimă a sistemelor electrice.')">
            <p class="italic font-semibold">Electrica</p>
            <img src="/images/electrica.jpg" alt=""></li>
        <li class="square w-[350px] h-[233px] bg-gray-200 rounded-t-lg" id="square-4"
            onclick="displayText('Consumabilele reprezintă inima sănătății mașinii tale. Înțelegem importanța folosirii pieselor de calitate și a materialelor potrivite pentru a menține performanța și fiabilitatea vehiculului tău. Oferim produse și piese de schimb de încredere, adaptate nevoilor tale, pentru a asigura funcționalitatea optimă și siguranța în trafic.')">
            <p class="italic font-semibold">Consumabile</p>
            <img src="/images/consumabile.jpg" alt=""></li>
        <li class="square w-[350px] h-[233px] bg-gray-200 rounded-t-lg" id="square-5"
            onclick="displayText('Diagnoza precisă este cheia pentru rezolvarea eficientă a problemelor tehnice. Echipa noastră de experți folosește echipamente de diagnosticare de ultimă generație pentru a identifica rapid și precis problemele dinamice sau statice ale mașinii tale. Oferim soluții personalizate și eficiente pentru a-ți restabili mașina la performanța optimă.')">
            <p class="italic font-semibold">Diagnoza</p>
            <img src="/images/diagnoza.jpg" alt="diagnoza" width="350px" height="233px"></li>
    </ul>
</div>
</div>


<div class="lg:flex flex-row items-center justify-center grid my-12">
    <div class="text-left mt-10 flex flex-col xl:w-[700px] xl:h-[300px] md:w-[600px] md:h-[400px] ">
        <p id="selected-text" class="my-auto md:text-xl font-semibold">Bine ați venit la Top Speed Mist - destinația ta de încredere pentru
            întreținerea și
            repararea mașinii tale. Cu o echipă dedicată și o expertiză vastă în domeniul auto, ne concentrăm pe
            oferirea celor mai bune soluții pentru nevoile tale. De la servicii specializate pentru motor, caroserie și
            sisteme electrice, până la diagnosticare precisă și oferirea de consumabile de înaltă calitate, suntem aici
            pentru a-ți asigura o experiență sigură și fiabilă pe drumurile tale. Fiecare mașină are povestea ei, iar
            noi suntem aici să ne asigurăm că fiecare capitol se desfășoară fără probleme. Descoperă calitatea și
            profesionalismul nostru în fiecare detaliu și lasă-ne să ne ocupăm de mașina ta cu pasiunea și expertiza
            noastră!</p>
    </div>

    <img class="ml-4 mt-10 sm:w-[550px] sm:h-[550px] lg:w-[300px] lg:h-[300px] md:mx-6 sm:mx-auto" id="image-display"
        src="/images/templateimg.jpg" alt="Image">
</div>

<!--/Content Square-->


<!--ABOUT US-->
<section id="aboutus" class="py-[100px]">
    <div class="bg-gray-200 py-6 my-5 py-[100px]">
        <div class="flex items-center justify-center mb-10">
            <h1 class="font-bold text-gray-800 text-2xl md:text-4xl xl:text-4xl lg:pb-[25px]">About Us</h1>
        </div>


        <div class="container mx-auto px-4">
            <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class=" my-auto">
                    <img src="/images/aboutus.jpg" alt="Company image" class="w-full h-[450px] object-cover">
                </div>
                <div class="my-auto">
                    <h2 class="md:text-2xl lg:text-3xl font-bold mb-4"> Despre Top Speed Mist</h2>
                    <p class="md:text-xl lg:text-lg text-justify font-semibold">La Top Speed Mist, pasiunea noastră
                        pentru mașini se îmbină perfect
                        cu expertiza noastră tehnică. Suntem o echipă dedicată de profesioniști în domeniul auto, cu o
                        devotare fermă pentru a oferi servicii de calitate superioară și pentru a depăși așteptările
                        clienților noștri.</p>

                    <p class="md:text-xl lg:text-lg text-justify font-semibold">
                        Valorile noastre se bazează pe transparență, profesionalism și dedicare. Ne angajăm să fim
                        onesti și să comunicăm deschis cu fiecare client, oferind servicii personalizate care să se
                        potrivească nevoilor specifice ale fiecărui vehicul și ale fiecărui șofer.</p>

                    <p class="md:text-xl lg:text-lg text-justify font-semibold">
                        Echipa noastră este formată din experți pasionați și experimentați, pregătiți să rezolve orice
                        problemă și să ofere soluții eficiente pentru mașina ta. Fiecare proiect reprezintă o
                        oportunitate de a demonstra profesionalismul nostru și de a crea experiențe care să îți
                        consolideze încrederea în noi.</p>
                </div>

            </div>

        </div>

    </div>
</section>
<!--/ABOUT US-->



<div class="flex items-center justify-center mb-10 pt-20">
    <h1 class="font-bold text-gray-800 text-2xl md:text-4xl xl:text-4xl">Contact service auto</h1>
</div>

<!--GMAP-->
<div class="relative w-full h-96 -z-1 lg:mb-[70px]">
    <iframe class="absolute top-0 left-0 w-full h-full"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.6241025504305!2d25.69478389993721!3d44.43809957458504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40adf6741c57a705%3A0x5c4b32651df00e2d!2sMalu%20Spart!5e0!3m2!1sro!2sro!4v1704822809077!5m2!1sro!2sro"
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!--/GMAP-->

<!--4CASETE-->

<section class="py-8 md:py-16">
    <div class="container  mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 lg:gap-5">

            <div class="text-center mb-10 xl:mb-0 bg-neutral-200 mx-2 rounded-[20px]">
                <div class="flex items-center justify-center">
                    <div class="w-24 my-9 flex justify-center text-indigo-500 rounded-md">
                        <ion-icon name="call-outline" class="text-6xl"></ion-icon>
                    </div>
                </div>

                <h2 class="font-semibold text-gray-700 text-xl md:text-3xl mb-5">
                    Suna acum:
                </h2>

                <p class="font-normal text-sm md:text-lg">
                    La numarul: <br />
                    0749 276 966 <br />
                </p>
            </div>

            <div class="text-center mb-10 xl:mb-0 bg-neutral-200 mx-2 rounded-[20px]">
                <div class="flex items-center justify-center">
                    <div class="w-24 my-9 flex justify-center  text-indigo-500 rounded-md">
                        <ion-icon name="mail-open-outline" class="text-6xl"></ion-icon>
                    </div>
                </div>

                <h2 class="font-semibold text-gray-700 text-xl md:text-3xl mb-5">
                    Trimite Email:
                </h2>

                <p class="font-normal text-sm md:text-lg">
                    topspeedmist@gmail.com <br />
                </p>
            </div>

            <div class="text-center mb-10 xl:mb-0 bg-neutral-200 mx-2 rounded-[20px]">
                <div class="flex items-center justify-center">
                    <div class="w-24 my-9 flex justify-center  text-indigo-500 rounded-md">
                        <ion-icon name="navigate-outline" class="text-6xl"></ion-icon>
                    </div>
                </div>

                <h2 class="font-semibold text-gray-700 text-xl md:text-3xl mb-5">
                    Locatia:
                </h2>

                <p class="font-normal text-sm md:text-lg">
                    Giurgiu, Malu Spart, Nr. 470I
                </p>
            </div>

            <div class="text-center mb-10 xl:mb-0 bg-neutral-200 mx-2 rounded-[20px]">
                <div class="flex items-center justify-center">
                    <div class="w-24 my-9 flex justify-center text-indigo-500 rounded-md">
                        <ion-icon name="time-outline" class="text-6xl"></ion-icon>
                    </div>
                </div>

                <h2 class="font-semibold text-gray-700 text-xl md:text-3xl mb-5">
                    Program de lucru:
                </h2>

                <p class="font-normal text-sm md:text-lg">
                    Luni - Vineri: 9.30 - 19.30 <br />
                    Sambata: 9.30 - 13.30 <br />
                    Duminica: inchis
                </p>
            </div>
        </div>
    </div>
</section>
<!--4CASETE-->


<!-- COOKIES -->
<x-cookies />
<!-- COOKIES -->


<!-- FOOTER -->
<x-footer />
<!-- FOOTER -->


</html>
