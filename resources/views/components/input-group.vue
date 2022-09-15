<template>
    <div class="mb-6">
        <label
            class="block w-full mb-3 text-indigo-700 font-semibold"
            :for="identifier">{{ title }}</label>
        <input
            class="block w-full py-2 px-3 rounded-sm outline-none"
            :type="type"
            :name="identifier"
            :id="identifier"
            :required="required"
            :placeholder="placeholder">
    </div>
</template>

<script>
export default {
    props: ['type', 'title', 'identifier', 'placeholder', 'required']
}
</script>
