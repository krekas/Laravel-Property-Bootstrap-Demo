<template>
		<div class="row align-items-center py-5">
        <div class="col-lg-3">Pagination ({{ currentPage }} of {{ lastPage }})</div>

				<div class="col-lg-6 text-center">
            <div class="custom-pagination">
								<Component
										:is="link.url ? 'Link' : 'a'"
										v-for="link in links"
										:href="link.url"
										v-html="label(link.label)"
										:class="{ 'active' : link.active }"
										preserve-scroll
								/>
						</div>
				</div>
		</div>
</template>

<script setup>
const props = defineProps({
		links: Array,
		currentPage: Number,
		lastPage: Number,
})

function label(label) {
		if (label == '&laquo; Previous') {
				return '&lsaquo;'
		} else if (label == 'Next &raquo;') {
				return '&rsaquo;'
		} else {
				return label
		}
}
</script>
