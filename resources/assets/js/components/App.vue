<template>
    <div id="App">
        <FirstComponent/>
        <MailFormComponent/>
    </div>
</template>

<script>
    import FirstComponent from "./FirstComponent";
    import MailFormComponent from "./MailFormComponent";

    export default {
        name: "App",
        components: { MailFormComponent, FirstComponent }
    };
</script>

<style scoped>

</style>