<x-layouts.users>
    <div class="max-w-7xl mx-auto px-4 space-y-4">
        <div class="grid grid-cols-12 gap-2 md:gap-4">
            <div class="col-span-full lg:col-span-8">
                <x-card>
                    <div class="">
                        <div class=" rounded-xl p-2">
                            <div class="bg-gray-300 h-96 rounded-xl"></div>
                            <div class="py-4">
                                <h3 class="line-clamp-2 text-md font-bold text-gray-800">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ullam sint itaque
                                    pariatur, reiciendis expedita quod suscipit minima veritatis ex.
                                </h3>
                                <ul class="text-xs text-gray-600 py-4">
                                    <li>Fecha de publicación:<b> 01/01/2023</b></li>
                                    <li>Autor:<b> John Doe</b></li>
                                </ul>
                                @for ($i = 0; $i < 6; $i++)
                                <p class="text-gray-600 text-sm py-2">
                                    @for ($x = 0; $x < rand(2, 10); $x++)
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam accusantium perferendis nam libero id voluptatem suscipit modi. Ex, explicabo dignissimos. Culpa, unde qui. Obcaecati ullam excepturi assumenda optio voluptatibus necessitatibus!
                                    @endfor
                                </p>
                                @endfor
                            </div>
                        </div>
                    </div>
                </x-card>
            </div>
            <div class="col-span-full lg:col-span-4">
                @include('users.citizens.partials.sidebar-box')
            </div>
        </div>
    </div>
</x-layouts.users>