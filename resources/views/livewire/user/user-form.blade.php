<div wire:ignore>
   <div class="py-6 pr-4 pl-4 pb-1">
      @if(isset($modal) && 0 == strcmp('create', $modal) || empty($modal))
         <h1 class="pb-4">Create User</h1> 
         <form wire:submit.prevent="createuser()">
      @else
         <h1 class="pb-4">Update User</h1> 
         <form wire:submit.prevent="updateuser()">
      @endif
         <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" 
            wire:model="email" required="">
         </div>
         <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your name</label>
            <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite" 
            wire:model="name" required="">
         </div>
         <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>
            @if(isset($modal) && 0 == strcmp('create', $modal) || empty($modal))
               <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
               wire:model="password" required="">
            @else
            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
               wire:model="password">
            @endif
         </div>
         <div class="mb-6 flex items-center justify-end">
            <button type="submit" class="h-8 px-4 m-2 text-sm text-white bg-red-600 transition-colors duration-150 rounded-lg focus:shadow-outline hover:bg-indigo-800">Submit</button>
         </div>
      </form>
   </div>
</div>
