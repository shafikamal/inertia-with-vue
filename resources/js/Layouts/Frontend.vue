
<template>
    <Navbar/>
    <article>
        <div v-if="$page.props.flash.message" class="alert">
            {{ $page.props.flash.message }}
        </div>
        <slot />
    </article>

</template>

<script setup>
import Navbar from "@/Components/Navbar.vue";

</script>
