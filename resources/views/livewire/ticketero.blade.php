<div>
    <x-layout.base>

        <!-- Hero -->
        <div class="relative overflow-hidden">
            <div class="mx-auto py-10 sm:py-24">
                <div class="text-center">
                    <h1 class="text-4xl sm:text-6xl font-bold text-gray-800 dark:text-gray-200">
                        Buscador
                    </h1>

                    <p class="mt-3 text-gray-600 dark:text-gray-400">
                        Puede obtener sugerencias de nombres de artistas, lugares y destinos mediante la función de
                        autocompletar. Además, puede limitar su búsqueda a un número exacto de resultados.
                    </p>

                    <div class="mt-7 sm:mt-12 mx-auto max-w-xl relative">
                        <!-- Form -->
                        <div
                            class="relative z-10 flex space-x-3 p-3 bg-white border rounded-lg shadow-lg shadow-gray-100 dark:bg-slate-900 dark:border-gray-700 dark:shadow-gray-900/[.2]">
                            <div class="flex-[1_0_0%]">
                                <label for="hs-search-article-1"
                                       class="block text-sm text-gray-700 font-medium"><span
                                        class="sr-only">Buscador...</span></label>
                                <input type="email" name="search" id="hs-search-article-1" wire:model="search"
                                       class="py-2.5 px-4 block w-full border-transparent rounded-lg focus:border-blue-500 focus:ring-blue-500"
                                       placeholder="Buscador...">
                            </div>
                            <div class="flex-[0_0_auto]">
                                <x-button.button-base label="buscar" action="aaa"/>
                            </div>
                        </div>
                        <!-- End Form -->

                    </div>

                </div>
            </div>
        </div>
        <!-- End Hero -->


        <div class="py-10 lg:py-14 mx-auto">
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div
                            class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                            <!-- Header -->
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                    Resultados de destinos
                                </h2>
                            </div>
                            <!-- End Header -->

                            <!-- Table -->
                            <div class="flex flex-col">
                                <div class="-m-1.5 overflow-x-auto">
                                    <div class="p-1.5 min-w-full inline-block align-middle">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                <thead>
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">id</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">name</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">code</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">country</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">state</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase"> lat</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">lng</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase"> radius</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">airport</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">typeSearch</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">api</th>
                                                </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                @if(isset($results))
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
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Table -->
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
                            class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                            <!-- Header -->
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                    Resultados de artistas
                                </h2>
                            </div>
                            <!-- End Header -->

                            <!-- Table -->
                            <div class="flex flex-col">
                                <div class="-m-1.5 overflow-x-auto">
                                    <div class="p-1.5 min-w-full inline-block align-middle">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                <thead>
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">id</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">name</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">typeSearch</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">api</th>
                                                </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                @if(isset($results))
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
                                                                <x-button.button-base label="ver" action="performer({{ $item['id'] }})"/>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Table -->
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
                            class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                            <!-- Header -->
                            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                    Resultados de lugares
                                </h2>
                            </div>
                            <!-- End Header -->

                            <!-- Table -->
                            <div class="flex flex-col">
                                <div class="-m-1.5 overflow-x-auto">
                                    <div class="p-1.5 min-w-full inline-block align-middle">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                <thead>
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">id</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">name</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">typeSearch</th>
                                                </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                @if(isset($results))
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
                                                                <x-button.button-base label="ver" action="venue({{ $item['id'] }})"/>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Table -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout.base>
</div>
