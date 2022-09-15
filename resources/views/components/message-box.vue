<template>
    <div class="absolute bottom-1 right-1">
        <Message v-for="error in $page.props.errors"
                 :message="error"
                 type="error" />
    </div>
</template>

<script>
import Message from "@/views/components/message.vue";

export default {
    components: {
        Message
    }
}
</script>
