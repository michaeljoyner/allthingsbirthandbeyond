<template>
    <span class="testimonial-form-component">
        <button class="dd-btn btn" @click="modalOpen = true">{{ buttonText }}</button>
        <modal :show="modalOpen" class="form-modal">
            <div slot="header">
                <h3>{{ formType === 'create' ? 'Add a New Testimonial' : 'Edit this Testimonial' }}</h3>
            </div>
            <div slot="body">
                <p class="lead text-danger" v-show="mainError">{{ mainError }}</p>
                <form action="" class="dd-form" @submit.stop.prevent="submit">
                    <div class="form-group" :class="{'has-error': form.errors.client}">
                        <label for="client">Client</label>
                        <span class="error-message" v-show="form.errors.client">{{ form.errors.client }}</span>
                        <input type="text" name="client" v-model="form.data.client" class="form-control">
                    </div>
                    <div class="form-group" :class="{'has-error': form.errors.body}">
                        <label for="body">Testimonial</label>
                        <span class="error-message"
                              v-show="form.errors.body">{{ form.errors.body }}</span>
                        <textarea name="body" v-model="form.data.body" class="form-control h-48"></textarea>
                    </div>
                    <div class="modal-form-button-bar">
                        <button class="dd-btn btn btn-grey" type="button" @click="modalOpen = false">Cancel</button>
                        <button class="btn dd-btn" type="submit" :disabled="waiting">
                            <span v-show="!waiting">{{ formType === 'create' ? 'Add Testimonial' : 'Save Changes' }}</span>
                            <div class="spinner" v-show="waiting">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
            <div slot="footer"></div>
        </modal>
    </span>
</template>

<script type="text/babel">

    import Form from "./Form";
    import formMixin from "./mixins/formMixin";

    export default {
        mixins: [formMixin],

        data() {
            return {
                form: new Form({
                    client: this.formAttributes.client || '',
                    body: this.formAttributes.body || '',
                })
            };
        },

        methods: {
            canSubmit() {
                return this.form.title !== '' && this.form.body !== '';
            },

            getUpdatedDataFromResponseData({client, body}) {
                return {
                    client,
                    body
                };
            },

            getStoreActionEventName() {
                return 'created-testimonial';
            },

            getUpdateActionEventName() {
                return 'updated-testimonial';
            }
        }
    }
</script>