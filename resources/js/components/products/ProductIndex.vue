<template>
    <button
        v-on:click="toggleOrder('name')"
    >
        Trier par nom
    </button>

    <button
        v-on:click="toggleOrder('price')"
    >
        Trier par prix
    </button>

    <button
        v-on:click="toggleOrder('category')"
    >
        Trier par catégorie
    </button>

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
} = useProducts();

onMounted(async () => {
    await getProducts();
});
</script>
