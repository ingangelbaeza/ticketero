<div>
    <x-layout.base>

        <div class="relative mx-auto max-w-4xl grid space-y-5 sm:space-y-10">
            <div class="text-center">
                <h1 class="text-3xl text-gray-800 font-bold sm:text-5xl lg:text-6xl lg:leading-tight dark:text-gray-200">
                    Destino
                </h1>
            </div>

            <div class="mx-auto max-w-2xl sm:flex sm:space-x-3 p-3 bg-white border rounded-lg shadow-lg shadow-gray-100 dark:bg-slate-900 dark:border-gray-700 dark:shadow-gray-900/[.2]">
                <div class="pb-2 sm:pb-0 sm:flex-[1_0_0%]">
                    <label for="hs-hero-name-1" class="block text-sm font-medium dark:text-white">
                        <span class="sr-only">Fecha de incio</span>
                    </label>
                    <input type="date" wire:model="startDate"
                           class="py-3 px-4 block w-full border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600"
                           placeholder="Fecha de incio">
                </div>
                <div class="pt-2 sm:pt-0 sm:ps-3 border-t border-gray-200 sm:border-t-0 sm:border-s sm:flex-[1_0_0%] dark:border-gray-700">
                    <label for="hs-hero-email-1" class="block text-sm font-medium dark:text-white">
                        <span class="sr-only">Fecha de fin</span>
                    </label>
                    <input type="date" wire:model="endDate"
                           class="py-3 px-4 block w-full border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600"
                           placeholder="Fecha de fin">
                </div>
                <div class="pt-2 sm:pt-0 sm:ps-3 border-t border-gray-200 sm:border-t-0 sm:border-s sm:flex-[1_0_0%] dark:border-gray-700">
                    <label for="hs-hero-email-1" class="block text-sm font-medium dark:text-white">
                        <span class="sr-only">Radio de busquda en KM</span>
                    </label>
                    <input type="number" wire:model="radius"
                           class="py-3 px-4 block w-full border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600"
                           placeholder="Radio KM">
                </div>
                <div class="pt-2 sm:pt-0 grid sm:block sm:flex-[0_0_auto]">
                    <x-button.button-base label="Buscar" action="getByDestination"/>
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
                                    Resultados de performers
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    @if(isset($destinations))
                                        {{ $destinations['data']['count'] }} resultados
                                    @endif
                                </p>
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
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">event_id</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">event_name</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">event_date</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">event_time</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">event_datetext</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">event_datetime</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">venue_name</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">primary_category</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">categories</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">location</th>
                                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">geolocation</th>
                                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">prices</th>
                                                </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                                @if(isset($destinations))
                                                    @foreach($destinations['data']['results'] as $destination)
                                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                {{ $destination['event_id'] }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                {{ $destination['event_name'] }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                {{ $destination['event_date'] }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                {{ $destination['event_time'] }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                {{ $destination['event_datetext'] }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                {{ $destination['event_datetime'] }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                {{ $destination['venue_name'] }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                {{ $destination['primary_category'] }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                @foreach($destination['categories'] as $category)
                                                                    -{{ $category }}<br>
                                                                @endforeach
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                {{ $destination['location']['city_name'] }}, {{ $destination['location']['country_name'] }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                latitud: {{ $destination['geolocation']['latitude'] }} <br>
                                                                longitud: {{ $destination['geolocation']['longitude'] }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                {{ $destination['prices']['currency'] }}
                                                                {{ $destination['prices']['lowPrice'] }}
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
