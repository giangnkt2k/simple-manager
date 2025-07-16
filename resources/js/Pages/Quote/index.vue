<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
</script>
<template>
    <AppLayout title="Quotes">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Quotes
            </h2>
            
        </template>
        <div class="grid grid-cols-12 gap-4 mx-3 my-5">
                <div class="col-span-2 glassmorphism">01</div>
                <!-- ... -->
                <div class="col-span-10 glassmorphism">09</div>
            </div>
    </AppLayout>
</template>
<style scoped>
h1 {
    color: #333;
}
</style>
