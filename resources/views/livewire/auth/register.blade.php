<div class="min-h-screen flex items-center justify-center p-4 mt-10">
    <div class="card w-full max-w-md bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-2xl font-bold mb-6 text-center">Register</h2>
            <form wire:submit.prevent="register" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium mb-2">Name</label>
                    <input type="text" id="name" name="name" wire:model="name" value="{{ old('name') }}"
                        class="input input-bordered w-full @error('name') input-error @enderror"
                        placeholder="Enter your name" autofocus />
                    @error('name')
                        <p class="text-error text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" wire:model="email" value="{{ old('email') }}"
                        class="input input-bordered w-full @error('email') input-error @enderror"
                        placeholder="Enter your email" />
                    @error('email')
                        <p class="text-error text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" wire:model="password"
                        class="input input-bordered w-full @error('password') input-error @enderror"
                        placeholder="Enter your password" />
                    @error('password')
                        <p class="text-error text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Confirmation Field -->
                <div>
                    <label for="password-confirmation" class="block text-sm font-medium mb-2">Confirm Password</label>
                    <input type="password" id="password-confirmation" name="password_confirmation" wire:model="password_confirmation"
                        class="input input-bordered w-full @error('password') input-error @enderror"
                        placeholder="Confirm your password" />
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="btn btn-primary w-full">Register
                        <span wire:loading class="loading loading-spinner"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

