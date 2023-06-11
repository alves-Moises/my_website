<style lang="scss">
@use "resources/scss/buttons.scss";
</style>
<template>
    <div class="page-menu">
        <Link :href="route('app.index')" class="logo">
            <ApplicationLogo class="w-10 pr-2" />
            <span class="text">Fordevs Community</span>
        </Link>
        <div class="navigation">
            <Link
                v-if="isAuthenticated"
                :href="route('app.question.index')"
                class="link"
            >
                <PrimaryButton type="button">
                    <i class="fa-regular fa-plus">
                        <span class="hidden sm:flex sm:inline-flex sm:pl-2"
                            >Nova pergunta</span
                        ></i
                    >
                </PrimaryButton>
            </Link>
            <Dropdown v-if="isAuthenticated" align="right" width="48">
                <template #trigger>
                    <SecondaryButton type="button">
                        <i class="fa-regular fa-user"></i>
                    </SecondaryButton>
                </template>

                <template #content>
                    <DropdownLink :href="route('app.profile.edit')">
                        Meu Perfil
                    </DropdownLink>
                    <DropdownLink
                        :href="route('app.logout')"
                        method="post"
                        as="button"
                    >
                        Sair
                    </DropdownLink>
                </template>
            </Dropdown>

            <Link v-if="showHome" :href="route('app.index')" class="link">
                Voltar ao site
            </Link>

            <Link
                v-if="!isAuthenticated"
                :href="route('app.register.page')"
                class="link"
            >
                <SecondaryButton>Criar conta</SecondaryButton>
            </Link>

            <Link
                v-if="!isAuthenticated"
                :href="route('app.login.page')"
                class="link"
            >
                <PrimaryButton>Entrar</PrimaryButton>
            </Link>
        </div>
    </div>
</template>
<script setup>
import {
    Link,
    PrimaryButton,
    SecondaryButton,
    Dropdown,
    DropdownLink,
} from "@/Components/Barrels/PageMenu.js";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

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
    showHome: {
        type: Boolean,
        default: false,
    },
});
</script>
