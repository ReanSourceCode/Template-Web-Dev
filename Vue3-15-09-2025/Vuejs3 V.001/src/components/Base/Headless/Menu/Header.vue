<script lang="ts">
export default {
  inheritAttrs: false,
};

export interface HeaderProps {
  as?: string | object;
}
</script>

<script setup lang="ts">
import _ from "lodash";
import { twMerge } from "tailwind-merge";
import { useAttrs, computed } from "vue";

const { as = "div" } = defineProps<HeaderProps>();

const attrs = useAttrs();
const computedClass = computed(() =>
  twMerge(["p-2 font-medium", typeof attrs.class === "string" && attrs.class])
);
</script>

<template>
  <component :is="as" :class="computedClass" v-bind="_.omit(attrs, 'class')">
    <slot></slot>
  </component>
</template>
