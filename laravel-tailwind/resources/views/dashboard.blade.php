<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
    @vite('resources/css/app.css')

</head>
<body>
    <header>
        <nav class="bg-gray-200 border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center">
                <div class="flex justify-start items-center">
                    <button id="toggleSidebar" aria-expanded="true" aria-controls="sidebar" class="hidden p-2 mr-3 text-gray-600 rounded cursor-pointer lg:inline hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </button>
                    <button aria-expanded="true" aria-controls="sidebar" class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                      <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                      <svg aria-hidden="true" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      <span class="sr-only">Toggle sidebar</span>
                    </button>
                    <a href="#" class="flex items-center">
                        <img src="{{ asset('images/logo.svg') }}" alt="logo" />
                      </a>
                  </div>
                <div class="flex items-center lg:order-2">
                    <!-- Notifications -->
                    <button type="button" data-dropdown-toggle="notification-dropdown" class="p-2 mr-1 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                        <span class="sr-only">View notifications</span>
                        <!-- Bell icon -->
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg dark:divide-gray-600 dark:bg-gray-700" id="notification-dropdown">
                        <div class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            Notifications
                        </div>
                        <div>
                        <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                            <div class="flex-shrink-0">
                            <img class="w-11 h-11 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg" alt="Samsung avatar">
                           
                            </div>
                            <div class="pl-3 w-full">
                                <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">New internship from <span class="font-semibold text-gray-900 dark:text-white">Samsung</span>: Front-end developer at Samsung.</div>
                                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">a few moments ago</div>
                            </div>
                        </a>
                        <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                            <div class="flex-shrink-0">
                            <img class="w-11 h-11 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg" alt="Samsung avatar">
                           
                            </div>
                            <div class="pl-3 w-full">
                                <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">New internship from <span class="font-semibold text-gray-900 dark:text-white">Samsung</span>: Front-end developer at Samsung.</div>
                                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">a few moments ago</div>
                            </div>
                        </a>
                        <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                            <div class="flex-shrink-0">
                            <img class="w-11 h-11 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg" alt="Samsung avatar">
                           
                            </div>
                            <div class="pl-3 w-full">
                                <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">New internship from <span class="font-semibold text-gray-900 dark:text-white">Samsung</span>: Front-end developer at Samsung.</div>
                                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">a few moments ago</div>
                            </div>
                        </a>
                        <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                            <div class="flex-shrink-0">
                            <img class="w-11 h-11 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg" alt="Samsung avatar">
                           
                            </div>
                            <div class="pl-3 w-full">
                                <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">New internship from <span class="font-semibold text-gray-900 dark:text-white">Samsung</span>: Front-end developer at Samsung.</div>
                                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">a few moments ago</div>
                            </div>
                        </a>
                        <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
                            <div class="flex-shrink-0">
                            <img class="w-11 h-11 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg" alt="Samsung avatar">
                           
                            </div>
                            <div class="pl-3 w-full">
                                <div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">New internship from <span class="font-semibold text-gray-900 dark:text-white">Samsung</span>: Front-end developer at Samsung.</div>
                                <div class="text-xs font-medium text-primary-700 dark:text-primary-400">a few moments ago</div>
                            </div>
                        </a>
                        </div>
                        <a href="#" class="block py-2 text-base font-normal text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-700 dark:text-white dark:hover:underline">
                            <div class="inline-flex items-center ">
                            <svg aria-hidden="true" class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                            View all
                            </div>
                        </a>
                    </div>
                    <!-- Apps -->
                    <!-- <button type="button" data-dropdown-toggle="apps-dropdown" class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                        <span class="sr-only">View notifications</span>
                        
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    </button> -->
                    <!-- Dropdown menu -->
                    <!-- <div class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg dark:bg-gray-700 dark:divide-gray-600" id="apps-dropdown">
                        <div class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            Apps
                        </div>
                        <div class="grid grid-cols-3 gap-4 p-4">
                        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                            <svg aria-hidden="true" class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                            <div class="text-sm text-gray-900 dark:text-white">Sales</div>
                        </a>
                        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                            <svg aria-hidden="true" class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                            <div class="text-sm text-gray-900 dark:text-white">Users</div>
                        </a>
                        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                            <svg aria-hidden="true" class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path></svg>
                            <div class="text-sm text-gray-900 dark:text-white">Inbox</div>
                        </a>
                        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                            <svg aria-hidden="true" class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
                            <div class="text-sm text-gray-900 dark:text-white">Profile</div>
                        </a>
                        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                            <svg aria-hidden="true" class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                            <div class="text-sm text-gray-900 dark:text-white">Settings</div>
                        </a>
                        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                            <svg aria-hidden="true" class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                            <div class="text-sm text-gray-900 dark:text-white">Products</div>
                        </a>
                        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                            <svg aria-hidden="true" class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path></svg>
                            <div class="text-sm text-gray-900 dark:text-white">Pricing</div>
                        </a>
                        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                            <svg aria-hidden="true" class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm2.5 3a1.5 1.5 0 100 3 1.5 1.5 0 000-3zm6.207.293a1 1 0 00-1.414 0l-6 6a1 1 0 101.414 1.414l6-6a1 1 0 000-1.414zM12.5 10a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" clip-rule="evenodd"></path></svg>
                            <div class="text-sm text-gray-900 dark:text-white">Billing</div>
                        </a>
                        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                            <svg aria-hidden="true" class="mx-auto mb-1 w-7 h-7 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
                            <div class="text-sm text-gray-900 dark:text-white">Logout</div>
                        </a>
                        </div>
                    </div> -->
                    <button type="button" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown">
                        <div class="py-3 px-4">
                            <span class="block text-sm font-semibold text-gray-900 dark:text-white">{{$data->name}}</span>
                            <span class="block text-sm font-light text-gray-500 truncate dark:text-gray-400">{{$data->email}}</span>
                        </div>
                        <ul class="py-1 font-light text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                            <li>
                                <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">My profile</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Account settings</a>
                            </li>
                        </ul>
                        <ul class="py-1 font-light text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                            <li>
                                <a href="#" class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg class="mr-2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg> Applied Internships</a>
                            </li>
                            
                        </ul>
                        <ul class="py-1 font-light text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                            <li>
                                <a href="logout" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
      </header>

