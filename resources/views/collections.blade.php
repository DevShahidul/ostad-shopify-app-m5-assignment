@extends('layouts.app')

@section('content')

<section class="pt-16">
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">
        <div className="items-start justify-between md:flex">
            <div class="max-w-md">
                <h1 class="text-gray-800 text-xl font-extrabold sm:text-2xl">
                Welcome to my shopify application
                </h1>
                <p class="text-gray-600 mt-2">
                Here I will show you all the collections of my shop
                </p>
            </div>
            <div className="mt-3 md:mt-0">
                <a
                    href="javascript:void(0)"
                    className="inline-block px-4 py-2 text-white duration-150 font-medium bg-indigo-600 rounded-lg hover:bg-indigo-500 active:bg-indigo-700 md:text-sm"
                >
                    create collection
                </a>
            </div>
        </div>

      <div className="mt-12 shadow-sm border rounded-lg overflow-x-auto">
            <table className="w-full table-auto text-sm text-left">
                <thead className="bg-gray-50 text-gray-600 font-medium border-b">
                    <tr>
                        <th className="py-3 px-6">name</th>
                        <th className="py-3 px-6">description</th>
                        <th className="py-3 px-6"></th>
                    </tr>
                </thead>
                <tbody className="text-gray-600 divide-y">
                    <tr>
                        <td className="px-6 py-4 whitespace-nowrap">Name will here</td>
                        <td className="px-6 py-4 whitespace-nowrap">description here</td>
                        <td className="text-right px-6 whitespace-nowrap">
                            <a href="javascript:void()" className="py-2 px-3 font-medium text-indigo-600 hover:text-indigo-500 duration-150 hover:bg-gray-50 rounded-lg">
                                Edit
                            </a>
                            <button href="javascript:void()" className="py-2 leading-none px-3 font-medium text-red-600 hover:text-red-500 duration-150 hover:bg-gray-50 rounded-lg">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </section>
@endsection
