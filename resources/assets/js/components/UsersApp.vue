<template>
    <div class="user-app-component">
        <div class="flex items-center justify-between shadow my-8 p-4" v-for="user in users">
            <div class="">
                <div class="">
                    <p class="capitalize text-lg font-bold mb-2">{{ user.name }}</p>
                    <p class="text-gray-600">{{ user.email }}</p>
                    <span class="text-sm text-gray-600 user-card-status">{{ user.superadmin ? 'Superadmin' : 'Regular' }}</span>
                </div>
            </div>

            <span>
                <delete-button :delete-url="`/admin/users/${user.id}`"
                               v-on:item-deleted="removeUser(user)"></delete-button>
            </span>
        </div>
    </div>
</template>

<script type="text/babel">
    export default {

        data() {
            return {
                users: []
            };
        },

        mounted() {
            this.fetchUsers();
            eventHub.$on('user-added', () => this.fetchUsers());
        },

        methods: {

            fetchUsers() {
                axios.get('/admin/services/users')
                        .then(({data}) => this.users = data)
                        .catch(err => console.log(err.response));
            },

            removeUser(user) {
                this.users.splice(this.users.indexOf(user), 1);
            }
        }
    }
</script>