<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- role -->
        <div class="mt-4">
            <x-input-label for="role" :value="__('Role')" />
            <select class="w-full" name="role" id="roleSelector">
                <option selected disabled>Choose Your Role</option>
                <option value="patient">Patient</option>
                <option value="doctor">Doctor</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>


        <!-- specialty (hidden by default) -->
        <div class="mt-4" id="specialtySection" style="display: none;">
            <x-input-label for="specialty" :value="__('Specialty')" />
            <select class="w-full" name="specialty" id="specialty">
                <option selected disabled>Choose Your Specialty</option>
                <option value="cardiology">Cardiology</option>
                <option value="orthopedics">Orthopedics</option>
                <option value="dermatology">Dermatology</option>
                <!-- Add more options as needed -->
            </select>
            <x-input-error :messages="$errors->get('specialty')" class="mt-2" />
        </div>

        <script>
            document.getElementById('roleSelector').addEventListener('change', function() {
                var specialtySection = document.getElementById('specialtySection');
                if (this.value === 'doctor') {
                    specialtySection.style.display = 'block';
                } else {
                    specialtySection.style.display = 'none';
                }
            });
        </script>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>