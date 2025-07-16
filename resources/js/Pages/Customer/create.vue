<template>
    <AppLayout title="Customers">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Customers
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h1 class="text-2xl font-bold">Customer Management</h1>
                    <div class="flex space-x-2 my-4">
                        <button
                            class="glassmorphism blur-glass text-white px-4 py-2 rounded hover:bg-[#421196] transition-colors"
                            @click="$inertia.visit('/customers/create')"
                        >
                            <CirclePlus color="#fff" :size="20" />
                        </button>
                        <input
                            type="text"
                            placeholder="Search..."
                            class="glassmorphism blur-glass focus:border-white focus:ring-white rounded-md shadow-sm px-4 py-2"
                        />
                        <button
                            class="glassmorphism blur-glass text-white px-4 py-2 rounded hover:bg-[#421196] transition-colors"
                            @click="$inertia.visit('/customers/create')"
                        >
                            <UserSearch color="#fff" :size="20" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>