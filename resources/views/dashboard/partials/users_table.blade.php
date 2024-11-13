<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aurora</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.navigation')
     


        <div class="text-gray-900">
            <div class="p-4 flex">
                <h1 class="text-3xl font font-serif text-[#3e3121] ">Users</h1>
            </div>
            <div class="px-3 py-4 flex justify-center">
                <table class="w-full text-md bg-transparent border-2 border-black rounded-xl shadow-md mb-4">
                    <tbody>
                        <tr class="border-b border-black">
                            <th class="text-left p-3 px-5 border-r border-black">Name</th>
                            <th class="text-left p-3 px-5 border-r border-black">Email</th>
                            @role(['admin'])
                            <th class="text-left p-3 px-5 border-r border-black">Role</th>
                            @endRole
                            <th class="text-left p-3 px-5 border-r border-black">Block User</th>
                            <th></th>
                        </tr>
                        @foreach ($users->reverse() as $user)
                            <tr class="border-b border-black hover:bg-orange-100">
                                <td class="p-3 px-5 border-r border-black">
                                    <div>{{ $user->name }}</div>
                                </td>
                                <td class="p-3 px-5 border-r border-black">
                                    <div>{{ $user->email }}</div>
                                </td>
                                @role(["admin"])
                                <td class="p-3 px-5 border-r border-black">
                                    <form method="post" action="{{ route('moderator', $user->id) }}">
                                        @method('PUT')
                                        @csrf
                                        <input name="user_id" type="hidden" value="{{ $user->id }}">
                                        <button class="bg-gray-800 text-white px-2 py-2 rounded-lg">
                                            @if ($user->hasRole(['moderator']))
                                                Remove Moderator
                                            @else
                                                Add as Moderator
                                            @endif
                                        </button>
                                    </form>
                                </td>
                                @endRole
                                <td class="p-3 px-5 flex border-r border-black">
                                    @role(['admin'])
                                        <form method="post" action="{{ route('block', $user) }}">
                                            @csrf
                                            @method('PUT')
                                            <input name="user" type="hidden" value="{{ $user->id }}">
                                            <button
                                                class="text-sm {{ $user->deleted ? 'bg-gray-600' : 'bg-[#3e3121]' }} text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                                {{ $user->deleted ? 'Unblock User' : 'Block User' }}
                                            </button>
                                        </form>
                                    @endRole
                                    @role(['moderator'])
                                        <button
                                            class="text-sm text-[#3e3121] py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                            {{ $user->deleted ? 'Blocked user' : '' }}
                                        </button>
                                    @endRole
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

 </body>



 

    
</html>



