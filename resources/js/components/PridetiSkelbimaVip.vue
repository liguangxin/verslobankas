<template>
    <div>
        <plans-cards></plans-cards>
        <additional-services></additional-services>
    </div>
</template>

<script>
    import PlansCards from "../components-partials/PlansCards";
    import AdditionalServices from "../components-partials/AdditionalServices";
    export default {
        name: 'prideti-skelbima-vip',
        components: {AdditionalServices, PlansCards},
    }
</script>
