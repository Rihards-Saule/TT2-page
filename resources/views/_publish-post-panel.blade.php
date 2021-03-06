<div class="border border-orange-400 rounded-lg px-8 py-6 mb-8">
  <form method="POST" action="/posts">
    @csrf

    <textarea
      name="body"
      class="w-full"
      placeholder="Write here..."
    ></textarea>

    <hr class="my-4">

    <footer class="flex justify-between">
      <img
          src="{{ auth()->user()->avatar }}"
          alt="That's you!"
          class="rounded-full mr-2"
      >
      <button
          type="submit"
          class="bg-orange-500 rounded-full shadow py-2 px-4 text-white"
      >
          Submit
      </button>
    </footer>
  </form>
  @error('body')
    <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
  @enderror
</div>
