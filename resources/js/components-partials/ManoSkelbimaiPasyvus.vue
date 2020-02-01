<template>
    <div>
        <div class="flex items-center justify-between mb-4 lg:mb-24px">
            <div class="flex justify-between lg:justify-start lg:text-18px font-light">
                Mano pasyvūs skelbimai <span class="text-blue-3 font-normal ml-1">(2)</span>
            </div>
            <button class="hidden lg:flex items-center justify-center mb-4 lg:mb-0 w-full lg:w-auto bg-blue-3 text-white text-12px uppercase font-medium tracking-0.5px bg-blue-2 rounded-4px py-4 px-24px">
                ATNAUJINTI VISUS SKELBIMUS
            </button>
        </div>
        <div v-for="(item) in [1,2]" class="vbad flex flex-col lg:flex-row rounded-10px p-8px lg:p-12px mb-2 relative">
            <div class="flex-1 lg:pr-8">
                <div class="flex mb-4 border-b lg:border-0 border-blue-10">
                    <div class="mr-10px lg:mr-24px">
                        <a href="javascript:" class="bg-cover bg-center bg-blue-2 flex items-center justify-center w-98px h-92px lg:w-108px lg:h-108px rounded-lg">
                            <img svg-inline class="icon" src="../../../public/images/watermark.svg" alt="" />
                        </a>
                    </div>
                    <div class="flex-1">
                        <div class="lg:pt-8px lg:border-b lg:border-blue-10 lg:pb-4 mb-10px">
                            <div class="flex justify-between">
                                <div class="flex flex-col-reverse lg:flex-col">
                                    <div class="text-blue-1 text-12px">Parduodu versla > Kompiuteriai / IT</div>
                                    <div class="text-14px lg:text-16px leading-tight lg:leading-normal mb-1 lg:mb-0">Parduodu transporto įmonę</div>
                                </div>
                                <div v-if="item === 2" class="hidden lg:flex flex-1 max-w-287px text-12px font-light tracking-0.23px">
                                    <div class="flex-1 pr-24px">
                                        <div class="flex justify-between">
                                            <span>Rodytas</span>
                                            <span class="text-green-1 font-normal">0</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span>Skaitytas</span>
                                            <span class="text-green-1 font-normal">0</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between">
                                            <span>Komentarai</span>
                                            <span class="text-green-1 font-normal">0</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span>Įsimintinas</span>
                                            <span class="text-green-1 font-normal">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8px lg:mt-12px flex justify-between">
                                <div class="flex">
                                    <div class="text-13px font-light bg-yellow-1 inline-block text-white px-2 py-1 rounded-8px lg:mr-27px">Laukia patvirtinimo</div>
                                    <div v-if="item === 2" class="hidden lg:flex items-center text-13px font-light">
                                        Skelbimo pozicija
                                        <span class="bg-yellow-1 text-white rounded-8px ml-13px px-3 py-1">-</span>
                                    </div>
                                </div>
                                <div class="hidden lg:block font-medium tracking-0.3px">
                                    900 EUR
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:hidden flex items-center justify-between mb-4">
                    <div class="flex items-center text-13px font-light">
                        Skelbimo pozicija
                        <span class="bg-yellow-1 text-white rounded-8px ml-13px px-3 py-1">31</span>
                    </div>
                    <div class="font-medium tracking-0.3px">
                        900 EUR
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row  lg:justify-end">
                    <button v-if="item === 2" class="px-27px py-15px rounded-4px uppercase bg-yellow-2 text-yellow-1 text-12px font-medium block lg:mr-4 mb-10px lg:mb-0">
                        PARYŠKINTAS IKI 2019-02-14
                    </button>
                    <button v-else class="border border-blue-3 px-27px py-15px rounded-4px uppercase text-blue-3 text-12px font-medium block lg:mr-4 mb-10px lg:mb-0">
                        PARYŠKINTI SKELBIMĄ
                    </button>
                    <button class="border border-blue-3 px-27px py-15px rounded-4px uppercase text-blue-3 text-12px font-medium block">
                        IŠKELTI SKELBIMĄ
                    </button>
                </div>
            </div>
            <div class="lg:w-157px pt-8px">
                <button @click.prevent="toggle" type="button" class="focus:outline-none w-full flex lg:hidden items-center justify-center pt-1 pb-2">
                    <span class="underline text-13px font-light text-blue-3 mr-2">Daugiau</span>
                    <span class="mt-2px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="5" viewBox="0 0 9 5"><g><g><path fill="#0063aa" d="M1.213.2A.732.732 0 0 0 .208.2a.663.663 0 0 0 0 .964L3.998 4.8a.732.732 0 0 0 1.004 0l3.79-3.636a.663.663 0 0 0 0-.964.732.732 0 0 0-1.005 0L4.5 3.354z"/></g></g></svg>
                        </span>
                </button>
                <mano-skelbimai-actions></mano-skelbimai-actions>
            </div>
        </div>
        <a href="javascript:" @click.prevent="switchTab(1)" class="text-blue-3 text-14px lg:text-16px font-light tracking-0.3px underline inline-block mt-4">Aktyvūs skelbimai >></a>
    </div>
</template>

<script>
    import ManoSkelbimaiActions from "../components-partials/ManoSkelbimaiActions";
    import bus from "../bus"

    export default {
        name: 'mano-skelbimai-pasyvus',
        components: {ManoSkelbimaiActions},
        methods: {
            toggle() {
                bus.$emit('expand');
            },
            switchTab(tab) {
                bus.$emit('switch-tab', tab);
            },
        },
    }
</script>
