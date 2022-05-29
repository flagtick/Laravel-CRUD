<div class="py-12">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
         <div class="flex items-center justify-end pl-4 pb-4 pr-4 mt-4 w-full mx-auto">
            <button wire:click='$emit("openModal", "user.user-form", {{ json_encode(["modal" => "create", "user" => null]) }})' class="h-8 px-4 m-2 text-sm text-white bg-red-600 transition-colors duration-150 rounded-lg focus:shadow-outline hover:bg-indigo-800">New</button>
         </div>
         <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" wire:key="users">
               <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                     <th scope="col" class="px-6 py-3">
                        User Name
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Email
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Is Email Verified
                     </th>
                     <th scope="col" class="px-6 py-3 text-center">
                        Manipulation
                     </th>
                  </tr>
               </thead>
               <tbody>
                  @if(isset($users))
                     @foreach($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                           <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                              {{ $user->name }}
                           </th>
                           <td class="px-6 py-4">
                              {{ $user->email }}
                           </td>
                           <td class="px-6 py-4 text-center">
                              {{ $user->email_verified_at }}
                              @if(isset($user->email_verified_at) && strlen($user->email_verified_at) > 0)
                                 <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" checked/>
                              @else
                                 <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked"/>
                              @endif     
                           </td>
                           <td class="px-6 py-4 text-center">
                              <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                               wire:click='$emit("openModal", "user.user-form", {{ json_encode(["modal" => "update", "user" => $user]) }})'>Edit</a>
                              <span class="w-custom"></span>
                              <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                               wire:click="deleteuser({{ $user->id }})">Delete</a>
                           </td>
                        </tr>
                     @endforeach
                  @endif
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>