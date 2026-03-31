<template>
    <div class="flex items-center gap-2">
        <Switch
            @update:model-value="update"
            :disabled="config.disabled || isReadOnly"
            :id="fieldId"
            :model-value="value"
            :read-only="isReadOnly"
        />
        <Heading v-if="inlineLabel" v-html="$markdown(__(inlineLabel), { openLinksInNewTabs: true })" />
    </div>
</template>

<script>
import { Fieldtype } from '@statamic/cms';
import { Heading, Switch } from '@statamic/cms/ui';

export default {
    mixins: [Fieldtype],

    components: {
        Switch,
        Heading,
    },

    computed: {
        inlineLabel() {
            return this.value
                ? this.config.inline_label_when_true || this.config.inline_label
                : this.config.inline_label;
        },

        replicatorPreview() {
            if (!this.showFieldPreviews) return;

            return (this.value ? '✓' : '✗') + ' ' + __(this.config.display);
        },
    },
};
</script>

<style>
/* Center vertically with text inputs */
.grid-cell .toggle-fieldtype {
    min-height: 40px;
    display: flex;
    align-items: center;
}
</style>
