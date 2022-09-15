<template>
    <div class="mb-6">
        <input
            type="checkbox"
            :name="identifier"
            :id="identifier">
        <label
            class="inline-block ml-3 text-indigo-700 font-semibold cursor-pointer"
            :for="identifier">{{ title }}</label>
    </div>
</template>

<script>
export default {
    props: ['title', 'identifier']
}
</script>
