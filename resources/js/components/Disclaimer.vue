<script setup>
import { Fieldtype } from '@statamic/cms';
import { Toggle } from '@statamic/cms/ui';

const emit = defineEmits(Fieldtype.emits);
const props = defineProps(Fieldtype.props);
const { expose, update } = Fieldtype.use(emit, props);
defineExpose(expose);
</script>

<template>
    <Toggle :model-value="value" @update:model-value="update" />
</template>
