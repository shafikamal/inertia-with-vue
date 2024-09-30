<template>
    <nav class="flex justify-between p-4 bg-blue-200 shadow-md">
        <div class="text-lg font-bold">
            Dashboard
        </div>
        <div>
            <ul class="flex gap-x-6 mb-0">
                <li class="nav-item">
                    <Link class="nav-link" :href="route('home')">Home</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link" :href="route('aboutUs')">About</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link" :href="route('product.index')">Product</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link" :href="route('contactUs')">Contact Us</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link" :href="route('login')">Login</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link" :href="route('register')">Registration</Link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<style scoped>
.nav-link {
    color: #2c3e50; /* Dark text color */
    text-decoration: none; /* Remove underline */
    padding: 8px 16px; /* Add padding */
    border-radius: 4px; /* Rounded corners */
    transition: background-color 0.3s; /* Smooth transition for background color */
}

.nav-link:hover {
    background-color: #6a5acd; /* Darker blue on hover */
    color: white; /* Change text color on hover */
}

.nav-item {
    list-style: none; /* Remove default list style */
}
</style>






