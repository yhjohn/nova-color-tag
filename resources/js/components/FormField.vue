<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <div class="flex">
                <div
                    v-for="(color, i) in field.colors"
                    :key=i :class="['ct-round mr-2', {active: value === color}]"
                    v-on:click="handleChange(color)">
                    <div class="inner" :style="{ 'background-color': color }" ></div>
                </div>
            </div>
        </template>
    </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value || '')
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value
        },
    },
}
</script>
