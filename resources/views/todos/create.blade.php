<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Adicione a sua lista de tarefas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="/todos" class="w-full px-4 md:w-1/2 lg:w-1/3">
                        @csrf
                        <div class="mb-6">
                            <label for="title" class="mb-3 block text-base font-medium text-black">
                                Adicione sua tarefa:
                            </label>
                            <input
                                name="title" 
                                type="text"
                                placeholder="O que você vai fazer?"
                                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary
                                       active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium
                                       outline-none transition disabled:cursor-default disabled:bg-[#f5f7fd] mb-4">
                            <textarea 
                                name="description" 
                                id="description" 
                                cols="30" 
                                rows="10"
                                class="border-form-stroke text-body-color placeholder-body-color focus:border-primary
                                       active:border-primary w-full rounded-lg border-[1.5px] py-3 px-5 font-medium
                                       outline-none transition disabled:cursor-default disabled:bg-[#f5f7fd]"
                                placeholder="Detalhes da sua tarefa"></textarea>
                        </div>
                        <button
                            type="submit"
                            class="bg-green-500 border border-green-200 inline-flex items-center justify-center rounded-md py-2 px-6 text-center
                                   text-base font-normal text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
                            Adicionar
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
