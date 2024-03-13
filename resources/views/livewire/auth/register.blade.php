<div>
    @if (auth()->check())
         @php
          return redirect()->to('/home')   
         @endphp
    @endif

    <div class="container flex justify-center items-center bg-white h-dvh">
        <div class="w-[400px] bg-[#5BC0EB] rounded-md px-6 py-5 flex justify-center items-center flex-col">
            <h1 class="font-bold text-2xl mb-5  ">Register</h1>
            <form wire:submit="save()" class="flex flex-col relative">
                                
                <label for="" class="text-[16px] pointer-events-none"> Name 
                    @error('name') 
                    <span class="text-red-500 text-[10px]">{{ $message }}</span>
                     @enderror
                </label>
                
                <input type="text" wire:model="name" name="name" id="name" class="bg-transparent border-0 border-b-2 border-[#515151] mb-4  ">
               
                
                <label for=""  class="text-[16px] pointer-events-none">Email</label>
                <input type="text" wire:model="email" name="email" id="email" class="bg-transparent border-0 border-b-2 border-[#515151] mb-4">

                <label for=""  class="text-[16px] pointer-events-none">Password</label>
                <input type="password" wire:model="password" name="password" id="password" class="bg-transparent border-0 border-b-2 border-[#515151] mb-4">

                <div class="text-[14px] mt-4">Already have an account? <a href="/login" class="text-[#FDE74C] font-bold">Login</a></div>

                <button type="submit" class="bg-[#FDE74C] font-bold rounded-md py-2 mt-3">Register</button>
            </form>
        </div>
    </div>
</div>
