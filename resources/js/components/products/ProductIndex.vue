<template>
    <div class="my-5">
        <div class="hidden sm:block">
            <nav class="flex space-x-4" aria-label="Tabs">
                <a
                    class="text-gray-500 hover:text-gray-700 rounded-md px-3 py-2 text-sm font-medium cursor-pointer"
                    :class="{'text-indigo-500': orderBy === 'name'}"
                    v-on:click="toggleOrder('name')"
                >
                    Trier par nom
                </a>

                <a
                    class="text-gray-500 hover:text-gray-700 rounded-md px-3 py-2 text-sm font-medium cursor-pointer"
                     :class="{'text-indigo-500': orderBy === 'price'}"
                    v-on:click="toggleOrder('price')"
                >
                    Trier par prix
                </a>

                <a
                    class="text-gray-500 hover:text-gray-700 rounded-md px-3 py-2 text-sm font-medium cursor-pointer"
                     :class="{'text-indigo-500': orderBy === 'category'}"
                    v-on:click="toggleOrder('category')"
                >
                    Trier par catégorie
                </a>
            </nav>
        </div>
    </div>

    <product-list
        :products="products"
    />
</template>

<script setup>
import {useProducts} from "../../composables/products/useProducts.js";
import {onMounted} from "vue";

const {
    products,
    getProducts,
    toggleOrder,
    orderBy,
} = useProducts();

onMounted(async () => {
    await getProducts();
});
</script>
