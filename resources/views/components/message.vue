<template>
    <div :class="`flex justify-between bg-white shadow border-l-4 border-${color}-600 px-5 py-3 rounded-sm mb-3 transition duration-150 ${visible ? 'opacity-100' : 'opacity-0'}`">
        <p>{{ message }}</p>
        <button class="ml-5" @click="visible = false">X</button>
    </div>
</template>

<script>

export default {
    data() {
        return {
            visible: true
        }
    },
    props: ['type', 'message'],
    computed: {
        color() {
            return this.type === 'error' ? 'red' : 'indigo';
        }
    }
}

</script>
