<template>
    <Frontend>
        <div>
            <h6>This is {{title}}</h6>
        </div>
    </Frontend>
</template>

<script setup>
import Frontend from "@/Layouts/Frontend.vue";
defineProps({
    title : String
});

</script>

