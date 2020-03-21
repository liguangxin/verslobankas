<template>
    <div class="-mx-4 md:mx-0">
        <swiper :options="swiperOption" ref="slider">
            <swiper-slide>
                <div class="relative overflow-hidden border border-blue-5 bg-white shadow-custom-1 p-4 max-w-250px min-h-350px">
                    <div class="text-center pt-4">
                        <div class="text-20px font-medium tracking-0.38px text-blue-3 leading-tight mb-1">45 dienos</div>
                        <div class="text-14px font-light mb-8">Skelbimo galiojimas</div>
                        <div class="sep"></div>
                    </div>
                    <div>
                        <div class="flex items-center justify-center h-24px mb-23px">
                            <img svg-inline class="icon" src="../../../public/images/red_cross.svg" alt="ne" />
                        </div>
                        <div class="flex items-center justify-center h-24px mb-23px">
                            <img svg-inline class="icon" src="../../../public/images/red_cross.svg" alt="ne" />
                        </div>
                        <div class="flex items-center">
                            <span class="mr-1">
                                <img svg-inline class="icon" src="../../../public/images/info.svg" alt="info" />
                            </span>
                            <span class="text-12px">Skelbimas patvirtinamas iškarto</span>
                        </div>
                    </div>
                    <button class="absolute left-0 right-0 bottom-0 mx-auto mb-4 flex items-center justify-center w-full border border-blue-3 max-w-218px bg-white text-blue-3 text-12px uppercase font-medium tracking-0.5px rounded-4px p-4">
                        <span class="line-through mr-1">12,25 €</span> 9,99 €
                    </button>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="relative overflow-hidden border border-blue-5 bg-white shadow-custom-1 p-4 max-w-250px min-h-350px">
                    <div class="discount-badget">
                        <span>-33 %</span>
                    </div>
                    <div class="text-center pt-4">
                        <div class="text-20px font-medium tracking-0.38px text-blue-3 leading-tight mb-1">60 dienų</div>
                        <div class="text-14px font-light mb-8">Skelbimo galiojimas</div>
                        <div class="sep"></div>
                    </div>
                    <div>
                        <div class="flex items-center mb-23px whitespace-no-wrap">
                            <span class="mr-1">
                                <img svg-inline class="icon" src="../../../public/images/info.svg" alt="info" />
                            </span>
                            <span class="text-12px">Skelbimo iškėlimas</span>
                            <div class="bg-yellow-1 text-white text-12px rounded flex items-center justify-center w-36px h-23px mx-2">
                                <span class="mr-1">1</span>
                                <svg width="11" height="10" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 11 10"><g><g><path d="M8.31027,6.3249c-0.06268,0.06268 -0.08357,0.14398 -0.08357,0.22801l0.45603,2.61174c0.04179,0.24891 -0.06268,0.51871 -0.2698,0.6627c-0.20712,0.14399 -0.47693,0.16534 -0.72538,0.06268l-2.34419,-1.22326c-0.08358,-0.04178 -0.16534,-0.04178 -0.24891,0l-2.34418,1.22326c-0.10447,0.06268 -0.20712,0.08358 -0.3116,0.08358c-0.14398,0 -0.2698,-0.04179 -0.39289,-0.1231c-0.20712,-0.14399 -0.31159,-0.41379 -0.2698,-0.66269l0.45603,-2.61396c0.0209,-0.08357 -0.02089,-0.16534 -0.08357,-0.22801l-1.90675,-1.865c-0.18623,-0.18623 -0.24891,-0.45603 -0.16534,-0.70449c0.08358,-0.2489 0.2907,-0.41379 0.53961,-0.45603l2.61535,-0.3979c0.08357,-0.02089 0.16533,-0.06268 0.20711,-0.14399l1.1814,-2.38372c0.12309,-0.23029 0.35338,-0.37473 0.60229,-0.37473c0.2698,0 0.49781,0.14399 0.60229,0.37428l1.1814,2.38372c0.04178,0.08358 0.10447,0.12536 0.20711,0.14399l2.61396,0.372c0.2698,0.04179 0.47693,0.20711 0.5605,0.45603c0.08357,0.24892 0.02089,0.51871 -0.16534,0.70449z" fill="#ffffff" fill-opacity="1"></path></g></g></svg>
                            </div>
                            <span class="text-14px">30 d.</span>
                        </div>
                        <div class="flex items-center mb-23px whitespace-no-wrap">
                            <span class="mr-1">
                                <img svg-inline class="icon" src="../../../public/images/info.svg" alt="info" />
                            </span>
                            <span class="text-12px">Skelbimo paryškinimas</span>
                            <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="24" viewBox="0 0 29 24"><g><g><g><path fill="#eef2f9" d="M0 2a2 2 0 0 1 2-2h25a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z"/></g><g><path fill="#ff9131" d="M0 11a2 2 0 0 1 2-2h25a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z"/></g><g><path fill="#eef2f9" d="M0 20a2 2 0 0 1 2-2h25a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z"/></g></g></g></svg></span>
                            <span class="text-14px">15 d.</span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-1">
                                <img svg-inline class="icon" src="../../../public/images/info.svg" alt="info" />
                            </span>
                            <span class="text-12px">Skelbimas patvirtinamas iškarto</span>
                        </div>
                    </div>
                    <button class="absolute left-0 right-0 bottom-0 mx-auto mb-4 border border-blue-3 flex items-center justify-center w-full max-w-218px bg-blue-3 text-white text-12px uppercase font-medium tracking-0.5px bg-blue-2 rounded-4px p-4">
                        <span class="line-through mr-1">12,25 €</span> 9,99 €
                    </button>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="opacity-50 relative overflow-hidden border border-blue-5 bg-white shadow-custom-1 p-4 max-w-250px min-h-350px">
                    <div class="discount-badget">
                        <span>-46 %</span>
                    </div>
                    <div class="text-center pt-4">
                        <div class="text-20px font-medium tracking-0.38px text-blue-3 leading-tight mb-1">60 dienų</div>
                        <div class="text-14px font-light mb-8">Skelbimo galiojimas</div>
                        <div class="sep"></div>
                    </div>
                    <div>
                        <div class="flex items-center mb-23px whitespace-no-wrap">
                            <span class="mr-1">
                                <img svg-inline class="icon" src="../../../public/images/info.svg" alt="info" />
                            </span>
                            <span class="text-12px">Skelbimo iškėlimas</span>
                            <div class="bg-yellow-1 text-white text-12px rounded flex items-center justify-center w-36px h-23px mx-2">
                                <span class="mr-1">2</span>
                                <svg width="11" height="10" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 11 10"><g><g><path d="M8.31027,6.3249c-0.06268,0.06268 -0.08357,0.14398 -0.08357,0.22801l0.45603,2.61174c0.04179,0.24891 -0.06268,0.51871 -0.2698,0.6627c-0.20712,0.14399 -0.47693,0.16534 -0.72538,0.06268l-2.34419,-1.22326c-0.08358,-0.04178 -0.16534,-0.04178 -0.24891,0l-2.34418,1.22326c-0.10447,0.06268 -0.20712,0.08358 -0.3116,0.08358c-0.14398,0 -0.2698,-0.04179 -0.39289,-0.1231c-0.20712,-0.14399 -0.31159,-0.41379 -0.2698,-0.66269l0.45603,-2.61396c0.0209,-0.08357 -0.02089,-0.16534 -0.08357,-0.22801l-1.90675,-1.865c-0.18623,-0.18623 -0.24891,-0.45603 -0.16534,-0.70449c0.08358,-0.2489 0.2907,-0.41379 0.53961,-0.45603l2.61535,-0.3979c0.08357,-0.02089 0.16533,-0.06268 0.20711,-0.14399l1.1814,-2.38372c0.12309,-0.23029 0.35338,-0.37473 0.60229,-0.37473c0.2698,0 0.49781,0.14399 0.60229,0.37428l1.1814,2.38372c0.04178,0.08358 0.10447,0.12536 0.20711,0.14399l2.61396,0.372c0.2698,0.04179 0.47693,0.20711 0.5605,0.45603c0.08357,0.24892 0.02089,0.51871 -0.16534,0.70449z" fill="#ffffff" fill-opacity="1"></path></g></g></svg>
                            </div>
                            <span class="text-14px">90 d.</span>
                        </div>
                        <div class="flex items-center mb-23px whitespace-no-wrap">
                            <span class="mr-1">
                                <img svg-inline class="icon" src="../../../public/images/info.svg" alt="info" />
                            </span>
                            <span class="text-12px">Skelbimo paryškinimas</span>
                            <span class="mx-1"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="24" viewBox="0 0 29 24"><g><g><g><path fill="#eef2f9" d="M0 2a2 2 0 0 1 2-2h25a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z"/></g><g><path fill="#ff9131" d="M0 11a2 2 0 0 1 2-2h25a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z"/></g><g><path fill="#eef2f9" d="M0 20a2 2 0 0 1 2-2h25a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2z"/></g></g></g></svg></span>
                            <span class="text-14px">30 d.</span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-1">
                                <img svg-inline class="icon" src="../../../public/images/info.svg" alt="info" />
                            </span>
                            <span class="text-12px">Skelbimas patvirtinamas iškarto</span>
                        </div>
                    </div>
                    <button class="absolute left-0 right-0 bottom-0 mx-auto mb-4 flex items-center justify-center w-full border border-blue-3 max-w-218px bg-white text-blue-3 text-12px uppercase font-medium tracking-0.5px rounded-4px p-4">
                        <span class="line-through mr-1">12,25 €</span> 9,99 €
                    </button>
                </div>
            </swiper-slide>
        </swiper>
    </div>
</template>

<script>
    export default {
        name: 'plans-cards',

        data: () => ({
            swiperOption: {
                slidesPerView: 'auto',
                centeredSlides: true,
                spaceBetween: 6,
                breakpoints: {
                    600: {
                        slidesPerView: 3,
                        centeredSlides: false,
                    }
                },
            },
        }),

        computed: {
            swiper() {
                return this.$refs.slider.$swiper;
            }
        },

        mounted() {
            this.swiper.slideTo(1, 0, false);
        },
    }
</script>

<style lang="scss">
    .swiper-slide {
        width: 250px;
    }

    .discount-badget {
        position: absolute;
        top: -45px;
        left: 15px;
        height: 140px;
        color: #fff;
        font-size: 12px;
        font-weight: 500;
        background-color: #5aac44;
        width: 21px;
        text-align: center;
        transform: rotate(45deg);
        display: flex;
        align-items: center;
        justify-content: center;
        @apply bg-green-1;

        span {
            transform: rotate(-180deg);
            writing-mode: vertical-rl;
        }
    }
</style>
