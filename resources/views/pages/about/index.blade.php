<x-app-layout>
    <div class="flex flex-col md:flex-row p-4">
        <div class="md:w-1/2 p-2">
            <h1 class="text-xl font-semibold mb-2 text-center">About Me</h1>
            <p class="text-justify mb-1">
                I'm a full-stack developer based on Indonesia. I have a serious passion in web and mobile programming,
                trying a new
                tech it so satisfying. </p>

            <p class="text-justify mb-1">
                Excellent problem solving skills, landing page development, web content management, collaborative
                skills. Love singing, movies, TV series and a little outdoor activity.</p>

            <p class="text-justify mb-4">
                Interested in the entire frontend backend spectrum and working on ambitious projects with positive
                people.</p>
            </p>

            <hr>
            <h1 class="text-xl font-semibold mb-2 mt-4 text-center">Cukup tentang saya, Aplikasi apa ini ??</h1>

            <p class="text-justify mb-1">Aplikasi ini saya kerjakan karna saya sedang jenuh mengerjakan project utama.
                Tercipta saat saya sedang
                santai sambil scroll browser untuk mencari secercah hiburan. </p>

            <p class="text-justify mb-1">Alangkah terkejutnya saya malah menemukan
                chat - chat lucu yang membantu menjernikah pikiran saya yang sedang kusut. Tak lain dan tak bukan adalah
                chat -
                chat dari orang - orang unmoral, adab-less, job-less. </p>

            <p class="text-justify">Sehingga terbesit dibenak saya untuk membuat template chat bagi orang - orang
                seperti ini yang jempolnya sudah tidak di berikan petunjuk agar dapat tetap bisa bersosialisasi.</p>
        </div>
        <div class="md:w-1/2">
            <div class="container mx-auto max-w-sm rounded-lg overflow-hidden shadow-lg my-2 bg-white">
                <div class="relative z-10" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0 calc(100% - 5vw));">
                    <img class="w-full" src="{{ asset('img/pp.jpg') }}" alt="Profile image" />
                    <div class="text-center absolute w-full" style="bottom: 4rem">
                        <p class="text-gray-600 tracking-wide uppercase text-lg font-bold">Reno Nugraha</p>
                        <p class="text-gray-400 text-sm">@_renonugraha</p>
                    </div>
                </div>
                <div class="relative flex justify-between items-center flex-row px-6 z-50 -mt-10">
                </div>
                <div class="pt-10 pb-8 text-gray-600 text-center">
                    <p>Fullstack Developer </p>
                    <p class="text-sm">Coding from Universe 1211</p>
                </div>

                <div class="pb-10 uppercase text-center tracking-wide flex justify-around">
                    <div>
                        <a class="rounded text-white text-2xl px-3 py-2 m-1 border-b-4 hover:border-b-0 border-l-2 hover:border-l-0 transition-all duration-100 shadow-lg bg-blue-700 border-blue-800 hover:border-blue-900"
                            href="https://github.com/nugrahadevelopers">
                            <div class="fab fa-github"></div>
                        </a>
                    </div>
                    <div>
                        <a class="rounded text-white text-2xl px-3 py-2 m-1 border-b-4 hover:border-b-0 border-l-2 hover:border-l-0 transition-all duration-100 shadow-lg bg-blue-700 border-blue-800"
                            href="https://www.instagram.com/_renonugraha/">
                            <div class="fab fa-instagram"></div>
                        </a>
                    </div>
                    <div>
                        <a class="rounded text-white text-2xl px-3 py-2 m-1 border-b-4 hover:border-b-0 border-l-2 hover:border-l-0 transition-all duration-100 shadow-lg bg-blue-700 border-blue-800"
                            href="#">
                            <i class="fas fa-globe-asia"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>