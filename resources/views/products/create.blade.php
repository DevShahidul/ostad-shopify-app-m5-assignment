@extends('layouts.app')

@section('content')

<section class="relative py-28 bg-gray-900">
  <div class="relative z-10 max-w-screen-xl mx-auto text-gray-600 sm:px-4 md:px-8">
    <div class="max-w-lg space-y-3 px-4 sm:mx-auto sm:text-center sm:px-0">
        <a
            href="{{URL::tokenRoute('product.index')}}"
            class="inline-block px-4 py-2 text-white duration-150 font-medium bg-indigo-600 rounded-lg hover:bg-indigo-500 active:bg-indigo-700 md:text-sm"
        >
            Back to products
        </a>
      <p class="text-white text-3xl font-semibold sm:text-4xl">
        Create product
      </p>
      <p class="text-gray-300">
        Please fill out the form bellow to create product.
      </p>
    </div>
    <div class="mt-12 mx-auto px-4 p-8 bg-white sm:max-w-lg sm:px-8 sm:rounded-xl">
      <form method="POST" action="{{ route('product.store') }}" class="space-y-5">
        <div>
          <label for="product_name" class="font-medium">
            name
          </label>
          <input
            type="text"
            required
            name="name"
            id="product_name"
            class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-gray-800 shadow-sm rounded-lg"
          />
        </div>
        <div>
          <label for="product_description" class="font-medium">
            Description
          </label>
          <textarea required id="product_description" name="description" class="w-full mt-2 h-36 px-3 py-2 resize-none appearance-none bg-transparent outline-none border focus:border-gray-800 shadow-sm rounded-lg"></textarea>
        </div>
        <button
          class="w-full px-4 py-2 text-white font-medium bg-gray-800 hover:bg-gray-700 active:bg-gray-900 rounded-lg duration-150"
        >
          Submit
        </button>
      </form>
    </div>
  </div>
  <div class='absolute inset-0 blur-[118px] max-w-lg h-[800px] mx-auto sm:max-w-3xl sm:h-[400px]' style="background: linear-gradient(106.89deg, rgba(192, 132, 252, 0.11) 15.73%, rgba(14, 165, 233, 0.41) 15.74%, rgba(232, 121, 249, 0.26) 56.49%, rgba(79, 70, 229, 0.4) 115.91%)"></div>
</section>
@endsection
