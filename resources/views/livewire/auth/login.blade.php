<div class="min-h-screen flex items-center justify-center p-4">
    <div class="card w-full max-w-md  shadow-xl backdrop-blur-3xl">
        <div class="card-body ">
            <h2 class="card-title text-2xl font-bold mb-6 text-center">Login</h2>
            <form wire:submit.prevent="login" class="space-y-6 ">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" wire:model="email" value="{{ old('email') }}"
                        class="input input-bordered w-full @error('email') input-error @enderror"
                        placeholder="Enter your email" autofocus />
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

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="btn btn-primary w-full">Login

                        <span wire:loading class="loading loading-spinner"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
