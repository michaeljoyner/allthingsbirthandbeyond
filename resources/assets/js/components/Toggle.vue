<template>
    <span class="toggle-component">
        <label :for="`toggle_${unique}`"
               class="inline-flex items-center">{{ labelText }}
            <div class="toggle-container"
                 :class="{'off': !state}">
            <div class="toggle-rail"></div>
            <div class="toggle-knob"></div>
        </div>
        </label>
        <input class="dn"
               type="checkbox"
               v-model="state"
               :id="`toggle_${unique}`"
               @change="toggle">


    </span>
</template>

<script type="text/babel">
    export default {
        props: ['toggle-state', 'label-text', 'unique', 'on-url', 'off-url', 'on-payload'],

        data() {
            return {
                state: null,
            }
        },

        mounted() {
            this.state = this.toggleState;
        },

        methods: {
            toggle() {
                this.state ? this.turnOn() : this.turnOff();
            },

            turnOn() {
                axios.post(this.onUrl, this.onPayload)
                    .then(() => this.state = true)
                    .catch(() => this.revert())
                    .then(() => this.$emit('toggled-state', this.state));
            },

            turnOff() {
                axios.delete(this.offUrl)
                    .then(() => this.state = false)
                    .catch(() => this.revert())
                    .then(() => this.$emit('toggled-state', this.state));
            },

            revert() {
                this.state = !this.state;
            }


        },

        watch: {
            toggleState(newVal, old) {
                this.state = newVal;
            }
        }
    }
</script>

<style scoped
       lang="less">

    .toggle-container {
        display: inline-block;
        width: 40px;
        height: 6px;
        position: relative;
        margin-left: 1rem;
        margin-right: 1rem;

        &.off {
            .toggle-knob {
                transform: translate3d(33px, 0, 0);
                background-color: #b9b9b9;
            }
        }

        .toggle-rail {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            background-color: #d7d7d7;
            border-radius: 3px;
        }

        .toggle-knob {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            transition: .3s;
            position: absolute;
            left: 0;
            top: -4px;
            background-color: mediumpurple;
            transform: translate3d(0, 0, 0);
        }


    }
    input[type=checkbox] {
        display: none;
    }
</style>