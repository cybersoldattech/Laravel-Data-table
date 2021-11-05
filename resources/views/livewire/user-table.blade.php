<div class="flex flex-col mt-4">
    <div class="mt-1 mx-auto mx-1 mb-4">
        <input type="text" wire:model.debounce="search" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Recherche...">
    </div>
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <x-table-header :direction="$orderDirection" label="Email" name="email" :field="$orderField" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></x-table-header>
                        <x-table-header :direction="$orderDirection" label="Name" name="name" :field="$orderField" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></x-table-header>
                        <x-table-header :direction="$orderDirection" label="Status" name="status" :field="$orderField"  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></x-table-header>
                        <x-table-header :direction="$orderDirection" label="role" name="role" :field="$orderField"  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></x-table-header>
                        <th scope="col" class="relative px-6 py-3">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @if($users->isNotEmpty())
                        @foreach($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $user->name }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{ $user->email }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $user->city }}</div>
                                    <div class="text-sm text-gray-500">Optimization</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                          Active
                        </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $user->role }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="rounded px-2 py-2 text-black-300 bg-yellow-400">Editer</button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    <!-- More people... -->
                    </tbody>
                </table>
                {{$users->links()}}
            </div>
        </div>
    </div>
</div>

