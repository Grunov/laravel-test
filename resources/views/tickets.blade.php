
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <h1 style="margin-bottom: 1rem; font-size: 2rem">Tickets</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  @forelse ($tickets as $ticket)
                    <h3 style="font-size: 1.5rem;">{{ $ticket->ticket_title }}</h3>
                    <p><b>Имя:</b> {{ $ticket->name }}</p>
                    <p><b>Телефон:</b> {{ $ticket->phone }}</p>
                    <p><b>Компания:</b> {{ $ticket->company }}</p>
                    <p><b>Сообщение:</b> {{ $ticket->message }}</p>
                    <p><b>Файл:</b> {{ $ticket->file_url }}</p>
                    <br>
                    <a href="{{ url('/storage/files/' . $ticket->file_url) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" download>Скачать</a>
                    <br>
                    <br>
                    <hr>
                    <br>
                  @empty
                    <h3>Empty content</h3>
                  @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
