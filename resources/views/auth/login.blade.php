<x-layouts.guest>
    <div class="bg-base-100 shadow-base-300/20 z-1 w-full space-y-6 rounded-xl p-6 shadow-md sm:min-w-md lg:p-8">
        <div class="flex items-center gap-3">
            <img src="https://pub-99de907071b34c5b818be772a36c0976.r2.dev/logo-icon.jpg" class="size-8" alt="brand-logo" />
            <h2 class="text-base-content text-xl font-bold">{{ config('app.name') }}</h2>
        </div>
        <div>
            <h3 class="text-base-content mb-1.5 text-2xl font-semibold">Sign in to {{ config('app.name') }}</h3>
            <p class="text-base-content/80">Ship Faster and Focus on Growth.</p>
        </div>
        <div class="space-y-4">
            <form method="POST" action="{{ route('login') }}" class="mb-4 space-y-4">
                @csrf
                <div class="space-y-1">
                    <label class="label-text required" for="email">Email address</label>
                    <input type="email" class="input @error('email') is-invalid @enderror" id="email"
                        name="email" value="{{ old('email') }}" />
                    @error('email')
                        <span class="helper-text">{{ $message }}</span>
                    @enderror
                </div>

                <div class="space-y-1">
                    <label class="label-text required" for="password">Password</label>
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

                <div class="flex items-center justify-between gap-y-2">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" class="checkbox checkbox-primary" id="rememberMe" />
                        <label class="label-text text-base-content/80 p-0 text-base" for="rememberMe">Remember
                            Me</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="link link-animated link-primary font-normal">Forgot Your Password?</a>
                    @endif
                </div>

                <button class="btn btn-lg btn-primary btn-gradient btn-block">Sign in to
                    {{ config('app.name') }}</button>
            </form>

            @if (Route::has('register'))
                <p class="text-base-content/80 mb-4 text-center">
                    Don't have an account? <a class="link link-animated link-primary font-normal"
                        href="{{ route('register') }}">Register</a>
                </p>
            @endif
        </div>
    </div>
</x-layouts.guest>
