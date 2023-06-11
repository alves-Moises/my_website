<style lang="scss">
@use "resources/scss/app.scss";
</style>
<template>
    <PageMenu
        :is-authenticated="isAuthenticated"
        :can-register="canRegister"
        :can-login="canLogin"
    />

    <div class="page-wrapper">
        <div class="inner">
            <div class="content">
                <slot />
            </div>
        </div>

        <PageFooter />
    </div>
</template>
<script setup>
import { PageMenu, PageFooter } from "@/Components/Barrels/Page.js";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    isAuthenticated: {
        type: Boolean,
        required: true,
    },
});
</script>
