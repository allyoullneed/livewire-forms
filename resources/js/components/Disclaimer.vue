<script setup>
import { Fieldtype } from '@statamic/cms';
import { ToggleItem } from '@statamic/cms/ui';

const emit = defineEmits(Fieldtype.emits);
const props = defineProps(Fieldtype.props);
const { expose, update } = Fieldtype.use(emit, props);
defineExpose(expose);
</script>

<template>
    <ToggleItem :model-value="value" @update:model-value="update" />
</template>
