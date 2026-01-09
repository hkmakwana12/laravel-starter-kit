<x-layouts.app>
    @php
        $breadcrumbLinks = [
            [
                'url' => route('dashboard'),
                'text' => 'Dashboard',
            ],
            [
                'url' => route('users.index'),
                'text' => 'Users',
            ],
            [
                'text' => 'List',
            ],
        ];
    @endphp

    <div class="max-w-7xl mx-auto space-y-6">
        <x-partials.breadcrumb :links="$breadcrumbLinks" title="Users" :addNewAction="route('users.create')" />

        <div class="card">
            <div class="overflow-x-auto">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col" class="ps-4">
                                <x-tables.sortable-header field="name" :current-sort="request('sort')">
                                    Name
                                </x-tables.sortable-header>
                            </th>
                            <th scope="col">
                                <x-tables.sortable-header field="email" :current-sort="request('sort')">
                                    Email
                                </x-tables.sortable-header>
                            </th>
                            <th scope="col">
                                <x-tables.sortable-header field="email_verified_at" :current-sort="request('sort')">
                                    Email Verified At
                                </x-tables.sortable-header>
                            </th>
                            <th scope="col">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td class="ps-4 font-semibold">
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>
                                    {{ $user->email_verified_at?->diffForHumans() }}
                                </td>
                                <td class="text-end pe-4">

                                    <a href="{{ route('users.edit', $user) }}"
                                        class="btn btn-circle btn-text btn-primary btn-sm" aria-label="Edit Resourse">
                                        <span class="icon-[tabler--pencil] size-5"></span>
                                    </a>

                                    <button type="button" class="btn btn-circle btn-text btn-error btn-sm"
                                        aria-label="Delete Resourse" aria-haspopup="dialog" aria-expanded="false"
                                        aria-controls="delete-modal" data-overlay="#delete-modal"
                                        onclick="document.getElementById('deleteResourceForm').action='{{ route('users.destroy', $user) }}';">
                                        <span class="icon-[tabler--trash] size-5"></span>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">
                                    @lang('app.no_record')
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($users->hasPages())
                <div class="card-footer border-t border-base-content/20 p-4">
                    {!! $users->links() !!}
                </div>
            @endif
        </div>
    </div>
</x-layouts.app>
