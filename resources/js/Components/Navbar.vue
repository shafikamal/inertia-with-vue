<template>
    <nav class="navbar">
        <ul class="nav-list">
            <li class="nav-item" v-for="link in links" :key="link.name">
                <router-link :to="link.path" class="nav-link">{{ link.name }}</router-link>
            </li>
        </ul>
    </nav>
</template>

<script setup>
const links = [
    { name: "Home", path: "/" },
    { name: "About", path: "/about" },
    { name: "Contact", path: "/contact" },
];
</script>

<style scoped>
.navbar {
    background-color: #333;
    padding: 10px;
}

.nav-list {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav-item {
    margin-right: 15px;
}

.nav-link {
    color: white;
    text-decoration: none;
    padding: 8px 16px;
}

.nav-link:hover {
    background-color: #555;
    border-radius: 4px;
}
</style>
