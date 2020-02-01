<template>
    <div>
        <div class="lg:hidden">
            <slide-up-down :active="expand_more_actions" :duration="800">
                <mano-skelbimai-actions-list></mano-skelbimai-actions-list>
            </slide-up-down>
        </div>
        <div class="hidden lg:block">
            <mano-skelbimai-actions-list></mano-skelbimai-actions-list>
        </div>
    </div>
</template>

<script>
    import bus from "../bus"

    export default {
        name: 'mano-skelbimai-actions',
        data() {
            return {
                expand_more_actions: false,
            }
        },
        mounted() {
            bus.$on('expand', () => this.expand_more_actions = !this.expand_more_actions);
        },
    }
</script>
