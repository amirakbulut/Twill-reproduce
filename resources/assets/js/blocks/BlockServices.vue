<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Diensten" name="browsers.services"> <a17-browserfield :name="fieldName('services')" item-label="diensten" :max="4" :wide="false" endpoint="/content/services/browser" :endpoints="[]" modal-title="Attach diensten" :draggable="true" >Add up to 4 diensten</a17-browserfield></a17-inputframe>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
