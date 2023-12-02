@extends('layouts.app')

@section('content')

<section class="py-16">
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">
      <div class="max-w-md">
        <h1 class="text-gray-800 text-xl font-extrabold sm:text-2xl">
          Welcome to my shopify application
        </h1>
        <p class="text-gray-600 mt-2">
          Here I will show you all the information of my shop
        </p>
      </div>
      <ul class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
          <li class="border border-gray-300 rounded-lg">
            <div class="flex items-start justify-between p-4">
              <div class="space-y-2">
                <h4
                  class="text-gray-800 font-semibold"
                >Shop name: {{ $shopDomain ?? Auth::user()->name }}</h4>
                <p class="text-green-600 text-lg">Shop id: {{ $shopDomain ?? Auth::user()->id }}</p>
              </div>
            </div>
            <div class="py-5 px-4 border-t border-gray-300 text-right">
              <a
                href="https://github.com/DevShahidul/ostad-shopify-app-m5-assignment.git"
                target="_blank"
                class="text-indigo-600 hover:text-indigo-500 text-sm font-medium"
              >
                View source code
              </a>
            </div>
          </li>
      </ul>
    </div>
  </section>
@endsection
