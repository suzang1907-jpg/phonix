<template>
    <components-list-item :title="this.item.whatsapp_phone_number" :subtitle="this.item.id"
        :timestamp="this.item.created_at">
        <div class="flex flex-row items-center justify-center">
<div class="text-sm">
<p class="whitespace-nowrap">
<span>İlan: </span><span class="font-bold">{{ item.articles?.length}}</span>
</p>
</div>
            <components-link-icon :href="this.$root.route('admin.customer.edit', { id: this.item.id })" icon="fa-pen"
                class="ml-2"></components-link-icon>
            <components-link-icon :href="this.$root.route('customer.auth.login') + '?ci=' + this.item.id" icon="fa-key"
                class="ml-2"></components-link-icon>
        </div>
    </components-list-item>
</template>
<script>
export default {
    props: ["item"],
};
</script>
