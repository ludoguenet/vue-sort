<template>
    <h1>Liste des produits</h1>
    <ul>
        <li
            v-for="product in products"
            :key="product.id"
        >
            {{ product.name }} | {{ product.price }} € | ({{ product.category.name }})
        </li>
    </ul>
</template>

<script setup>
    defineProps({
       products: Array,
    });
</script>
