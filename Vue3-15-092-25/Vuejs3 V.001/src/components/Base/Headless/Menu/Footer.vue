<script lang="ts">
export default {
  inheritAttrs: false,
};

export interface FooterProps {
  as?: string | object;
}
</script>

<script setup lang="ts">
import _ from "lodash";
import { twMerge } from "tailwind-merge";
import { useAttrs, computed } from "vue";

const { as = "div" } = defineProps<FooterProps>();

const attrs = useAttrs();
const computedClass = computed(() =>
  twMerge(["flex p-1", typeof attrs.class === "string" && attrs.class])
);
</script>

<template>
  <component :is="as" :class="computedClass" v-bind="_.omit(attrs, 'class')">
    <slot></slot>
  </component>
</template>
