<script setup>
import { ref } from 'vue'

const count = ref(0)

function increment() {
  count.value++
}
console.log(name)
const nm=name
</script>

<template>
  <button @click="increment">
    {{ count }} {{ nm }}
  </button>
</template>
