<template>
    <div class="articles-list-component">
        <div class="card">
            <table class="shadow bg-gray-100">
                <thead>
                <tr>
                    <th class="text-left">Date</th>
                    <th class="text-left">Title</th>
                    <th class="text-left">Published Status</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="article in articles" :key="article.id" class="border-b">
                    <td class="">{{ article.created_at }}</td>
                    <td class=""><a :href="`/admin/articles/${article.id}`" class="hover:underline hover:text-purple">{{ article.title }}</a></td>
                    <td>{{ article.published_status }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="list-pagination card">
            <p class="label">Pages</p>
            <span class="page-link" v-for="(page_link, page_number) in page_links" @click="fetchArticles(page_number)">{{ page_number }}</span>
        </div>
    </div>
</template>

<script type="text/babel">
    export default {

        props: ['initial-list'],

        data() {
            return {
                articles: this.initialList || [],
                page_links: [],
                current_page: 1
            };
        },

        mounted() {
            eventHub.$on('created-article', () => this.fetchArticles());
            this.fetchArticles();
        },

        methods: {

            fetchArticles(page_number = 1) {
                axios.get(`/admin/services/articles?page=${page_number}`)
                    .then(({data}) => this.setFetchedData(data))
                    .catch(err => console.log(err));
            },

            setFetchedData(fetched_data) {
                this.articles = fetched_data.articles;
                this.page_links = fetched_data.page_links;
                this.current_page = fetched_data.current_page;
            }
        }
    }
</script>

<style scoped lang="less">
    table {
        width: 100%;
    }

    thead th {
        padding-bottom: 20px;
        padding-left: 10px;

    }

    tbody td {
        padding: 5px 0 5px 10px;
    }

    .list-pagination {
        .page-link {
            display: inline-block;
            margin: 0 1em;
            cursor: pointer;

            &:hover {
                color: #1b6d85;
            }
        }
    }
</style>