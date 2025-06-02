@php
$services = [
[
'title' => 'Servicios al ciudadano',
'route' => 'services.users',
'path' => 'users',
],
[
'title'=>'Servicios al comerciante',
'route' => 'services.merchants',
'path' => 'merchants',
],
[
'title'=>'Servicios al contador',
'route' => 'services.accountants',
'path' => 'accountants',
]
];
@endphp
<ul class="space-y-2 pt-4">
    @foreach ($services as $service)

    <li class="">
        <a href="{{ route($service['route']) }}" @class(['bg-gray-100 hover:bg-gray-200 flex justify-between
            items-center text-sm text-gray-800 p-2 rounded', 'bg-gray-200'=> request()->is('*/'.$service['path'])])
            @disabled(request()->is('*/'.$service['path']))>
            <span>
                {{ $service['title'] }}
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd"
                        d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                        clip-rule="evenodd" />
                </svg>

            </span>
        </a>
    </li>
    @endforeach
</ul>