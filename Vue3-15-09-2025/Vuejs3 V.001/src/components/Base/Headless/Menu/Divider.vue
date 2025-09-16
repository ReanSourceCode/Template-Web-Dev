<script lang="ts">
export default {
  inheritAttrs: false,
};

export interface DividerProps {
  as?: string | object;
}
</script>

<script setup lang="ts">
import _ from "lodash";
import { twMerge } from "tailwind-merge";
import { useAttrs, computed } from "vue";

const { as = "div" } = defineProps<DividerProps>();

const attrs = useAttrs();
const computedClass = computed(() =>
  twMerge([
    "h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400",
    typeof attrs.class === "string" && attrs.class,
  ])
);
</script>

<template>
  <component :is="as" :class="computedClass" v-bind="_.omit(attrs, 'class')">
    <slot></slot>
  </component>
</template>
