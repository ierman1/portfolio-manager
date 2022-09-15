<template>
    <button
        v-if="color"
        :class="`drop-shadow-md bg-${color}-500 hover:bg-${color}-600 text-white font-semibold rounded-md px-6 py-2`"
        :type="submit ? 'submit' : ''"
        @click="$emit('click')">{{ text }}</button>
</template>

<script>

    export default {
        props: ['text', 'submit', 'type'],
        computed: {
            color() {
                return this.type === 'primary' ? 'indigo' : 'gray';
            }
        },
        mounted() {
            console.log(this.color)
        }
    }

</script>
