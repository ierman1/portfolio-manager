<template>
    <aside class="h-full border-r border-gray-300" v-if="user">
        <ul class="divide-y divide-gray-300">
            <li class="px-10 py-2">a</li>
            <li class="px-10 py-2">b</li>
            <li class="px-10 py-2">c</li>
            <li class="px-10 py-2">d</li>
        </ul>
    </aside>
</template>

<script>

import { computed } from "vue";
import { usePage } from "@inertiajs/inertia-vue3";

export default {
    setup() {
        const user = computed(() => usePage().props.value.auth.user)
        return { user }
    }
}

</script>
