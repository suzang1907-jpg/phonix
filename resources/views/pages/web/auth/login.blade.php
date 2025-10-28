<x-layout.web :page="$page">
<x-navbar.auth/>
    <div class="flex flex-col p-6 min-h-dvh">
        <x-input.form action="{{route('web.auth.login.post')}}" method="POST" class="mx-auto">
            <input class="input w-full" name="email" title="E-Mail" id="email" />
            <input class="input w-full" name="password" title="Password" id="password" type="password" />

            <button type="submit" class="btn btn-primary w-full mt-2">Login</button>
        </x-input.form>
    </div>

    <x-footer.auth :domain="$domain" />
</x-layout.web>
