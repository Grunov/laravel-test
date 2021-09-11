
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <h1 style="margin-bottom: 1rem; font-size: 2rem">Create ticket</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  {{-- {{ Auth::user()->name }} --}}

                  @if ($errors->any())
                      <div class="text-red-400">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      <br>
                      <hr>
                      <br>
                  @endif
                  
                  <form action="/tickets" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">

                    <label for="ticket_title">Заголовок</label><br><br>
                    <input type="text" id="ticket_title" name="ticket_title">
                    <br><br>
                    <hr>
                    <br>

                    <label for="name">Имя</label><br><br>
                    <input type="text" id="name" name="name" value="{{ Auth::user()->name }}">
                    <br><br>
                    <hr>
                    <br>

                    <label for="phone">Телефон</label><br><br>
                    <input type="text" id="phone" name="phone">
                    <br><br>
                    <hr>
                    <br>
                    
                    <label for="company">Название компании</label><br><br>
                    <input type="text" id="company" name="company">
                    <br><br>
                    
                    <hr>
                    <br>

                    <label for="message">Сообщение</label><br><br>
                    <textarea id="message" name="message"></textarea>
                    <hr>
                    <br>

                    <label for="file">Прикрепить файл</label><br><br>
                    <input type="file" id="file" name="file">
                    <br><br>
                    <hr>
                    <br>

                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Отправить</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
