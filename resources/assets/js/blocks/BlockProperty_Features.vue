<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-repeater type="property_features_item" :name="repeaterName('property_features_item')" ></a17-repeater>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
