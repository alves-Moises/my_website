<style lang="scss">
@use "resources/scss/footer.scss";
</style>
<template>
    <footer class="page-footer">
        <div class="wrapper">
            <div class="content">
                <a
                    target="_blank"
                    href="https://github.com/r3c4-d3v/"
                    class="link"
                >
                    <HeartIcon />
                    Made with love
                </a>
            </div>
        </div>
    </footer>
</template>
<script setup>
import { HeartIcon } from "@/Components/Barrels/PageFooter.js";

</script>
