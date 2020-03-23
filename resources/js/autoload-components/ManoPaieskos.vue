<template>
    <div>
        <div class="flex items-center bg-white p-2 lg:p-24px border border-blue-5 mb-2 rounded-lg">
            <div class="flex items-center">
                <button type="button" class="w-30px">
                    <img svg-inline class="icon" src="../../../public/images/close.svg" alt="" />
                </button>
            </div>
            <div class="flex items-center">
                <div class="hidden lg:block mr-3">
                    <span class="bg-yellow-1 text-white text-12px px-6px inline-block min-w-28px text-center rounded">+9</span>
                </div>
                <div>
                    <div class="text-12px lg:text-13px font-light">Antraštės tekstas</div>
                    <div class="text-10px text-blue-1">Kompiuterija | Vilnius</div>
                </div>
            </div>
            <div class="text-10px flex justify-end flex-1 lg:mr-4">
                <div class="flex flex-col lg:flex-row lg:items-center mr-3">
                    <div class="hidden lg:block max-w-90px">Gauti naujus skelbimus ekrane</div>
                    <div class="lg:hidden">Gauti ekrane</div>
                    <div class="lg:ml-4">
                        <label class="custom-switcher custom-switcher-2">
                            <input type="checkbox" class="custom-switcher-input">
                            <span class="custom-switcher-wrap">
                                    <span class="custom-switcher-circle"></span>
                                </span>
                        </label>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="hidden lg:block max-w-90px">Gauti naujus skelbimus el. paštu</div>
                    <div class="lg:hidden">El. paštu</div>
                    <div class="lg:ml-4">
                        <label class="custom-switcher custom-switcher-2">
                            <input type="checkbox" class="custom-switcher-input">
                            <span class="custom-switcher-wrap">
                                    <span class="custom-switcher-circle"></span>
                                </span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block">
                <button class="overlay_trigger bg-blue-2 p-3 rounded" :data-modal="`my_search_${iteration}`">
                    <svg width="17" height="17" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g><g><path d="M15.68392,4.21074l-1.08327,1.08327l-2.88819,-2.88819l1.08327,-1.08327c0.49735,-0.49735 1.3076,-0.49662 1.80569,0l1.08327,1.08327c0.24129,0.24056 0.37412,0.5623 0.37412,0.90246c-0.00073,0.34018 -0.1343,0.66043 -0.37486,0.90246zM6.04687,13.85187l-4.03709,1.15412l1.15389,-4.03972l7.83707,-7.84366l2.88398,2.88641zM15.32289,0.60074c-0.89358,-0.89432 -2.34924,-0.89432 -3.24352,0l-9.72926,9.73077c-0.06114,0.06114 -0.10608,0.13702 -0.12965,0.22027l-1.44093,5.04548c-0.05083,0.17827 -0.00073,0.36907 0.12966,0.50019c0.09724,0.09724 0.22689,0.14955 0.36097,0.14955c0.04715,0 0.0943,-0.00663 0.13997,-0.01989l5.04549,-1.44166c0.08324,-0.02358 0.15985,-0.06852 0.221,-0.12966l9.72775,-9.72925c0.4339,-0.43317 0.67184,-1.00925 0.67184,-1.62216c0,-0.61291 -0.23794,-1.18899 -0.67184,-1.62216z" fill="#9fa9c5" fill-opacity="1"></path></g></g></svg>
                </button>
            </div>
        </div>
        <div :id="`my_search_${iteration}`" class="mysearch-edit modal-content">
            <div class="relative p-24px lg:p-8 pt-72px lg:pt-8 lg:px-87px overflow-scroll lg:overflow-auto h-full lg:h-auto">
                <div class="text-18px text-center font-light tracking-0.34px mb-40px">Redaguoti mano paiešką</div>
                <div class="flex flex-wrap border-b border-blue-5 pb-25px mb-25px">
                    <div class="w-full lg:w-163px mb-4 lg:mb-0">
                        <select name="ad_type" class="form-select block w-full text-12px py-14px border-blue-4">
                            <option>Skelbimo tipas</option>
                        </select>
                    </div>
                    <div class="w-full bg-white lg:flex-1 lg:pl-12px">
                        <div class="flex items-center py-14px text-12px border border-blue-4 h-full rounded-4px">
                            <div class="fake-select w-122px pl-4 cursor-pointer">Vilnius</div>
                            <div class="flex-1 pr-4">
                                <input type="text" class="pl-4 outline-none" placeholder="Antraštės tekstas">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap lg:-mx-6px mb-4">
                    <div class="w-full lg:w-1/2 lg:px-6px mb-4 lg:mb-0">
                        <div class="flex -mx-6px">
                            <div class="flex-1 px-6px">
                                <label class="block">
                                    <span class="text-14px block leading-none mb-14px">Kaina</span>
                                    <select class="form-select block pl-4 w-full text-12px py-14px font-light">
                                        <option value="">Nuo</option>
                                        <option>$1,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$25,000</option>
                                    </select>
                                </label>
                            </div>
                            <div class="flex-1 px-6px">
                                <label class="block">
                                    <span class="text-14px block leading-none mb-14px">&nbsp;</span>
                                    <select class="form-select block pl-4 w-full text-12px py-14px font-light">
                                        <option value="">Iki</option>
                                        <option>$1,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$25,000</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 lg:px-6px">
                        <div class="flex -mx-6px">
                            <div class="flex-1 px-6px">
                                <label class="block">
                                    <span class="text-14px block leading-none mb-14px">Pelnas</span>
                                    <select class="form-select block pl-4 w-full text-12px py-14px font-light">
                                        <option value="">Nuo</option>
                                        <option>$1,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$25,000</option>
                                    </select>
                                </label>
                            </div>
                            <div class="flex-1 px-6px">
                                <label class="block">
                                    <span class="text-14px block leading-none mb-14px">&nbsp;</span>
                                    <select class="form-select block pl-4 w-full text-12px py-14px font-light">
                                        <option value="">Iki</option>
                                        <option>$1,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$25,000</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap lg:-mx-6px mb-4">
                    <div class="w-full lg:w-1/2 lg:px-6px mb-4 lg:mb-0">
                        <div class="flex -mx-6px">
                            <div class="flex-1 px-6px">
                                <label class="block">
                                    <span class="text-14px block leading-none mb-14px">Metinė apyvarta</span>
                                    <select class="form-select block pl-4 w-full text-12px py-14px font-light">
                                        <option value="">Nuo</option>
                                        <option>$1,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$25,000</option>
                                    </select>
                                </label>
                            </div>
                            <div class="flex-1 px-6px">
                                <label class="block">
                                    <span class="text-14px block leading-none mb-14px">&nbsp;</span>
                                    <select class="form-select block pl-4 w-full text-12px py-14px font-light">
                                        <option value="">Iki</option>
                                        <option>$1,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$25,000</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 lg:px-6px">
                        <div class="flex -mx-6px">
                            <div class="flex-1 px-6px">
                                <label class="block">
                                    <span class="text-14px block leading-none mb-14px">Darbuotojai</span>
                                    <select class="form-select block pl-4 w-full text-12px py-14px font-light">
                                        <option value="">Nuo</option>
                                        <option>1</option>
                                        <option>10</option>
                                        <option>20</option>
                                        <option>50</option>
                                    </select>
                                </label>
                            </div>
                            <div class="flex-1 px-6px">
                                <label class="block">
                                    <span class="text-14px block leading-none mb-14px">&nbsp;</span>
                                    <select class="form-select block pl-4 w-full text-12px py-14px font-light">
                                        <option value="">Iki</option>
                                        <option>$1,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$25,000</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap lg:-mx-6px mb-4 lg:mb-45px">
                    <div class="w-full lg:w-1/2 lg:px-6px mb-4 lg:mb-0">
                        <span class="text-14px block leading-none mb-14px whitespace-no-wrap">Lankytoju skaičiu per diena (www)</span>
                        <div class="flex -mx-6px">
                            <div class="flex-1 px-6px">
                                <label class="block">
                                    <select class="form-select block pl-4 w-full text-12px py-14px font-light">
                                        <option value="">Nuo</option>
                                        <option>$1,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$25,000</option>
                                    </select>
                                </label>
                            </div>
                            <div class="flex-1 px-6px">
                                <label class="block">
                                    <select class="form-select block pl-4 w-full text-12px py-14px font-light">
                                        <option value="">Iki</option>
                                        <option>$1,000</option>
                                        <option>$5,000</option>
                                        <option>$10,000</option>
                                        <option>$25,000</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 lg:px-6px flex items-end justify-end">
                        <div class="flex items-center w-full justify-center lg:justify-end h-48px">
                            <a href="javascript:" class="flex items-center text-14px font-light underline tracking-0.26px">
                                <img svg-inline class="icon mr-3" src="../../../public/images/reset.svg"  alt="" />
                                Atstatyti filtrus
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col-reverse lg:flex-row justify-center">
                    <button class="flex items-center justify-center text-blue-3 text-12px uppercase font-medium tracking-0.5px py-15px px-16">
                        ATŠAUKTI
                    </button>
                    <button class="flex items-center justify-center mb-4 lg:mb-0 w-full min-w-222px lg:w-auto bg-blue-3 text-white text-12px uppercase font-medium tracking-0.5px bg-blue-2 rounded-4px p-4">
                        IŠSAUGOTI
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'mano-paieskos',
        props: ['iteration'],
    }
</script>
