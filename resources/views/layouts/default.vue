<script setup lang="ts">
// This is a persistent layout
// Include me with <template layout="default" />
import Header from "@/views/components/header.vue";
import Footer from "@/views/components/footer.vue";
import MessageBox from "@/views/components/message-box.vue";
import AsideMenu from "@/views/components/aside-menu.vue";
</script>

<template>
    <Header />

	<main class="flex-grow flex align-top">
        <AsideMenu />
        <slot />
        <MessageBox />
    </main>

    <Footer />
</template>
