<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Todo list
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>

                        @if ($errors->any())
                            <div class="bf-red-100 border border-red-400 text-red-700 px-4 rounded reative">
                                <strong class="font-bold">Desculpa!</strong>
                                <span class="block sm:inline">{{ $errors>first() }}</span>
                            </div>
                        @endif

                        <a class="bg-green-500 border border-green-200 inline-flex items-center justify-center rounded-md py-2 px-6 text-center
                                  text-base font-normal text-white hover:bg-opacity-90 lg:px-8 xl:px-10 mb-6" href="/todos/create">Adicionar</a>
                    </div>
                    @forelse ($todos as $todo)
                        <ul>
                            <li class="mb-4 flex">
                                <a href="/todos/{{ $todo->id }}">{{ $todo->title }}</a>
                                <span class="ml-4 border-orange-500 bg-orange-200 px-2 inline-block">
                                    <a href="/todos/{{ $todo->id }}/edit">Editar</a>
                                </span>
                                <form action="/todos/{{ $todo->id }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="ml-4 border border-red-500 bg-red-200 px-2" type="submit">Delete</button>
                                </form>
                            </li>
                        </ul>
                    @empty
                        Você ainda não adicionou nenhuma tarefa.
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
