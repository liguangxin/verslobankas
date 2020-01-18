<template>
    <div>
        <div class="hidden md:block text-18px mb-8">Pagal kategoriją</div>
        <div @click="show" class="md:hidden flex items-center justify-between">
            <div class="text-14px">Rinktis kategoriją</div>
            <div class="h-24px w-24px rounded-full bg-white flex items-center justify-center">
                <svg width="8" height="8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 8 8"><g><g><path d="M4,0c-0.2948,0 -0.53333,0.23854 -0.53333,0.53333v2.93334v0h-2.93334c-0.2948,0 -0.53333,0.23854 -0.53333,0.53333c0,0.29479 0.23854,0.53333 0.53333,0.53333h2.93334v0v2.93334c0,0.2948 0.23854,0.53333 0.53333,0.53333c0.29479,0 0.53333,-0.23854 0.53333,-0.53333v-2.93334v0h2.93334c0.2948,0 0.53333,-0.23854 0.53333,-0.53333c0,-0.29479 -0.23854,-0.53333 -0.53333,-0.53333h-2.93334v0v-2.93334c0,-0.2948 -0.23854,-0.53333 -0.53333,-0.53333z" fill="#0063aa" fill-opacity="1"></path></g></g></svg>
            </div>
        </div>
        <ul class="hidden md:flex flex-wrap text-13px text-blue-3 font-light -mx-2 -my-3px">
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden">
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-energetika.svg" alt="energetika" />
                    </span>
                    Energetika
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden">
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-finansai.svg" alt="finansai" />
                    </span>
                    Finansai
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden">
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-gamyba.svg" alt="gamyba" />
                    </span>
                    Gamyba
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden" checked>
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-it.svg" alt="it" />
                    </span>
                    IT
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden" checked>
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-kompiuterija.svg" alt="kompiuterija" />
                    </span>
                    Kompiuterija
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden">
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-laisvalaikis.svg" alt="laisvalaikis" />
                    </span>
                    Laisvalaikis ir pramogos
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden">
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-medicina.svg" alt="medicina" />
                    </span>
                    Medicina
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden">
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-nekilnojamas-turtas.svg" alt="nekilnojamas-turtas" />
                    </span>
                    Nekilnojamas turtas
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden">
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-paslaugos.svg" alt="cat-paslaugos" />
                    </span>
                    Paslaugos
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden">
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-pramone.svg" alt="pramone" />
                    </span>
                    Pramonė
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden">
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-prekyba.svg" alt="prekyba" />
                    </span>
                    Prekyba
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden">
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-reklama.svg" alt="reklama" />
                    </span>
                    Reklama
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden">
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-sportas.svg" alt="sportas" />
                    </span>
                    Sportas
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden">
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-transportas.svg" alt="transportas" />
                    </span>
                    Transportas
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden" checked>
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-web-sprendimai.svg" alt="web-sprendimai" />
                    </span>
                    Web sprendimai
                </span>
                </label>
            </li>
            <li class="w-full md:w-1/2 lg:w-1/4 px-2 my-3px">
                <label class="cat-label cursor-pointer">
                    <input type="checkbox" name="category[]" class="cat-input hidden">
                    <span class="cat-button inline-flex items-center">
                    <span class="w-47px">
                        <img svg-inline class="icon" src="../../../public/images/cat-zemes-ukis.svg" alt="Žemės ūkis" />
                    </span>
                    Žemės ūkis
                </span>
                </label>
            </li>
        </ul>
        <modal name="categories-modal" :adaptive="true" :scrollable="true" height="auto" width="100%">
            <div slot="top-right">
                <button @click="$modal.hide('categories-modal')">
                    <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18"><g><g><path d="M17.67185,16.44961v0l-7.55479,-7.55479v0l7.40866,-7.40866c0.2794,-0.2794 0.2794,-0.73274 0,-1.01212c-0.2794,-0.2794 -0.73274,-0.2794 -1.01212,0l-7.40866,7.40961v0l-7.55408,-7.55479c-0.27848,-0.27848 -0.72902,-0.27848 -1.0075,0c-0.27848,0.27848 -0.27848,0.72995 0,1.0075l7.55408,7.55479v0l-7.7779,7.7779c-0.2794,0.2794 -0.2794,0.73274 0,1.01212c0.2794,0.2794 0.73274,0.2794 1.01212,0l7.7779,-7.7779v0l7.55479,7.55479c0.27848,0.27848 0.72902,0.27848 1.0075,0c0.27848,-0.27848 0.27848,-0.72995 0,-1.0075z" fill="#161b3d" fill-opacity="1"></path></g></g></svg>
                </button>
            </div>
            <div class="relative">
                <input class="text-12px font-light py-15px mb-8 form-input block w-full" placeholder="Įrašykite">
                <div class="absolute top-0 right-0 mt-17px mr-5"><svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 14 14"><g><g><path d="M10.49998,6.12496c0,2.41519 -1.95983,4.37502 -4.37502,4.37502c-2.41519,0 -4.37502,-1.95983 -4.37502,-4.37502c0,-2.41519 1.95983,-4.37502 4.37502,-4.37502c2.41519,0 4.37502,1.95983 4.37502,4.37502zM13.7375,13.73741c0.35,-0.35 0.35,-0.90986 0,-1.26055l-2.69466,-2.69466c0.75194,-1.01431 1.20722,-2.29202 1.20722,-3.65717c0,-3.37769 -2.74734,-6.12503 -6.12503,-6.12503c-3.37769,0 -6.12503,2.74734 -6.12503,6.12503c0,3.37769 2.74734,6.12503 6.12503,6.12503c1.36431,0 2.64202,-0.4375 3.65717,-1.20722l2.71251,2.69466c0.33292,0.35 0.89279,0.35 1.24279,0z" fill="#0063aa" fill-opacity="1"></path></g></g></svg></div>
            </div>
            <ul class="text-14px text-black-1 font-light -my-3px">
                <li class="my-3px">
                    <label class="cat-label cursor-pointer flex items-center mb-4">
                        <input type="checkbox" class="cat-input form-checkbox h-6 w-6">
                        <span class="cat-button inline-flex items-center">
                            Visos kategorijos
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6">
                        <span class="cat-button inline-flex items-center">
                            Energetika
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6">
                        <span class="cat-button inline-flex items-center">
                            Finansai
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6">
                        <span class="cat-button inline-flex items-center">
                            Gamyba
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6" checked>
                        <span class="cat-button inline-flex items-center">
                            IT
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6" checked>
                        <span class="cat-button inline-flex items-center">
                            Kompiuterija
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6">
                        <span class="cat-button inline-flex items-center">
                            Laisvalaikis ir pramogos
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6">
                        <span class="cat-button inline-flex items-center">
                            Medicina
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6">
                        <span class="cat-button inline-flex items-center">
                            Nekilnojamas turtas
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6">
                        <span class="cat-button inline-flex items-center">
                            Paslaugos
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6">
                        <span class="cat-button inline-flex items-center">
                            Pramonė
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6">
                        <span class="cat-button inline-flex items-center">
                            Prekyba
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6">
                        <span class="cat-button inline-flex items-center">
                            Reklama
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6">
                        <span class="cat-button inline-flex items-center">
                            Sportas
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6">
                        <span class="cat-button inline-flex items-center">
                            Transportas
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6" checked>
                        <span class="cat-button inline-flex items-center">
                            Web sprendimai
                        </span>
                    </label>
                </li>
                <li class="my-3px">
                    <label class="cat-label cursor-pointer inline-flex items-center">
                        <input type="checkbox" name="category[]" class="cat-input form-checkbox h-6 w-6">
                        <span class="cat-button inline-flex items-center">
                            Žemės ūkis
                        </span>
                    </label>
                </li>
            </ul>
        </modal>
    </div>
</template>

<script>
    export default {
        name: 'categories',
        methods: {
            show() {
                this.$modal.show('categories-modal');
            },
        },
    }
</script>
