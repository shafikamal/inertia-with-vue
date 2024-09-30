<template>
    <Frontend>
        <div class="container mx-auto p-6">
            <div class="flex justify-between">
                <h5 >Product List</h5>
                <Link :href="route('product.create')" >Add Product</Link>
            </div>
            <table class="min-w-full bg-white shadow-md rounded my-6">
                <thead>
                <tr>

                    <th class="py-2 px-4 bg-gray-200">S/L</th>
                    <th class="py-2 px-4 bg-gray-200">Product Name</th>
                    <th class="py-2 px-4 bg-gray-200">Price</th>
                    <th class="py-2 px-4 bg-gray-200">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="text-center border-b"
                v-for="(item,index) in products"
                    :key="index"
                >
                    <td class="py-2 px-4">{{ item.id }}</td>
                    <td class="py-2 px-4">{{ item.name }}</td>
                    <td class="py-2 px-4">{{ item.price }}</td>
                    <td class="py-2 px-4">
                        <Link :href="route('product.show',item.id)">Edit</Link>/
                        <Link >Delete</Link>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </Frontend>

</template>

<script setup>
import Frontend from "@/Layouts/Frontend.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    'products':Array,
});

</script>
