<template>
    <div class="my-5">
        <div class="hidden sm:block">
            <nav class="flex flex-col" aria-label="Tabs">
                <a
                    class="flex items-center text-gray-500 rounded-md px-3 py-2 text-sm font-medium cursor-pointer"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                    </svg>
                    Trier par nom
                </a>

                <a
                    class="flex items-center text-gray-500 rounded-md px-3 py-2 text-sm font-medium cursor-pointer"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    Trier par prix
                </a>

                <a
                    class="flex items-center text-gray-500 rounded-md px-3 py-2 text-sm font-medium cursor-pointer"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                    </svg>

                    Trier par catégorie
                </a>
            </nav>
        </div>
    </div>

    <div class="bg-white">
        <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8">
            <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Nos produits</h2>
                <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
                    Voir tous
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>

            <div class="relative mt-8">
                <div class="relative -mb-6 w-full overflow-x-auto pb-6">
                    <ul role="list" class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
                        <li
                            class="inline-flex w-64 flex-col text-center lg:w-auto"
                        >
                            <div class="group relative">
                                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                                </div>
                                <div class="mt-6">
                                    <p class="text-sm text-gray-500">Category name</p>
                                    <h3 class="mt-1 font-semibold text-gray-900">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Product name
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-gray-900">$ 100.00 €</p>
                                </div>
                            </div>

                            <h4 class="sr-only">Available colors</h4>
                            <ul role="list" class="mt-auto flex items-center justify-center space-x-3 pt-6">
                                <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #111827">
                                    <span class="sr-only">Black</span>
                                </li>
                                <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #fde68a">
                                    <span class="sr-only">Brass</span>
                                </li>
                                <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #e5e7eb">
                                    <span class="sr-only">Chrome</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 flex px-4 sm:hidden">
                <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                    See everything
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
        </div>
    </div>
</template>

<script setup>
</script>
