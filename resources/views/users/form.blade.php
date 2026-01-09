<x-layouts.app>
    @php
        $breadcrumbLinks = [
            ['url' => route('dashboard'), 'text' => 'Dashboard'],
            ['url' => route('users.index'), 'text' => 'Users'],
            ['text' => $user->id ? "Edit" : 'Create'],
        ];

        $title = $user->id ? "Edit {$user->name}" : 'Create User';
    @endphp

    <div class="max-w-7xl mx-auto space-y-6">
        <x-partials.breadcrumb :links="$breadcrumbLinks" :title="$title" :goBackAction="route('users.index')" />

        <x-partials.validation-errors />

        <form method="post" action="{{ $user->id ? route('users.update', $user) : route('users.store') }}">
            @csrf
            @isset($user->id)
                @method('put')
            @endisset

            <div class="card">
                <div class="card-body">
                    <div class="grid md:grid-cols-2 gap-4 py-2">

                        {{-- Name --}}
                        <div class="space-y-1">
                            <label for="name" class="label-text required">Name</label>
                            <input class="input @error('name') is-invalid @enderror" type="text" id="name"
                                name="name" value="{{ old('name', $user->name) }}" autofocus />
                            @error('name')
                                <span class="helper-text">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="space-y-1">
                            <label for="email" class="label-text required">Email Address</label>
                            <input class="input @error('email') is-invalid @enderror" type="email" id="email"
                                name="email" value="{{ old('email', $user->email) }}" />
                            @error('email')
                                <span class="helper-text">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="space-y-1">
                            <label for="password" class="label-text {{ $user->id ? '' : 'required' }}">Password</label>
                            <input class="input @error('password') is-invalid @enderror" type="password" id="password"
                                name="password" />
                            @error('password')
                                <span class="helper-text">{{ $message }}</span>
                            @enderror

                            @if ($user->id)
                                <p class="text-xs text-gray-500">
                                    Leave blank to keep the current password.
                                </p>
                            @endif
                        </div>

                        {{-- Confirm Password --}}
                        <div class="space-y-1">
                            <label for="password_confirmation" class="label-text {{ $user->id ? '' : 'required' }}">Confirm Password</label>
                            <input class="input @error('password_confirmation') is-invalid @enderror" type="password"
                                id="password_confirmation" name="password_confirmation" />
                            @error('password_confirmation')
                                <span class="helper-text">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>

            {{-- Actions --}}
            <div class="mt-6 space-x-2">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
                <a href="{{ route('users.index') }}" class="btn btn-soft">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</x-layouts.app>
