<x-app-layout>
    <div class="max-w-xl mx-auto my-12">
        <x-profile-form-section>
            <x-slot name="title">Profil haqida</x-slot>

            @if (session('status') === 'profile-information-updated')
                <x-slot name="status">Yangilandi</x-slot>
            @endif

            <x-form :action="route('user-profile-information.update')" method="PUT" enctype="multipart/form-data">
                <div class="px-4 sm:px-6">
                    <x-auth.errors :errors="$errors->updateProfileInformation"/>

                    <x-form.input name="email" type="email" :value="$user->email" required/>

                    <x-form.input name="Foydalanuvchi nomi" :value="$user->username" required/>

                    <x-form.input name="FIO" :value="$user->name" required/>

                    <div class="flex items-center space-x-4">
                        <x-profile-picture :user="$user"/>

                        <x-form.input name="Profil rasmi" type="file" class="w-full"/>
                    </div>
                </div>
                <div class="mt-6 px-4 sm:px-6 py-4 bg-gray-100 dark:bg-neutral-800">
                    <x-form.button>Saqlash</x-form.button>
                </div>
            </x-form>
        </x-profile-form-section>

        <x-profile-form-section>
            <x-slot name="title">Parolni yangilash</x-slot>

            @if (session('status') === 'password-updated')
                <x-slot name="status">Joriy parol</x-slot>
            @endif

            <x-form :action="route('user-password.update')" method="PUT">
                <div class="px-4 sm:px-6">
                    <x-auth.errors :errors="$errors->updatePassword"/>

                    <x-form.input name="current_password" type="password" autocomplete="current-password" required/>
                    <x-form.input name="password" label="'Yangi parol" type="password"
                                  autocomplete="new-password" required/>
                    <x-form.input name="Parolni tasdiqlang" type="password" required/>
                </div>
                <div class="mt-6 px-4 sm:px-6 py-4 bg-gray-100 dark:bg-neutral-800">
                    <x-form.button>Saqlash</x-form.button>
                </div>
            </x-form>
        </x-profile-form-section>

        <x-profile-form-section>
            <x-slot name="title">Hisobni o‘chirish</x-slot>

            <x-form :action="route('profile.destroy')" method="DELETE">
                <div class="px-4 sm:px-6">
                    Hisobingizni o‘chirib tashlaysizmi? Hisobingiz o‘chirib tashlangach, uning barcha resurslari va ma’lumotlari butunlay o‘chirib tashlanadi. Hisobingizni butunlay o‘chirib tashlashni tasdiqlash uchun parolingizni kiriting.
                </div>
                <div class="mt-6 px-4 sm:px-6 py-4 bg-gray-100 dark:bg-neutral-800">
                    <x-form.button>O'chirish</x-form.button>
                </div>
            </x-form>
        </x-profile-form-section>
    </div>
</x-app-layout>
