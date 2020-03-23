<template>
    <div v-if="errors.length" class="flex items-start bg-red-2 border border-red-3 rounded-4px p-21px mb-4">
        <div>
            <img svg-inline class="icon" src="../../../public/images/alert.svg" alt="Klaida" />
        </div>
        <div>
            <ul>
                <li v-for="error in errors" class="flex items-center mb-2 last:mb-0">
                    <div class="ml-21px text-14px font-light tracking-0.58px text-red-3">{{ error }}</div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'validation-errors',
        data() {
            return {
                errors: [],
            }
        },
        created() {
            this.errors = JSON.parse(document.getElementById('app').dataset.errors);
        },
    }
</script>
