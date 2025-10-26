<template>
    <div>
        <div v-if="!this.value" class="bg-base-100 p-2 flex flex-col border border-base-200">
            <h3 class="text-sm">Müşteri</h3>
            <p class="py-4 text-center text-sm">Müşteri seçilmedi.</p>
            <button class="btn" v-on:click="this.openModal">Müşteri seç</button>
        </div>
        <div v-if="this.value" class="bg-base-100 p-2 flex flex-col border border-base-200">
            <h3 class="text-sm">Müşteri</h3>
            <div class="py-4">
                <p class="text-center text-sm">{{ this.value.id }}</p>
                <p class="text-center text-sm">{{ this.value.whatsapp_phone_number }}</p>
            </div>
            <button class="btn mt-2" v-on:click="this.openModal">Müşteri seç</button>
            <button class="btn btn-ghost mt-2" v-on:click="this.resetValue">Seçimi sıfırla</button>
        </div>
        <dialog ref="modal" id="customer_search_modal" class="modal">
            <div class="modal-box">
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>
                <h3 class="text-lg font-bold">Müşteri ara</h3>
                <label class="form-control w-full mt-6">
                    <input :name="'customer_search'" v-model="search" type="text" placeholder="Müşteri ara..."
                        class="input input-bordered w-full" />
                </label>
                <div v-if="this.customers" class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>WP</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="(customer) in this.customers">
                                <tr>
                                    <td>{{ customer.id }}</td>
                                    <td>{{ customer.whatsapp_phone_number }}</td>
                                    <th>
                                        <button v-on:click="selectCustomer(customer)"
                                            class="btn btn-ghost btn-xs">Select</button>
                                    </th>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </dialog>
    </div>
</template>
<script>
import ApiRequest from '../../../../js/utils/api/ApiRequest';

export default {
    data() {
        return {
            search: null,
            value: this.$props.xvalue,
            customers: null
        };
    },
    props: ['xvalue'],
    methods: {
        openModal: function () {
            if (this.search && this.search != '') {
                this.fetchResults();
            }

            const modal = this.$refs.modal;

            if (modal) {
                modal.show();
            }
        },
        closeModal: function () {
            const modal = this.$refs.modal;

            if (modal) {
                modal.close();
            }
        },
        fetchResults: async function () {
            if (!this.search) {
                this.customers = null;
                return;
            }

            const response = await ApiRequest.post(this.$root.route('api.customer.search.employee'), {
                search: this.search
            }, this, { hideLoadingOverlay: false, showAlert: false, showLoadingOverlay: false });

            if (!response || !response.ok()) {
                this.customers = null;
            }

            this.customers = response.getData('customers');
        },
        resetValue: function () {
            this.value = null;
        },
        selectCustomer: function (customer) {
            this.value = customer;
            this.closeModal();
        }
    },
    watch: {
        search(newValue) {
            clearTimeout(this.timeoutId);
            this.timeoutId = setTimeout(() => {
                this.fetchResults();
            }, 500);
        },
    },
}
</script>
