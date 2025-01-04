<div>
    <!-- Display Success Message -->
    @if (session()->has('message'))
        <div class="alert alert-success mb-4">
            {{ session('message') }}
        </div>
    @endif

    <!-- Membership Form -->
    <form wire:submit.prevent="submitForm" class="space-y-4">
        <!-- Name Field -->
        <div>
            <label for="name" class="block text-black">Name</label>
            <input type="text" id="name" placeholder="Name" wire:model="name" class="mt-1 block bg-[#FF00FF] placeholder-black w-full border-4 border-black shadow-sm p-2">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Email Field -->
        <div>
            <label for="email" class="block text-black">Email</label>
            <input type="email" id="email" placeholder="email@email.com" wire:model="email" class="mt-1 bg-[#FF00FF] placeholder-black block w-full border-4 border-black shadow-sm p-2">
            
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Membership Type Field -->
        <div>
            <label for="membershipType" class="block text-black">Membership Type</label>
            <select id="membershipType" wire:model="membershipType" class="mt-1 block bg-[#FF00FF] w-full border-4 border-black shadow-sm p-2">
                <option value="">Select...</option>
                <option value="standard">Standard</option>
                <option value="premium">Premium</option>
            </select>
            @error('membershipType') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-[#01FF00] text-black p-2 border-4 border-black hover:bg-blue-700">Submit</button>
    </form>
</div>