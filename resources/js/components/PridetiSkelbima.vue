<template>
    <div class="container max-w-512px py-8 lg:py-50px text-14px">
        <div>
            <label class="block">
                <span class="block mb-3">Verslo skelbimo antraštė</span>
                <input class="form-input mt-1 block w-full" v-model="title">
            </label>
        </div>
        <div class="flex flex-col my-24px lg:my-8">
            <div class="mb-3">Veiksmai</div>
            <div class="flex lg:items-center">
                <label class="inline-flex items-center">
                    <input type="radio" v-model="ad_type" value="sell" class="form-radio text-blue-3">
                    <span class="ml-4 font-light tracking-0.5px">Siūlau</span>
                </label>
                <label class="inline-flex items-center ml-8">
                    <input type="radio" v-model="ad_type" value="buy" class="form-radio text-blue-3">
                    <span class="ml-4 font-light tracking-0.5px">Ieškau</span>
                </label>
            </div>
        </div>
        <div>
            <label class="block lg:max-w-250px relative">
                <span class="block mb-3">Kategorija</span>
                <select name="ad_type" v-model="category" class="form-select block w-full text-12px py-14px border-blue-4">
                    <option value="">Pasirinkite</option>
                    <option v-for="category in categories" :value="category.id" :key="`${category.id}`">{{ category.name }}</option>
                </select>
            </label>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'prodeti-skelbima',

        props: ['categories'],

        data: () => ({
            title: null,
            ad_type: null,
            category: '',
        }),
    }
</script>
