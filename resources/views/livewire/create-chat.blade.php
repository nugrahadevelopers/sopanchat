<div>
    <label class="block text-sm font-medium text-gray-700">Jenis Template</label>
    <select wire:model="jenisChat"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm mb-4">
        <option value="">Custom</option>
        @foreach ($chats as $chat )
        <option value="{{ $chat->slug }}">{{ $chat->jenis }}</option>
        @endforeach
    </select>

    <label class="block text-sm font-medium text-gray-700">No Tujuan</label>
    <input wire:model="nomorTujuan"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm mb-4"
        placeholder="6281122334455"></input>

    <label class="block text-sm font-medium text-gray-700">Pesan</label>
    <textarea wire:model="isiPesan" rows="5"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm mb-4">
        {{-- @if ($jenisChat == "chat-dosen")
            Hallo
            @elseif ($jenisChat == "chat-hrd")
            Hai
        @endif --}}
    </textarea>

    <button wire:click="buatLink"
        class="bg-gray-600 hover:bg-gray-500 text-white px-4 py-2 rounded-md shadow-sm">Chat</button>
</div>