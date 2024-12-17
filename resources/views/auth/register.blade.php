<x-layout>
    <x-slot:heading>
      Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12 bg-red-500 sm:mx-auto sm:w-full sm:max-w-sm pl-5">
            <div class="border-b border-gray-900/10 pb-12">

                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="first_name">First Name</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name" placeholder="first name" />

                            <x-form-error name="first_name" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="last_name">Last Name</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="last_name" id="last_name" placeholder="last name" />

                            <x-form-error name="last_name" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="email" id="email" placeholder="email" />

                            <x-form-error name="email" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="password" id="password" placeholder="password" />

                            <x-form-error name="password" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="confirm_password">Confirm Password</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="confirm_password" id="confirm_password" placeholder="confirm password" />

                            <x-form-error name="confirm_password" />
                        </div>
                    </x-form-field>
                 
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>