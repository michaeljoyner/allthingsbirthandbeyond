<template>
    <div class="testimonials-list-component">
        <testimonial v-for="testimonial in testimonials"
                     :key="testimonial.id"
                     :item-attributes="testimonial"
                     @remove-testimonial="removeTestimonial"
        ></testimonial>
    </div>
</template>

<script type="text/babel">
    export default {

        props: ['initial-list'],

        data() {
            return {
                testimonials: []
            };
        },

        mounted() {
            eventHub.$on('created-testimonial', () => this.fetchTestimonials());
            this.testimonials = this.initialList || [];
        },

        methods: {
            fetchTestimonials() {
                axios.get('/admin/services/testimonials')
                    .then(({data}) => this.testimonials = data)
                    .catch(err => console.log(err));
            },

            removeTestimonial(id) {
                this.testimonials.splice(this.testimonials.indexOf(this.testimonials.find(t => t.id === id)), 1);
            }
        }
    }
</script>