<template>
    <div>
        <div class="bg-blue-8">
            <div class="container relative">
                <div @click="prevTab" class="nav-arrow nav-arrow-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9"><g><g transform="rotate(90 2.5 4.5)"><path fill="#0063aa" d="M5.787 2.2a.732.732 0 0 1 1.005 0 .663.663 0 0 1 0 .964L3.002 6.8a.732.732 0 0 1-1.004 0l-3.79-3.636a.663.663 0 0 1 0-.964.732.732 0 0 1 1.005 0L2.5 5.354z"/></g></g></svg>
                </div>
                <ul class="tabbed-nav flex text-12px uppercase tracking-0.5px font-medium text-blue-1">
                    <li :class="[{active:active_tab === 1}]">
                        <a href="javascript:" @click.prevent="changeTab(1)" class="px-4 md:px-8 block">Aktyvūs skelbimai (3)</a>
                    </li>
                    <li :class="[{active:active_tab === 2}]">
                        <a href="javascript:" @click.prevent="changeTab(2)" class="px-4 md:px-8 block">PASYVŪS SKELBIMAI (2)</a>
                    </li>
                    <li :class="[{active:active_tab === 3}]">
                        <a href="javascript:" @click.prevent="changeTab(3)" class="px-4 md:px-8 block">ADMINISTRACIJOS PRANEŠIMAI (0)</a>
                    </li>
                </ul>
                <div @click="nextTab" class="nav-arrow nav-arrow-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9"><g><g transform="rotate(-90 2.5 4.5)"><path fill="#0063aa" d="M-.787 2.2a.732.732 0 0 0-1.005 0 .663.663 0 0 0 0 .964L1.998 6.8a.732.732 0 0 0 1.004 0l3.79-3.636a.663.663 0 0 0 0-.964.732.732 0 0 0-1.005 0L2.5 5.354z"/></g></g></svg>
                </div>
            </div>
        </div>
        <div class="container py-24px lg:py-45px">
            <mano-skelbimai-aktyvus v-show="active_tab === 1"></mano-skelbimai-aktyvus>
            <mano-skelbimai-pasyvus v-show="active_tab === 2"></mano-skelbimai-pasyvus>
        </div>
    </div>
</template>

<script>
    import bus from "../bus"
    import ManoSkelbimaiAktyvus from "../components-partials/ManoSkelbimaiAktyvus";
    import ManoSkelbimaiPasyvus from "../components-partials/ManoSkelbimaiPasyvus";

    export default {
        name: 'mano-skelbimai',
        components: {ManoSkelbimaiPasyvus, ManoSkelbimaiAktyvus},
        data() {
            return {
                active_tab: 1,
            }
        },
        mounted() {
            bus.$on('switch-tab', (payload) => {
                this.changeTab(payload);
            });
        },
        methods: {
            changeTab(tab) {
                this.active_tab = tab;
            },
            prevTab() {
                if (this.active_tab > 1) {
                    this.active_tab = this.active_tab - 1;
                }
            },
            nextTab() {
                if (this.active_tab < 3) {
                    this.active_tab = this.active_tab + 1;
                }
            },
        },
    }
</script>
