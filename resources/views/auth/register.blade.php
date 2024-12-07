<x-app-layout>
    <x-auth.card>
        <x-auth.errors />

        <x-form :action="route('register')">
            <x-form.input name="email" type="email" required/>

            <x-form.input name="foydalanuvchi nomi" required/>

            <x-form.input name="FIO" required/>

            <x-form.input name="parol" type="password" autocomplete="new-password" required/>

            <x-form.input name="parolni tasdiqlang" type="password" required/>

            <x-form.button>Ro'yhatdan o'tish</x-form.button>
        </x-form>
    </x-auth.card>

    <div class="mt-4 text-center">
        <p class="text-sm text-gray-700 dark:text-neutral-200">Sizda akount mavjudmi?</p>

        <x-link href="{{ route('login') }}">
             Kirish
        </x-link>
    </div>
</x-app-layout>
