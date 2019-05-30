<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Products" name="browsers.products"> <a17-browserfield :name="fieldName('products')" item-label="products" :max="10" :wide="false" endpoint="/content/services/browser" :endpoints="[]" modal-title="Attach products" :draggable="true" >Add up to 10 products</a17-browserfield></a17-inputframe>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
