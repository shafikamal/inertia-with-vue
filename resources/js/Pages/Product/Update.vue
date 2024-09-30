<template>
    <Frontend>
        <div class="container mx-auto p-6">
            <div class="flex justify-between">
                <h5 >Product Update</h5>
            </div>
            <form @submit.prevent="updateProduct()">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-6">
                        <!-- Product Name Input -->
                        <div class="mb-3">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Product Name</label>
                            <input
                                type="text"
                                v-model="form.name"
                                class="py-2 px-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                            />
                            <div v-if="errors.name" class="text-red-500 text-sm mt-1">{{ errors.name }}</div>
                        </div>

                        <!-- Product Price Input -->
                        <div class="mb-3">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Product Price</label>
                            <input
                                type="text"
                                v-model="form.price"
                                class="py-2 px-3 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                            />
                            <div v-if="errors.price" class="text-red-500 text-sm mt-1">{{ errors.price }}</div>
                        </div>

                        <!-- Save Button -->
                        <div class="mb-3">
                            <button
                                type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            >
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </Frontend>

</template>

<script setup>
import Frontend from "@/Layouts/Frontend.vue";
import {useForm} from "@inertiajs/vue3";

const props = defineProps({
    errors: Object,
    product:Object
})

const form = useForm ({
    name:props.product.name,
    price: props.product.price,
});

const updateProduct = () => {
    const res = form.put(route('product.update', props.product.id))
    if (res){
        form.reset()
    }
};

</script>
