<x-app-layout>
    <div class="flex p-4">
        <div class="w-full">
            <h1 class="font-bold text-4xl">Sopan Chat</h1>
            <span class="font-light">Sopan kah begitu ?!</span>

            <p class="mt-4 text-justify">
                Template chat bagi anda - anda yang males ngetik.
                aplikasi ini akan membuatkan link instan ke chat WhatsApp anda.
                Pilih template chat sesuai kebutuhan dan klik chat,
                maka aplikasi WhatsApp akan terbuka dan siap mengirim pesan.
            </p>

            <div class="mt-4">
                <livewire:create-chat></livewire:create-chat>
            </div>
        </div>
        {{-- <div class="w-full lg:w-1/2 mt-4 md:mt-0 md:border-l-2 border-gray-700 pl-2">
            <h1 class="font-bold text-xl">Tutorial</h1>
            <div class="flex flex-col mt-4 mb-4">
                <span>1. Pilih jenis chat</span>
                <span>2. Masukan nomor hp</span>
                <span>3. Klik chat untuk mengirim pesan</span>
            </div>
        </div> --}}
    </div>
</x-app-layout>