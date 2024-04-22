@csrf

<label class="uppercase text-white text-xs">Título</label>
<span class="text-xs text-red-600">@error('title') {{ $message }} @enderror</span>

<input type="text" name="title" class="rounded border-gray-200 text-gray-900 w-full mb-4" value="{{ old('title', $post->title) }}">

<label class="uppercase text-white text-xs">Contenido</label>
<span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>

<textarea name="body" rows="5" class="rounded border-gray-200 text-gray-900 w-full mb-4">{{ old('body', $post->body) }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-800">Volver</a>

    <input type="submit" value="Enviar" class="bg-white text-black rounded px-4 py-2 cursor-pointer">
</div>