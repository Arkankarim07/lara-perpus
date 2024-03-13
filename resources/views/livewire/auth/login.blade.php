<div>

    @if (auth()->check())
         @php
          return redirect()->to('/home')   
         @endphp
    @endif

    @if (session()->has('success'))
    <div class="p-4 bg-green-400 text-white absolute top-0 w-full">{{ session('success') }}</div>
    @endif

    @if (session()->has('error'))
    <div class="p-4 bg-red-400 text-white absolute top-0 w-full">{{ session('error') }}</div>
    @endif
    <div class="container flex justify-center items-center bg-white h-dvh">
        <div class="w-[400px] bg-[#5BC0EB] rounded-md px-6 py-5 flex justify-center items-center flex-col">
            <h1 class="font-bold text-2xl mb-5  ">Login</h1>
            <form wire:submit="login()" class="flex flex-col relative">
                                
                <label for="" class="text-[16px] pointer-events-none"> Name 
                    @error('name') 
                    <span class="text-red-500 text-[10px]">{{ $message }}</span>
                     @enderror
                </label>
                <input type="text" wire:model="name" name="name" id="name" class="bg-transparent border-0 border-b-2 border-[#515151] mb-4 ">
            
                <label for=""  class="text-[16px] pointer-events-none">Password</label>
                <input type="password" wire:model="password" name="password" id="password" class="bg-transparent border-0 border-b-2 border-[#515151] mb-4">

                <div class="text-[14px] mt-4">Dont have an account? <a href="/" class="text-[#FDE74C] font-bold">Register</a></div>

                <button type="submit" class="bg-[#FDE74C] font-bold rounded-md py-2 mt-3">Login</button>
            </form>
        </div>
    </div>
</div>
