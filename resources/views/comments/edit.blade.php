<x-layout>
    <x-section>
        <x-form method="PATCH" action="/comments/{{ $comment->id }}">    
            <div class="mb-6">
                <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="border border-gray-400 p-2 w-full">{{ $comment->body }}</textarea>
                @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white py-2 px-4 hover:bg-blue-500">Submit</button>
            </div>
        </x-form>

        <form action="/comments/{{ $comment->id }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-400 text-white p-2">Delete this post</button>
        </form>
    </x-section>
</x-layout>