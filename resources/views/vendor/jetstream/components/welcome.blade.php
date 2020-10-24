<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        {{-- <x-jet-application-logo class="block h-12 w-auto" /> --}}
    </div>

    <div class="mt-2 text-2xl">
        Welcome {{ Auth::user()->name}} to your Luculos application!
    </div>
    <ol class="list-group list-group-horizontal">
      <li class="list-group-item"> <a href=" {{route('categories.index')}}">Categories</a>  </li>
      <li class="list-group-item"> <a href=" {{route('products.index')}}">Products</a>  </li>
      <li class="list-group-item"> <a href="{{route('pages.index')}}">Pages</a>  </li>
    </ol>


</div>
