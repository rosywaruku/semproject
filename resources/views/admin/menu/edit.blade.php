@extends('laratrust::panel.layout')

@section('title', 'Edit Food Item')

@section('content')
<div class="flex flex-col border">
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-32">
        @csrf
        <form action="" method="post">
            <label class="block my-4">
                <span class="text-gray-700">Food Name</span>
                <input
                  class="form-input mt-1 block w-full"
                  name="name"
                  value="{{$item->name}}"
                  autocomplete="off"
            
                >
            </label>
            <label class="block my-4">
                <span class="text-gray-700"> Category</span>
                <select class="form-select block w-full mt-1" x-model="model">
                  <option value="{{$itemcategory}}"selected>{{$itemcategory}}</option>
                  @foreach ($categories as $category)
                    <option value="{{$category}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </label>
            <label class="block my-4">
                <span class="text-gray-700">Description</span>
                <input
                  class="form-input mt-1 block w-full"
                  name="description"
                  value="{{$item->description}}"
                  autocomplete="off"
                >
              </label>
              <label class="block my-4">
                <span class="text-gray-700">Price</span>
                <input
                  class="form-input mt-1 block w-full"
                  name="price"
                 value="{{$item->price}}"
                  autocomplete="off"

                >
              </label>

        <div class="flex justify-end mb-4">
          <a 
                href="{{route('admenu')}}" class="btn btn-red mr-4">Cancel
          </a>
          <button class="btn btn-blue" type="submit">Save</button>
        </div>
      </form>
    </div>
  </div>
  @endsection