<template>
    <header class="border-b border-gray-300">
        <nav class="px-5 md:px-10 py-5 flex">
            <h1 class="text-md sm:text-2xl text-indigo-700 font-bold">Portfolio Manager</h1>
            <div v-if="!user" class="ml-auto flex align-middle">
                <a :href="route('login')" class="block mt-auto text-gray-700 hover:text-indigo-700 font-bold">Login</a>
            </div>
            <div v-else class="ml-auto flex align-middle">
                <a href="" class="block mt-auto mr-5 text-gray-700 hover:text-indigo-700 font-semibold">
                    <span class="hidden sm:inline-block ml-3">{{ user.name }}</span>
                </a>
                <a :href="route('logout')" class="block mt-auto text-gray-700 hover:text-red-700 font-semibold">Logout</a>
            </div>
        </nav>
    </header>
</template>

<script>
import { computed } from 'vue'
import { usePage } from '@inertiajs/inertia-vue3'

export default {
    setup() {
        const user = computed(() => usePage().props.value.auth.user)
        return { user }
    }
}
</script>
