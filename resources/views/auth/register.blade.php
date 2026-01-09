<x-layouts.guest>
    <div class="bg-base-100 shadow-base-300/20 z-1 w-full space-y-6 rounded-xl p-6 shadow-md sm:min-w-md lg:p-8">
        <div class="flex items-center gap-3">
            <img src="https://pub-99de907071b34c5b818be772a36c0976.r2.dev/logo-icon.jpg" class="size-8" alt="brand-logo" />
            <h2 class="text-base-content text-xl font-bold">{{ config('app.name') }}</h2>
        </div>
        <div>
            <h3 class="text-base-content mb-1.5 text-2xl font-semibold">Sign Up to {{ config('app.name') }}</h3>
            <p class="text-base-content/80">Ship Faster and Focus on Growth.</p>
        </div>
        <div class="space-y-4">
            <form class="mb-4 space-y-4" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="space-y-1">
                    <label for="name" class="label-text required">Name</label>
                    <input type="text" class="input @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name') }}" autofocus>
                    @error('name')
                        <span class="helper-text">{{ $message }}</span>
                    @enderror
                </div>

                <div class="space-y-1">
                    <label for="email" class="label-text required">Email Address</label>
                    <input type="email" class="input @error('email') is-invalid @enderror" id="email"
                        name="email" value="{{ old('email') }}">
                    @error('email')
                        <span class="helper-text">{{ $message }}</span>
                    @enderror
                </div>

                <div class="space-y-1">
                    <label for="password" class="label-text required">Password</label>
                    <div class="input @error('password') is-invalid @enderror">
                        <input id="password" type="password" name="password" />
                        <button type="button" data-toggle-password='{ "target": "#password" }'
                            class="block cursor-pointer" aria-label="password">
                            <span class="icon-[tabler--eye] password-active:block hidden size-5 shrink-0"></span>
                            <span class="icon-[tabler--eye-off] password-active:hidden block size-5 shrink-0"></span>
                        </button>
                    </div>
                    @error('password')
                        <span class="helper-text">{{ $message }}</span>
                    @enderror
                </div>

                <div class="space-y-1">
                    <label for="password_confirmation" class="label-text required">Confirm Password</label>
                    <div class="input">
                        <input id="password_confirmation" type="password" name="password_confirmation" />
                        <button type="button" data-toggle-password='{ "target": "#password_confirmation" }'
                            class="block cursor-pointer" aria-label="password_confirmation">
                            <span class="icon-[tabler--eye] password-active:block hidden size-5 shrink-0"></span>
                            <span class="icon-[tabler--eye-off] password-active:hidden block size-5 shrink-0"></span>
                        </button>
                    </div>
                </div>

                <button class="btn btn-lg btn-primary btn-gradient btn-block">Sign Up to
                    {{ config('app.name') }}</button>
            </form>

            <p class="text-base-content/80 mb-4 text-center">
                Already have an account?
                <a href="{{ route('login') }}" class="link link-animated link-primary font-normal">Sign in instead</a>
            </p>
        </div>
    </div>
</x-layouts.guest>
