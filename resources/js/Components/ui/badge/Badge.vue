<script setup>
// import { badgeVariants } from ".";
import { cn } from "@/lib/utils";

const props = defineProps({
  variant: { type: null, required: false },
  class: { type: null, required: false },
});
</script>

<template>
  <div :class="props.class">
    <slot />
  </div>
</template>
