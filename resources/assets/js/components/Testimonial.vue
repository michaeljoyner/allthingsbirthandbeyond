<template>
    <div class="testimonial-component card">
        <div class="image-box single-image-uploader-box">
            <single-upload :default="itemAttributes.thumb_img"
                           :url="`/admin/testimonials/${itemAttributes.id}/image`"
                           size="preview"
                           :preview-width="300"
                           :preview-height="225"
                           :unique="itemAttributes.id"
                           :delete-url="`/admin/testimonials/${itemAttributes.id}/image`"
            ></single-upload>
        </div>
        <div class="detail-box">
            <div class="testimonial-actions">
                <toggle-switch on-url="/admin/published-testimonials"
                               :off-url="`/admin/published-testimonials/${itemAttributes.id}`"
                               :on-payload="{testimonial_id: itemAttributes.id}"
                               :unique="itemAttributes.id"
                               label-text="Publish"
                               :toggle-state="itemAttributes.published"
                ></toggle-switch>
                <testimonial-form :url="`/admin/testimonials/${itemAttributes.id}`"
                                  form-type="update"
                                  button-text="Edit"
                                  :form-attributes="itemAttributes"
                                  @updated-testimonial="updateData"
                ></testimonial-form>
                <delete-modal :url="`/admin/testimonials/${itemAttributes.id}`"
                              :redirect="false"
                              :item-name="itemAttributes.client"
                              @item-deleted="removeTestimonial"
                ></delete-modal>
            </div>
            <p class="label">Client</p>
            <p>{{ client }}</p>
            <p class="label">Testimonial</p>
            <p>{{ body }}</p>
        </div>
    </div>
</template>

<script type="text/babel">

    import setsData from "./mixins/SetsDataFromObject";

    export default {

        props: ['item-attributes'],

        mixins: [setsData],

        data() {
            return {
                client: '',
                body: ''
            };
        },

        mounted() {
            this.setDataFrom(this.itemAttributes);
        },

        methods: {
            updateData({client, body}) {
                this.client = client;
                this.body = body;
            },

            removeTestimonial() {
                this.$emit('remove-testimonial', this.itemAttributes.id);
            }
        }
    }
</script>

<style scoped lang="scss" type="text/scss">
    .testimonial-component {
        display: flex;
        align-items: stretch;

        .image-box {
            width: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 0;
            flex-shrink: 0;
            flex-basis: auto;
        }

        .detail-box {
            flex-grow: 1;
            flex-shrink: 1;
            flex-basis: auto;
            position: relative;

            .testimonial-actions {
                position: absolute;
                top: 0;
                right: 0;
            }
        }
    }
</style>