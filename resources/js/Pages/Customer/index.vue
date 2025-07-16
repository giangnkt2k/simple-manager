<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Eye, UserRoundPen, CircleX, CirclePlus, UserSearch } from "lucide-vue-next";
const headerTable = [
    { name: "ID", key: "id" },
    { name: "Tên khách hàng", key: "name" },
    { name: "Công ty", key: "company_name" },
    { name: "SDT", key: "phone" },
    { name: "Email", key: "email" },
    { name: "Địa chỉ", key: "address" },
    { name: "Thể loại", key: "company_type" },
    { name: "Ghi chú", key: "note" },
    { name: "Hành động", key: "actions" },
];
</script>
<template>
    <AppLayout title="Customers">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Customers
            </h2>
        </template>
        <div class="grid grid-cols-12 gap-4 mx-3 my-5">
            <div class="col-span-12 glassmorphism">
                <div class="flex justify-between items-center m-3">
                    <h1 class="text-2xl font-bold">Customer Management</h1>
                    <div class="flex space-x-2">
                        <button
                            class="glassmorphism blur-glass  text-white px-4 py-2  hover:bg-[#421196] transition-colors"
                            @click="$inertia.visit('/customers/create')"
                        >
                            <CirclePlus color="#fff" :size="20" />
                        </button>
                        <input
                            type="text"
                            placeholder="Search..."
                            class="glassmorphism  blur-glass focus:border-white focus:ring-white shadow-sm px-4 py-2"
                        />
                        <button
                            class="glassmorphism blur-glass text-white px-4 py-2  hover:bg-[#421196] transition-colors"
                            @click="$inertia.visit('/customers/create')"
                        >
                            <UserSearch color="#fff" :size="20" />
                        </button>
                    </div>
                </div>
                <div class="relative overflow-x-auto">
                    <table
                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                    >
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                        >
                            <tr>
                                <th
                                    v-for="header in headerTable"
                                    :key="header.key"
                                    scope="col"
                                    class="px-6 py-3"
                                >
                                    {{ header.name }}
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200"
                            >
                                <th
                                    scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                >
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">Silver</td>
                                <td class="px-6 py-4">Laptop</td>
                                <td class="px-6 py-4">$2999</td>
                                <td class="px-6 py-4">$2999</td>
                                <td class="px-6 py-4">$2999</td>
                                <td class="px-6 py-4">$2999</td>
                                <td class="px-6 py-4">$2999</td>
                                <td class="px-6 py-4">
                                    <button class="mr-1">
                                        <UserRoundPen
                                            color="#421196"
                                            :size="20"
                                        />
                                    </button>
                                    <button>
                                        <CircleX color="#421196" :size="20" />
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style scoped>
h1 {
    color: #333;
}
</style>
