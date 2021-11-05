<td colspan="5">
    <div>
        <label for="email" class="block text-sm ml-3 font-medium text-black-700 font-bold">Name</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="">
                <input type="text"  wire:model.debounce='userName' class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md"
                       placeholder="Veuillez entrer votre nouveau nom">
            </div>

        </div>
        @error('userName')
        <p class="mt-2 ml-4 text-sm text-red-600 font-bold" id="email-error">{{ $message }}</p>
        @enderror
    </div>
    <div class="mt-2 mb-2 ml-2">
            <button  class='rounded px-2 py-2 bg-green-400 text-white' wire:click="save"> Sauvegarder </button>
    </div>
</td>
