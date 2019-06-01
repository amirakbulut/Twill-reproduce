<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Vastgoed overzicht" name="browsers.properties"> <a17-browserfield :name="fieldName('properties')" item-label="vastgoed overzicht" :max="6" :wide="false" endpoint="/content/properties/browser" :endpoints="[]" modal-title="Attach vastgoed overzicht" :draggable="true" >Add up to 6 vastgoed overzicht</a17-browserfield></a17-inputframe>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
