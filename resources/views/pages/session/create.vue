<template>
    <div class="w-full md:w-3/4 lg:w-1/3 m-auto py-10 px-5 md:px-10">
        <form :action="route('session.store')" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" :value="$page.props.csrf">

            <InputGroup type="email" title="Email" identifier="email" placeholder="jon@doe.com" required="true" />
            <InputGroup type="password" title="Password" identifier="password" :required="true" />
            <Checkbox title="Remember me" identifier="remember" />

            <Button type="primary" submit="true" text="Login" class="mt-5" />
            <a href="" class="inline-block ml-3 text-indigo-700">Forgot my password</a>
        </form>
    </div>
</template>

<script>
import Layout from '@/views/layouts/default.vue';
import Button from '@/views/components/custom-button.vue';
import Checkbox from '@/views/components/checkbox.vue';
import InputGroup from "@/views/components/input-group.vue";

export default {
    layout: Layout,
    components: {
        InputGroup,
        Button,
        Checkbox
    }
}

</script>
