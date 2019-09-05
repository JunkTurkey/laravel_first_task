<template>
    <div id="FirstComponent">
        <input v-model="belki" placeholder="belki" />
        <input v-model="rubli" placeholder="rubli" />
    </div>
</template>

<script>
    export default {
        name: "FirstComponent",
        data: function() {
            return {
                belki: 0,
                rubli: 0,
                exchanger: 3.1
            };
        },
        watch: {
            belki: function(value) {
                return (this.rubli = value * this.exchanger);
            },
            rubli: function(value) {
                return (this.belki = value / this.exchanger);
            }
        }
    };
</script>

<style scoped>

</style>