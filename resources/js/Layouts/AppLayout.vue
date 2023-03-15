<template>
  <Navigation />

  <slot />

  <Footer />
</template>

<script setup>
import Navigation from "@/Layouts/Navigation.vue";
import Footer from "@/Layouts/Footer.vue";
</script>
