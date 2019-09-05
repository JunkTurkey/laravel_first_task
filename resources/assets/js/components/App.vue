<template>
    <div id="App">
        <FirstComponent/>
        <MailFormComponent/>
    </div>
</template>

<script>
    import FirstComponent from "./FirstComponent";
    import MailFormComponent from "./MailFormComponent";
    import SideTask from "./SideTask";

    export default {
        name: "App",
        components: { MailFormComponent, FirstComponent, SideTask }
    };
</script>

<style scoped>

</style>