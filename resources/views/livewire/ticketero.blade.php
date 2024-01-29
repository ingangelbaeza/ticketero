<div>
    <x-layout.base>
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="mx-auto max-w-2xl">
                <div class="text-center">
                    <h2 class="text-xl text-gray-800 font-bold sm:text-3xl dark:text-white">
                        Post a comment
                    </h2>
                    <p class="mt-3 text-gray-600 dark:text-gray-400">
                        Puede obtener sugerencias de nombres de artistas, lugares y destinos mediante la función de
                        autocompletar.
                    </p>
                </div>

                <div class="mt-5 p-4 relative z-10 bg-white border rounded-xl sm:mt-10 md:p-10">
                    <div class="mb-4 sm:mb-8">
                        <x-input.input-base label="Buscador" name="search"/>
                    </div>

                    <div class="mt-6 grid">
                        <x-button.button-full label="Enviar" action="send"/>
                    </div>
                </div>
            </div>
        </div>

        @if(isset($results))
            <div class="py-10 lg:py-14 mx-auto">
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                        Resultados de destinos
                                    </h2>
                                </div>

                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="overflow-hidden">
                                                @if(!empty($results['data']['results']['destinations']))
                                                    <table
                                                        class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                id
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                name
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                code
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                                                country
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                state
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                                                lat
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                lng
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                                                radius
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                airport
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                                                typeSearch
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                                                api
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                        @foreach($results['data']['results']['destinations'] as $item)
                                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['id'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['name'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['code'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['country'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['state'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['lat'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['lng'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['radius'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['airport'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['typeSearch'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    <x-button.button-base label="ver"
                                                                                          action="destination({{ $item['lat'] }}, {{ $item['lng'] }}, '{{ $item['name'] }}')"/>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <div class="max-w-xl relative z-10 text-center mx-auto m-6">
                                                        <div class="mb-5">
                                                            <p class="mt-3 text-gray-500 dark:text-gray-400">
                                                                No hay información disponible
                                                            </p>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-10 lg:py-14 mx-auto">
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div
                                class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                        Resultados de artistas
                                    </h2>
                                </div>

                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="overflow-hidden">
                                                @if(!empty($results['data']['results']['performers']))
                                                    <table
                                                        class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                id
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                name
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                typeSearch
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                api
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                        @foreach($results['data']['results']['performers'] as $item)
                                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['id'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['name'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['typeSearch'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    <x-button.button-base label="ver"
                                                                                          action="performer({{ $item['id'] }})"/>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <div class="max-w-xl relative z-10 text-center mx-auto m-6">
                                                        <div class="mb-5">
                                                            <p class="mt-3 text-gray-500 dark:text-gray-400">
                                                                No hay información disponible
                                                            </p>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-10 lg:py-14 mx-auto">
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div
                                class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                        Resultados de lugares
                                    </h2>
                                </div>

                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="overflow-hidden">
                                                @if(!empty($results['data']['results']['venues']))
                                                    <table
                                                        class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                id
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                name
                                                            </th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                typeSearch
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">

                                                        @foreach($results['data']['results']['venues'] as $item)
                                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['id'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['name'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $item['typeSearch'] }}
                                                                </td>
                                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    <x-button.button-base label="ver"
                                                                                          action="venue({{ $item['id'] }})"/>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                @else
                                                    <div class="max-w-xl relative z-10 text-center mx-auto m-6">
                                                        <div class="mb-5">
                                                            <p class="mt-3 text-gray-500 dark:text-gray-400">
                                                                No hay información disponible
                                                            </p>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </x-layout.base>
</div>
