@if (Route::has('login'))
  <div class="top-right links">
      @auth
          <a href="{{ url('/home') }}">Home</a>
      @else
          <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif

<header class="sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-3" x-data="{open: false}">
  
    <div class="flex items-center justify-between px-4 py-3 sm:p-0">
      <div>
        <img src="{{ url('/images/logo.svg') }}" alt="resturant logo">
      </div>
      <div class="sm:hidden">
        <button x-on:click="open = true" type="button" class="block text-gray-900 hover:text-gray-400 focus:text-gray-400 focus:outline-none">
          <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
            <path x-show="open" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
            <path x-show="!open" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
          </svg>
        </button>
      </div>
    </div>
    <div class="pt-2 pb-4 px-4 sm:bg-white bg-gray-200 text-center sm:flex sm:p-0" x-bind:hidden="!open" x-bind:block="open" @click.away="open = false">
      <a class="px-2 py-1 block sm:inline-block sm:mt-0 sm:ml-4 font-semibold rounded hover:bg-gray-400" href="/">Home</a>
      <a class="mt-1 px-2 py-1 block sm:inline-block sm:mt-0 sm:ml-4 font-semibold rounded hover:bg-gray-400" href="/about">About</a>
      <a class="mt-1 px-2 py-1 block sm:inline-block sm:mt-0 sm:ml-4 font-semibold rounded hover:bg-gray-400" href="/menu">Menu</a>
      <a class="mt-1 px-2 py-1 block sm:inline-block sm:mt-0 sm:ml-4 font-semibold rounded hover:bg-gray-400" href="/order">Order</a>
      <a class="mt-1 px-2 py-1 block sm:inline-block sm:mt-0 sm:ml-4 font-semibold rounded hover:bg-gray-400" href="/contact">Contact</a>
    </div>
  
</header>

@section('page-scripts')
  <script>
    // import 'alpinejs';
  </script>
@endsection