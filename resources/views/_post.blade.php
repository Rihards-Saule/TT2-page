<div class="flex p-3 border border-b-gray-400">
  <div class="mr-1 flex-shrink-0">
    <a href="{{ route('profile', $post->user) }}">
      <img
          src="{{ auth()->user()->avatar }}"
          alt=""
          class="rounded-full mr-2"
      >
    </a>
  </div>

  <div>
    <h5 class="font-bold mb-4">
      <a href="{{ route('profile', $post->user) }}">
        {{ $post->user->name }}
      </a>
    </h5>
    <p class="text-sm">
      {{ $post->body }}
    </p>
  </div>
</div>
