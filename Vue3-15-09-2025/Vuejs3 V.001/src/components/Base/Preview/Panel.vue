<script setup lang="ts">
import { inject, type HTMLAttributes, computed } from "vue";
import { type ProvidePreview } from "./Preview.vue";

export interface PanelProps extends /* @vue-ignore */ HTMLAttributes {
  type?: "preview" | "source";
}

const { type = "preview" } = defineProps<PanelProps>();

const preview = inject<ProvidePreview>(
  "preview",
  computed(() => true)
);
</script>

<template>
  <div v-if="(type == 'preview' && preview) || (type == 'source' && !preview)">
    <slot></slot>
  </div>
</template>
