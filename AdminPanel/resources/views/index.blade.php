<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Admin Panel</title>
</head>

<body>
    <!-- header -->
    <div class="ml-64 w-auto h-14 flex shadow-md shadow-black/5 mb-2">
        <button type="button" class="text-lg text-gray-600">
            <i class="bi bi-list ml-2"></i>
        </button>
        <ul class="flex items-center text-sm ml-2">
            <li class="mr-2">
                <a href="#" class="text-gray-400 hover:text-gray-600 font-medium">Dashboard</a>
            </li>
            <li class="text-gray-600 mr-2 font-medium">/</li>
            <li class="text-gray-600 mr-2 font-medium">Analytics</li>
        </ul>
        <ul class="ml-auto flex items-center text-lg">
            <li class="mr-1 dropdown">
                <button type="button" class=" text-gray-400 w-8 h-8 flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                    <i class="bi bi-search"></i>
                </button>
            <li>
            <li>
                <button type="button" class=" text-gray-400 w-8 h-8 flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                    <i class="bi bi-bell"></i>
                </button>
            </li>
            <li class="mr-5 ">
                <button type="button" class=" text-gray-400 w-8 h-8 flex items-center justify-center hover:bg-gray-50 hover:text-gray-600">
                    <i class="bi bi-person-fill"></i>
                </button>
            </li>
        </ul>
    </div>
    <!-- end header -->

    <!-- content -->
    <div class="ml-64 w-auto mb-5">
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between mb-6">
                        <div>
                            <div class="text-2xl font-semibold mb-1">10</div>
                            <div class="text-sm font-medium text-gray-400">Active orders</div>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i class="ri-more-fill"></i></button>
                            <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                <li>
                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-full bg-gray-100 rounded-full h-4">
                            <div class="h-full bg-blue-500 rounded-full p-1" style="width: 60%;">
                                <div class="w-2 h-2 rounded-full bg-white ml-auto"></div>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-gray-600 ml-4">60%</span>
                    </div>
                </div>
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between mb-4">
                        <div>
                            <div class="flex items-center mb-1">
                                <div class="text-2xl font-semibold">324</div>
                                <div class="p-1 rounded bg-emerald-500/10 text-emerald-500 text-[12px] font-semibold leading-none ml-2">+30%</div>
                            </div>
                            <div class="text-sm font-medium text-gray-400">Visitors</div>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i class="ri-more-fill"></i></button>
                            <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                <li>
                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded-full object-cover block">
                        <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded-full object-cover block -ml-3">
                        <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded-full object-cover block -ml-3">
                        <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded-full object-cover block -ml-3">
                        <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded-full object-cover block -ml-3">
                    </div>
                </div>
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between mb-6">
                        <div>
                            <div class="text-2xl font-semibold mb-1"><span class="text-base font-normal text-gray-400 align-top">&dollar;</span>2,345</div>
                            <div class="text-sm font-medium text-gray-400">Active orders</div>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i class="ri-more-fill"></i></button>
                            <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                <li>
                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="text-blue-500 font-medium text-sm hover:text-blue-600">View details</a>
                </div>
            </div>
            <!-- CONTENT BY FAHAD -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white border-gray-100 shadow-md shadow-black/10 p-6">
                    <div class="flax justify-between mb-4">
                        <div class="font-medium py-5 px-2">Manage Orders</div>
                        <div class="flex-items-center mb-4 order-tab">
                            <button type="button" data-tab="order" data-tab-page="active" class="bg-gray-50 text-sm font medium text-gray-400 py-2 px-4 rounded-tl-md rounded-bl-md hover:text-gray-600 active">Active</button>
                            <button type="button" data-tab="order" data-tab-page="completed" class="bg-gray-50 text-sm font medium text-gray-400 py-2 px-4 hover:text-gray-600">Completed</button>
                            <button type="button" data-tab="order" data-tab-page="canceled" class="bg-gray-50 text-sm font medium text-gray-400 py-2 px-4 rounded-tr-md rounded-br-md hover:text-gray-600">Canceled</button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-[540px]" data-tab-for="order" data-page="active">
                                <thead>
                                    <tr>
                                        <th class="text-[12-px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">Service</th>
                                        <th class="text-[12-px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Estimate</th>
                                        <th class="text-[12-px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Budget</th>
                                        <th class="text-[12-px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2 px-4">
                                            <div class="flex-items-center">
                                                <i class="bi bi-person-square"></i>
                                                <a href="#" class="text-gray-600 font font-medium hover:text-blue-500 ml-2">Create landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">3 days</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$56</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="inline-block p=1 rounded bg-emerald-500/10 text-emerald-500 font-semibold text-[12px] leading-none">In progress</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4">
                                            <div class="flex-items-center">
                                                <i class="bi bi-person-square"></i>
                                                <a href="#" class="text-gray-600 font font-medium hover:text-blue-500 ml-2">Create landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">3 days</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$56</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="inline-block p=1 rounded bg-emerald-500/10 text-emerald-500 font-semibold text-[12px] leading-none">In progress</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4">
                                            <div class="flex-items-center">
                                                <i class="bi bi-person-square"></i>
                                                <a href="#" class="text-gray-600 font font-medium hover:text-blue-500 ml-2">Create landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">3 days</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$56</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="inline-block p=1 rounded bg-emerald-500/10 text-emerald-500 font-semibold text-[12px] leading-none">In progress</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4">
                                            <div class="flex-items-center">
                                                <i class="bi bi-person-square"></i>
                                                <a href="#" class="text-gray-600 font font-medium hover:text-blue-500 ml-2">Create landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">3 days</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$56</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="inline-block p=1 rounded bg-emerald-500/10 text-emerald-500 font-semibold text-[12px] leading-none">In progress</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4">
                                            <div class="flex-items-center">
                                                <i class="bi bi-person-square"></i>
                                                <a href="#" class="text-gray-600 font font-medium hover:text-blue-500 ml-2">Create landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">3 days</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$56</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="inline-block p=1 rounded bg-emerald-500/10 text-emerald-500 font-semibold text-[12px] leading-none">In progress</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="bg-white border-gray-100 shadow-md shadow-black/10 p-6">
                    <div class="flax justify-between mb-4">
                        <div class="font-medium py-5 px-2 mr-2">Manage Services</div>
                        <form action="" class="flex items-center mb-4">
                            <div class="relative w-full">
                                <input type="text" class="py-2 pr-4 pl-10 bg-gray-50 w-full outline-none border border-gray-100 rounded-md text-sm focus:border-blue-500" placeholder="serch...">
                                <i class="ri-serch-line absoluse top-1/2 left-4 -translate-y-1/2 text-gray-400"></i>
                            </div>
                            <select class="text-sm py-2 pl-4 pr-10 bg-gray-50 border text-gray-400 border-gray-100 rounded-md focus:border-blue-500 outline-none appearance-none bg-select-arrow bg-no bg-repeat bg-[length:16px_16px] bg-[right_16px_center]">
                                <option value="">All down</option>
                            </select>
                        </form>
                        <div class="overflow-x-auto">
                            <table class="min-w-[540px]" data-tab-for="order" data-page="active">
                                <thead>
                                    <tr>
                                        <th class="text-[12-px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">Service</th>
                                        <th class="text-[12-px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Price</th>
                                        <th class="text-[12-px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">Click</th>
                                        <th class="text-[12-px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2 px-4">
                                            <div class="flex-items-center">
                                                <i class="bi bi-person-square"></i>
                                                <a href="#" class="text-gray-600 font font-medium hover:text-blue-500 ml-2">Create landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="dropdown">
                                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><a class="w-6 h-7"><b>...</b></a></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4">
                                            <div class="flex-items-center">
                                                <i class="bi bi-person-square"></i>
                                                <a href="#" class="text-gray-600 font font-medium hover:text-blue-500 ml-2">Create landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="dropdown">
                                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><a class="w-6 h-7"><b>...</b></a></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4">
                                            <div class="flex-items-center">
                                                <i class="bi bi-person-square"></i>
                                                <a href="#" class="text-gray-600 font font-medium hover:text-blue-500 ml-2">Create landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="dropdown">
                                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><a class="w-6 h-7"><b>...</b></a></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4">
                                            <div class="flex-items-center">
                                                <i class="bi bi-person-square"></i>
                                                <a href="#" class="text-gray-600 font font-medium hover:text-blue-500 ml-2">Create landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="dropdown">
                                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><a class="w-6 h-7"><b>...</b></a></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4">
                                            <div class="flex-items-center">
                                                <i class="bi bi-person-square"></i>
                                                <a href="#" class="text-gray-600 font font-medium hover:text-blue-500 ml-2">Create landing page</a>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">$235</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span class="text-[13px] font-medium text-gray-400">1K</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="dropdown">
                                                <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><a class="w-6 h-7"><b>...</b></a></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTENT BY FAHAD END -->
        </div>
    </div>
    <!-- end content -->

    <!-- footer by alwan -->
    <footer class="ml-64 shadow dark:bg-gray-900">
        <div class="w-full mx-auto max-w-screen-xl p-5 md:flex md:items-center md:justify-between">
            <!-- <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">Kelompok E <a href="https://flowbite.com/" class="hover:underline"></a></span> -->
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- endfooter -->

    <!-- sidebar -->
    <div class="sidebar bg-gray-900 fixed h-full w-64 left-0 top-0 p-4 z-50 text-white">
        <div class="text-white text-xl">
            <div class="p-2.5 flex items-center">
                <i class="bi bi-person-square px-2 pr-0 py-1 text-2xl"></i>
                <h1 class="ml-3 font-bold">AdminPanel</h1>
            </div>
            <hr class="my-1 text-gray-600 opacity-5">
            <div class="mb-1 group active">
                <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="bi bi-house-door mr-3 text-xl"></i>
                    <span class="text-sm">Dashboard</span>
                </a>
            </div>
            <div>
                <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="bi bi-bar-chart-line mr-3 text-xl"></i>
                    <span class="text-sm">Orders</span>
                </a>
            </div>
            <div class>
                <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="bi bi-journals mr-3 text-xl"></i>
                    <span class="text-sm">Reports</span>
                </a>
            </div>
            <div>
                <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="bi bi-gear mr-3 text-xl"></i>
                    <span class="text-sm">Settings</span>
                </a>
            </div>
            <div>
                <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="bi bi-question-circle mr-3 text-xl"></i>
                    <span class="text-sm">Help</span>
                </a>
            </div>
        <div>
    </div>
            <!-- end sidebar -->
</body>

</html>