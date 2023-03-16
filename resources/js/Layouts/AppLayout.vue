<template>
  <Navigation />

  <slot />

  <Footer />
</template>

<script setup>
import Navigation from "@/Layouts/Navigation.vue";
import Footer from "@/Layouts/Footer.vue";
import { onMounted } from "vue";
import AOS from "aos";
import navbar from "@/assets/navbar";

onMounted(() => {
		AOS.init({
				duration: 800,
				easing: 'slide',
				once: true
		})

		navbar()
})
</script>
