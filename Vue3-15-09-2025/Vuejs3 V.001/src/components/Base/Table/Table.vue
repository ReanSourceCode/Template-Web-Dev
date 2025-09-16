<script lang="ts">
export default {
  inheritAttrs: false,
};

export interface TableProps extends /* @vue-ignore */ TableHTMLAttributes {
  dark?: boolean;
  bordered?: boolean;
  hover?: boolean;
  striped?: boolean;
  sm?: boolean;
}
</script>

<script setup lang="ts">
import _ from "lodash";
import { twMerge } from "tailwind-merge";
import { computed, type TableHTMLAttributes, useAttrs, provide } from "vue";

export type ProvideTable = {
  dark: boolean;
  bordered: boolean;
  hover: boolean;
  striped: boolean;
  sm: boolean;
};

const {
  dark = false,
  bordered = false,
  hover = false,
  striped = false,
  sm = false,
} = defineProps<TableProps>();

const attrs = useAttrs();

const computedClass = computed(() =>
  twMerge([
    "w-full text-left",
    dark && "bg-dark text-white dark:bg-black/30",
    typeof attrs.class === "string" && attrs.class,
  ])
);

provide<ProvideTable>("table", {
  dark: dark,
  bordered: bordered,
  hover: hover,
  striped: striped,
  sm: sm,
});
</script>

<template>
  <table :class="computedClass" v-bind="_.omit(attrs, 'class')">
    <slot></slot>
  </table>
</template>
