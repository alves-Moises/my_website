<style lang="scss">
@use "resources/scss/commons.scss";
</style>

<template>
    <Head>
        <title>Nova pergunta</title>
    </Head>
    <Page :is-authenticated="isAuthenticated">
        <form @submit.prevent="newQuestionStore" class="common-form">
            <div>
                <InputLabel for="title" value="Título" />
                <TextInput id="title" type="text" v-model="form.title" />
                <InputError :message="form.errors.title" />
            </div>
            <div>
                <InputLabel for="question" value="Pergunta" />
                <TextInput id="question" type="text" v-model="form.question" />
                <InputError :message="form.errors.question" />
            </div>
            <div>
                <InputLabel for="tags" value="Tags" />
                <TextInput id="tags" type="text" v-model="form.tags" />
                <InputError :message="form.errors.tags" />
            </div>
            <!-- Buttons -->
            <div class="container__buttons">
                <PrimaryButton :disabled="form.processing">Perguntar</PrimaryButton>

                <Transition
                    class="transition--default"
                    leave-to-class="opacity-0"
                    enter-from-class="opacity-0"
                >
                    <p v-if="form.recentlySuccessful" class="p-success">
                        Pergunta enviada com sucesso!
                    </p>
                </Transition>
            </div>
        </form>
    </Page>
</template>

<script setup>
import Page from "@/Components/Page.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import {
    handleFormFieldErrors,
    InputError, PrimaryButton,
    useForm,
} from "@/Pages/Admin/Courier/Partials/Barrels/StoreCourierForm.js";
import { ref } from "vue";

const title = ref(null);
const question = ref(null);
const tags = ref(null);

const form = useForm({
    title: "",
    question: "",
    tags: "",
});

const reset = () => {
    form.reset();
};

const newQuestionStore = () => {
    form.post(route("app.question.store"), {
        preserveScroll: true,
        onSuccess: () => reset(),
        onError: () => {
            handleFormFieldErrors("title", title, form);
            handleFormFieldErrors("question", question, form);
            handleFormFieldErrors("tags", tags, form);
        },
    });
};

defineProps({
    isAuthenticated: {
        type: Boolean,
        required: true,
    },
});
</script>