<!-- Internships litising -->
      <section>
        <div class="p-8 bg-white m-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-8">
              <div class="p-4 bg-gray-400 shadow shadow-gray-800 rounded-md flex items-center ">
                  <div class="text-left">
                      <span class="font-medium text-dark font-extrabold">Front end developer</span>
                      <br>
                      <p>UniClo</p>
                      <br>
                      <span class="font-medium font-bold">Description</span>
                      <p>Lorem ipsum dolor sit amet. Et sunt autem 33 provident nesciunt est quidem atque est galisum rerum ad perspiciatis quae.</p>
                      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-6 ml-16 rounded">
                        Apply now
                      </button>
                  </div> 
              </div>
              <div class="p-4 bg-gray-400 shadow shadow-gray-800 rounded-md flex items-center ">
                <div class="text-left">
                    <span class="font-medium text-dark font-extrabold">Front end developer</span>
                    <br>
                    <p>UniClo</p>
                    <br>
                    <span class="font-medium font-bold">Description</span>
                    <p>Lorem ipsum dolor sit amet. Et sunt autem 33 provident nesciunt est quidem atque est galisum rerum ad perspiciatis quae.</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-6 ml-16 rounded">
                      Apply now
                    </button>
                </div> 
            </div>
            <div class="p-4 bg-gray-400 shadow shadow-gray-800 rounded-md flex items-center ">
                <div class="text-left">
                    <span class="font-medium text-dark font-extrabold">Front end developer</span>
                    <br>
                    <p>UniClo</p>
                    <br>
                    <span class="font-medium font-bold">Description</span>
                    <p>Lorem ipsum dolor sit amet. Et sunt autem 33 provident nesciunt est quidem atque est galisum rerum ad perspiciatis quae.</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-6 ml-16 rounded">
                      Apply now
                    </button>
                </div> 
            </div>
            <div class="p-4 bg-gray-400 shadow shadow-gray-800 rounded-md flex items-center ">
                <div class="text-left">
                    <span class="font-medium text-dark font-extrabold">Front end developer</span>
                    <br>
                    <p>UniClo</p>
                    <br>
                    <span class="font-medium font-bold">Description</span>
                    <p>Lorem ipsum dolor sit amet. Et sunt autem 33 provident nesciunt est quidem atque est galisum rerum ad perspiciatis quae.</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-6 ml-16 rounded">
                      Apply now
                    </button>
                </div> 
            </div>
            <div class="p-4 bg-gray-400 shadow shadow-gray-800 rounded-md flex items-center ">
                <div class="text-left">
                    <span class="font-medium text-dark font-extrabold">Front end developer</span>
                    <br>
                    <p>UniClo</p>
                    <br>
                    <span class="font-medium font-bold">Description</span>
                    <p>Lorem ipsum dolor sit amet. Et sunt autem 33 provident nesciunt est quidem atque est galisum rerum ad perspiciatis quae.</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-6 ml-16 rounded">
                      Apply now
                    </button>
                </div> 
            </div>
            <div class="p-4 bg-gray-400 shadow shadow-gray-800 rounded-md flex items-center ">
                <div class="text-left">
                    <span class="font-medium text-dark font-extrabold">Front end developer</span>
                    <br>
                    <p>UniClo</p>
                    <br>
                    <span class="font-medium font-bold">Description</span>
                    <p>Lorem ipsum dolor sit amet. Et sunt autem 33 provident nesciunt est quidem atque est galisum rerum ad perspiciatis quae.</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-6 ml-16 rounded">
                      Apply now
                    </button>
                </div> 
            </div>
            <div class="p-4 bg-gray-400 shadow shadow-gray-800 rounded-md flex items-center ">
                <div class="text-left">
                    <span class="font-medium text-dark font-extrabold">Front end developer</span>
                    <br>
                    <p>UniClo</p>
                    <br>
                    <span class="font-medium font-bold">Description</span>
                    <p>Lorem ipsum dolor sit amet. Et sunt autem 33 provident nesciunt est quidem atque est galisum rerum ad perspiciatis quae.</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-6 ml-16 rounded">
                      Apply now
                    </button>
                </div> 
            </div>
            <div class="p-4 bg-gray-400 shadow shadow-gray-800 rounded-md flex items-center ">
                <div class="text-left">
                    <span class="font-medium text-dark font-extrabold">Front end developer</span>
                    <br>
                    <p>UniClo</p>
                    <br>
                    <span class="font-medium font-bold">Description</span>
                    <p>Lorem ipsum dolor sit amet. Et sunt autem 33 provident nesciunt est quidem atque est galisum rerum ad perspiciatis quae.</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-6 ml-16 rounded">
                      Apply now
                    </button>
                </div> 
            </div>
            <div class="p-4 bg-gray-400 shadow shadow-gray-800 rounded-md flex items-center ">
                <div class="text-left">
                    <span class="font-medium text-dark font-extrabold">Front end developer</span>
                    <br>
                    <p>UniClo</p>
                    <br>
                    <span class="font-medium font-bold">Description</span>
                    <p>Lorem ipsum dolor sit amet. Et sunt autem 33 provident nesciunt est quidem atque est galisum rerum ad perspiciatis quae.</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-6 ml-16 rounded">
                      Apply now
                    </button>
                </div> 
            </div>
            <div class="p-4 bg-gray-400 shadow shadow-gray-800 rounded-md flex items-center ">
                <div class="text-left">
                    <span class="font-medium text-dark font-extrabold">Front end developer</span>
                    <br>
                    <p>UniClo</p>
                    <br>
                    <span class="font-medium font-bold">Description</span>
                    <p>Lorem ipsum dolor sit amet. Et sunt autem 33 provident nesciunt est quidem atque est galisum rerum ad perspiciatis quae.</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-6 ml-16 rounded">
                      Apply now
                    </button>
                </div> 
            </div>
            <div class="p-4 bg-gray-400 shadow shadow-gray-800 rounded-md flex items-center ">
                <div class="text-left">
                    <span class="font-medium text-dark font-extrabold">Front end developer</span>
                    <br>
                    <p>UniClo</p>
                    <br>
                    <span class="font-medium font-bold">Description</span>
                    <p>Lorem ipsum dolor sit amet. Et sunt autem 33 provident nesciunt est quidem atque est galisum rerum ad perspiciatis quae.</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-6 ml-16 rounded">
                      Apply now
                    </button>
                </div> 
            </div>
            <div class="p-4 bg-gray-400 shadow shadow-gray-800 rounded-md flex items-center ">
                <div class="text-left">
                    <span class="font-medium text-dark font-extrabold">Front end developer</span>
                    <br>
                    <p>UniClo</p>
                    <br>
                    <span class="font-medium font-bold">Description</span>
                    <p>Lorem ipsum dolor sit amet. Et sunt autem 33 provident nesciunt est quidem atque est galisum rerum ad perspiciatis quae.</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-6 ml-16 rounded">
                      Apply now
                    </button>
                </div> 
            </div>

            </div>
          </div>
      </section>


      <section pt-10>
        <!-- ====== Footer Section Start -->
        <footer class="relative z-10 bg-slate-200 pt-15 pb-10 lg:pt-[120px] lg:pb-20">
          <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
              <div class="w-full px-4 sm:w-2/3 lg:w-3/12">
                <div class="mb-10 w-full">
                  <a href="#" class="flex items-center">
                    <img src="{{ asset('images/logo.svg') }}" alt="logo" />
                  </a>
                  <p class="text-body-color mb-7 mt-4 text-base">
                    Get your first internship now.
                  </p>
                </div>
              </div>
              <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
                <div class="mb-10 w-full">
                  <h4 class="text-dark mb-9 text-lg font-semibold">Resources</h4>
                  <ul>
                    <li>
                      <a href="javascript:void(0)"
                        class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                        Web development
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"
                        class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                        Data science
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"
                        class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                        Database
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"
                        class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                        Machine learning
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
                <div class="mb-10 w-full">
                  <h4 class="text-dark mb-9 text-lg font-semibold">Company</h4>
                  <ul>
                    <li>
                      <a href="javascript:void(0)"
                        class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                        About Cuvette
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"
                        class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                        Contact & Support
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"
                        class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                        Success History
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"
                        class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                        Setting & Privacy
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
                <div class="mb-10 w-full">
                  <h4 class="text-dark mb-9 text-lg font-semibold">Quick Links</h4>
                  <ul>
                    <li>
                      <a href="javascript:void(0)"
                        class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                        Premium Support
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"
                        class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                        Our Services
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"
                        class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                        Know Our Team
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"
                        class="text-body-color hover:text-primary mb-2 inline-block text-base leading-loose">
                        Download App
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
                <div class="mb-10 w-full">
                  <h4 class="text-dark mb-9 text-lg font-semibold">Follow Us On</h4>
                  <div class="mb-6 flex items-center">
                    <a href="javascript:void(0)"
                      class="text-dark hover:bg-primary hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                      <svg width="8" height="16" viewBox="0 0 8 16" class="fill-current">
                        <path
                          d="M7.43902 6.4H6.19918H5.75639V5.88387V4.28387V3.76774H6.19918H7.12906C7.3726 3.76774 7.57186 3.56129 7.57186 3.25161V0.516129C7.57186 0.232258 7.39474 0 7.12906 0H5.51285C3.76379 0 2.54609 1.44516 2.54609 3.5871V5.83226V6.34839H2.10329H0.597778C0.287819 6.34839 0 6.63226 0 7.04516V8.90323C0 9.26452 0.243539 9.6 0.597778 9.6H2.05902H2.50181V10.1161V15.3032C2.50181 15.6645 2.74535 16 3.09959 16H5.18075C5.31359 16 5.42429 15.9226 5.51285 15.8194C5.60141 15.7161 5.66783 15.5355 5.66783 15.3806V10.1419V9.62581H6.13276H7.12906C7.41688 9.62581 7.63828 9.41935 7.68256 9.10968V9.08387V9.05806L7.99252 7.27742C8.01466 7.09677 7.99252 6.89032 7.85968 6.68387C7.8154 6.55484 7.61614 6.42581 7.43902 6.4Z" />
                      </svg>
                    </a>
                    <a href="javascript:void(0)"
                      class="text-dark hover:bg-primary hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                      <svg width="16" height="12" viewBox="0 0 16 12" class="fill-current">
                        <path
                          d="M14.2194 2.06654L15.2 0.939335C15.4839 0.634051 15.5613 0.399217 15.5871 0.2818C14.8129 0.704501 14.0903 0.845401 13.6258 0.845401H13.4452L13.3419 0.751468C12.7226 0.258317 11.9484 0 11.1226 0C9.31613 0 7.89677 1.36204 7.89677 2.93542C7.89677 3.02935 7.89677 3.17025 7.92258 3.26419L8 3.73386L7.45806 3.71037C4.15484 3.61644 1.44516 1.03327 1.00645 0.587084C0.283871 1.76125 0.696774 2.88845 1.13548 3.59296L2.0129 4.90802L0.619355 4.20352C0.645161 5.18982 1.05806 5.96477 1.85806 6.52838L2.55484 6.99804L1.85806 7.25636C2.29677 8.45401 3.27742 8.94716 4 9.13503L4.95484 9.36986L4.05161 9.93346C2.60645 10.8728 0.8 10.8024 0 10.7319C1.62581 11.7652 3.56129 12 4.90323 12C5.90968 12 6.65806 11.9061 6.83871 11.8356C14.0645 10.2857 14.4 4.41487 14.4 3.2407V3.07632L14.5548 2.98239C15.4323 2.23092 15.7935 1.8317 16 1.59687C15.9226 1.62035 15.8194 1.66732 15.7161 1.6908L14.2194 2.06654Z" />
                      </svg>
                    </a>
                    <a href="javascript:void(0)"
                      class="text-dark hover:bg-primary hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                      <svg width="16" height="12" viewBox="0 0 16 12" class="fill-current">
                        <path
                          d="M15.6645 1.88018C15.4839 1.13364 14.9419 0.552995 14.2452 0.359447C13.0065 6.59222e-08 8 0 8 0C8 0 2.99355 6.59222e-08 1.75484 0.359447C1.05806 0.552995 0.516129 1.13364 0.335484 1.88018C0 3.23502 0 6 0 6C0 6 0 8.79263 0.335484 10.1198C0.516129 10.8664 1.05806 11.447 1.75484 11.6406C2.99355 12 8 12 8 12C8 12 13.0065 12 14.2452 11.6406C14.9419 11.447 15.4839 10.8664 15.6645 10.1198C16 8.79263 16 6 16 6C16 6 16 3.23502 15.6645 1.88018ZM6.4 8.57143V3.42857L10.5548 6L6.4 8.57143Z" />
                      </svg>
                    </a>
                    <a href="javascript:void(0)"
                      class="text-dark hover:bg-primary hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-[#E5E5E5] hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                      <svg width="14" height="14" viewBox="0 0 14 14" class="fill-current">
                        <path
                          d="M13.0214 0H1.02084C0.453707 0 0 0.451613 0 1.01613V12.9839C0 13.5258 0.453707 14 1.02084 14H12.976C13.5432 14 13.9969 13.5484 13.9969 12.9839V0.993548C14.0422 0.451613 13.5885 0 13.0214 0ZM4.15142 11.9H2.08705V5.23871H4.15142V11.9ZM3.10789 4.3129C2.42733 4.3129 1.90557 3.77097 1.90557 3.11613C1.90557 2.46129 2.45002 1.91935 3.10789 1.91935C3.76577 1.91935 4.31022 2.46129 4.31022 3.11613C4.31022 3.77097 3.81114 4.3129 3.10789 4.3129ZM11.9779 11.9H9.9135V8.67097C9.9135 7.90323 9.89082 6.8871 8.82461 6.8871C7.73571 6.8871 7.57691 7.74516 7.57691 8.60323V11.9H5.51254V5.23871H7.53154V6.16452H7.55423C7.84914 5.62258 8.50701 5.08065 9.52785 5.08065C11.6376 5.08065 12.0232 6.43548 12.0232 8.2871V11.9H11.9779Z" />
                      </svg>
                    </a>
                  </div>
                  <p class="text-body-color text-base">&copy; 2023 Cuvette</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <span class="absolute left-0 bottom-0 z-[-1]">
              <svg width="217" height="229" viewBox="0 0 217 229" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z"
                  fill="url(#paint0_linear_1179_5)" />
                <defs>
                  <linearGradient id="paint0_linear_1179_5" x1="76.5" y1="281" x2="76.5" y2="1.22829e-05"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#3056D3" stop-opacity="0.08" />
                    <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                  </linearGradient>
                </defs>
              </svg>
            </span>
            <span class="absolute top-10 right-10 z-[-1]">
              <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M37.5 -1.63918e-06C58.2107 -2.54447e-06 75 16.7893 75 37.5C75 58.2107 58.2107 75 37.5 75C16.7893 75 -7.33885e-07 58.2107 -1.63918e-06 37.5C-2.54447e-06 16.7893 16.7893 -7.33885e-07 37.5 -1.63918e-06Z"
                  fill="url(#paint0_linear_1179_4)" />
                <defs>
                  <linearGradient id="paint0_linear_1179_4" x1="-1.63917e-06" y1="37.5" x2="75" y2="37.5"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#13C296" stop-opacity="0.31" />
                    <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                  </linearGradient>
                </defs>
              </svg>
            </span>
          </div>
        </footer>
        <!-- ====== Footer Section End -->
    </section>




   
    

 

      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>
</html>